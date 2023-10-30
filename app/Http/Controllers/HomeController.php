<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        if ($request->filter) {
            $filterTask = $request->filter;
        } else {
            $filterTask = 'pending';
        }

        if ($filterTask !== 'all' && $filterTask !== 'pending' && $filterTask !== 'done') {
            $filterTask = 'pending';
        }

        if ($request->date) {
            $filteredDate = $request->date;
        } else {
            $filteredDate = date('Y-m-d');
        }

        $carbonDate = Carbon::createFromDate($filteredDate);

        $previousDateWithTask = null;
        $nextDateWithTask = null;
        $dateWithTask = Task::where('due_date', '>=', $filteredDate)->orderBy('due_date')->get()->take(1);

        if (!$dateWithTask->isEmpty()) {
            $dateWithTask = $dateWithTask->first()->due_date;
            $previousDateWithTask = Task::where('due_date', '<', $dateWithTask)->orderBy('due_date', 'desc')->get()->take(1);
            $nextDateWithTask = Task::where('due_date', '>', $dateWithTask)->orderBy('due_date')->get()->take(1);

            $previousDateWithTask = $previousDateWithTask->isEmpty() ? null : $previousDateWithTask->first()->due_date;
            $nextDateWithTask = $nextDateWithTask->isEmpty() ? null : $nextDateWithTask->first()->due_date;
        } else {
            $dateWithTask = null;
        }

        $carbonDate = Carbon::createFromDate($dateWithTask);
        $data['date_as_string'] = $carbonDate->format('d \d\e ') . ucfirst($carbonDate->translatedFormat('M \d\e Y'));

        $data['date_prev_button'] = $previousDateWithTask;
        $data['date_next_button'] = $nextDateWithTask;

        $data['tasks'] = Task::whereDate('due_date', $dateWithTask)->orderBy('is_done')->get();

        $data['late_tasks'] = Task::where('due_date', '<', now())
            ->where('is_done', false)
            ->orderBy('due_date')
            ->get();

        $data['filterTask'] = $filterTask;

        return view('home', $data);
    }
}
