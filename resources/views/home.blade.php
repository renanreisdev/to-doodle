@php
    $tasks = [
        [
            'id' => 1,
            'done' => true,
            'title' => 'Tarefa 1',
            'description' => '',
            'date' => '2023/11/10',
            'priority' => 'Baixa',
            'priority-color' => 'bg-[#1ABDB1]',
            'category' => 'Pessoal',
            'category-icon' => 'pessoal',
        ],
        [
            'id' => 2,
            'done' => false,
            'title' => 'Tarefa 2',
            'description' => 'Descrição da tarefa 2',
            'date' => '2023/11/15',
            'priority' => 'Alta',
            'priority-color' => 'bg-[#FF0000]',
            'category' => 'Pessoal',
            'category-icon' => 'pessoal',
        ],
        [
            'id' => 3,
            'done' => false,
            'title' => 'Tarefa 3',
            'description' => 'Descrição da tarefa 3',
            'date' => '2023/10/25',
            'priority' => 'Baixa',
            'priority-color' => 'bg-[#1ABDB1]',
            'category' => 'Pessoal',
            'category-icon' => 'pessoal',
        ],
        [
            'id' => 4,
            'done' => false,
            'title' => 'Tarefa 4',
            'description' => 'Descrição da tarefa 4',
            'date' => '2023/10/28',
            'priority' => 'Alta',
            'priority-color' => 'bg-[#FF0000]',
            'category' => 'Pessoal',
            'category-icon' => 'pessoal',
        ],
    ];

    $months = [
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 => 'Outubro',
        11 => 'Novembro',
        12 => 'Dezembro',
    ];

    date_default_timezone_set('America/Sao_Paulo');
    $date = getdate();

    $date['hours'] = 0;
    $date['minutes'] = 0;
    $date['seconds'] = 0;

    $today = mktime($date['hours'], $date['minutes'], $date['seconds'], $date['mon'], $date['mday'], $date['year']);

    $formatedDate = date('d \d\e ', $today) . $months[date('m', $today)] . date(' \d\e Y', $today);

@endphp

<x-layout>
    <x-slot:button>
        <x-button title="Nova Tarefa" />
    </x-slot:button>

    @if (count($tasks) > 0)
        <div class="text-primary flex-col">
            <h2 class="text-xl font-medium tracking-wide mb-5">Atrasadas</h2>

            @foreach ($tasks as $task)
                @php
                    $taskDate = strtotime($task['date']);
                @endphp
                @if ($taskDate < $today)
                    <x-task :data=$task />
                @endif
            @endforeach
        </div>
    @endif

    @if (count($tasks) > 0)
        <div class="text-primary flex-col">
            <h2 class="text-xl font-medium tracking-wide mb-5 flex items-center gap-3">
                <svg class="cursor-pointer hover:scale-125 transition-all ease-linear duration-200" width="15"
                    height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.5141 3.67785L5.18121 12.0107L13.5141 20.3436C14.3517 21.1812 14.3517 22.5342 13.5141 23.3718C12.6765 24.2094 11.3235 24.2094 10.4859 23.3718L0.628188 13.5141C-0.209396 12.6765 -0.209396 11.3235 0.628188 10.4859L10.4859 0.628188C11.3235 -0.209396 12.6765 -0.209396 13.5141 0.628188C14.3302 1.46577 14.3517 2.84027 13.5141 3.67785Z"
                        fill="#45A29E" />
                </svg>
                {{ $formatedDate }}
                <svg class="rotate-180 cursor-pointer hover:scale-125 transition-all ease-linear duration-200"
                    width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.5141 3.67785L5.18121 12.0107L13.5141 20.3436C14.3517 21.1812 14.3517 22.5342 13.5141 23.3718C12.6765 24.2094 11.3235 24.2094 10.4859 23.3718L0.628188 13.5141C-0.209396 12.6765 -0.209396 11.3235 0.628188 10.4859L10.4859 0.628188C11.3235 -0.209396 12.6765 -0.209396 13.5141 0.628188C14.3302 1.46577 14.3517 2.84027 13.5141 3.67785Z"
                        fill="#45A29E" />
                </svg>
            </h2>

            @foreach ($tasks as $task)
                @php
                    $taskDate = strtotime($task['date']);
                @endphp
                @if ($taskDate == $today)
                    <x-task :data=$task />
                @endif
            @endforeach
    @endif

    </div>
</x-layout>
