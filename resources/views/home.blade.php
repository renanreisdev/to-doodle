<x-layout>
    <x-slot:button>
        <x-button title="Nova Tarefa" />
    </x-slot:button>

    @if (count($late_tasks) > 0)
        <div class="text-primary flex-col transition-all ease-linear">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-medium tracking-wide mb-5">Atrasadas</h2>

                <button data-button-late-tasks onClick="handleShowLateTasks()"
                    class="-rotate-90 border-none transition-all ease-linear duration-200 uppercase hover:scale-125">

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 24C18.612 24 24 18.612 24 12C24 5.388 18.612 2.71623e-07 12 -3.06417e-07C5.388 -8.84456e-07 2.36977e-06 5.388 1.79173e-06 12C1.21369e-06 18.612 5.388 24 12 24ZM8.652 11.364L12.888 7.128C13.068 6.948 13.296 6.864 13.524 6.864C13.752 6.864 13.98 6.948 14.16 7.128C14.508 7.476 14.508 8.052 14.16 8.4L10.56 12L14.16 15.6C14.508 15.948 14.508 16.524 14.16 16.872C13.812 17.22 13.236 17.22 12.888 16.872L8.652 12.636C8.292 12.288 8.292 11.712 8.652 11.364Z"
                            fill="#45A29E" />
                    </svg>

                </button>
            </div>

            <div data-late-tasks-container class="h-full overflow-hidden transition-all ease-linear duration-200">
                @foreach ($late_tasks as $task)
                    <x-task :data=$task />
                @endforeach
            </div>

        </div>
    @endif

    @if (count($tasks) > 0)
        <div class="text-primary flex-col">

            <div class="flex justify-between items-center">
                <h2 class="text-xl font-medium tracking-wide mb-5 flex items-center gap-3">

                    @if ($date_prev_button)
                        <a href="{{ route('home', ['date' => $date_prev_button]) }}">
                    @endif
                    <svg class="{{ $date_prev_button ? 'cursor-pointer hover:scale-125' : 'opacity-30' }} transition-all ease-linear duration-200"
                        width="15" height="24" viewBox="0 0 15 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5141 3.67785L5.18121 12.0107L13.5141 20.3436C14.3517 21.1812 14.3517 22.5342 13.5141 23.3718C12.6765 24.2094 11.3235 24.2094 10.4859 23.3718L0.628188 13.5141C-0.209396 12.6765 -0.209396 11.3235 0.628188 10.4859L10.4859 0.628188C11.3235 -0.209396 12.6765 -0.209396 13.5141 0.628188C14.3302 1.46577 14.3517 2.84027 13.5141 3.67785Z"
                            fill="#45A29E" />
                    </svg>
                    @if ($date_prev_button)
                        </a>
                    @endif
                    {{ $date_as_string }}
                    @if ($date_next_button)
                        <a href="{{ route('home', ['date' => $date_next_button]) }}">
                    @endif
                    <svg class="{{ $date_next_button ? 'cursor-pointer hover:scale-125' : 'opacity-30' }} rotate-180 transition-all ease-linear duration-200"
                        width="15" height="24" viewBox="0 0 15 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5141 3.67785L5.18121 12.0107L13.5141 20.3436C14.3517 21.1812 14.3517 22.5342 13.5141 23.3718C12.6765 24.2094 11.3235 24.2094 10.4859 23.3718L0.628188 13.5141C-0.209396 12.6765 -0.209396 11.3235 0.628188 10.4859L10.4859 0.628188C11.3235 -0.209396 12.6765 -0.209396 13.5141 0.628188C14.3302 1.46577 14.3517 2.84027 13.5141 3.67785Z"
                            fill="#45A29E" />
                    </svg>
                    @if ($date_next_button)
                        </a>
                    @endif
                </h2>

                <button data-button-tasks onClick="handleShowTasks()"
                    class="-rotate-90 border-none transition-all ease-linear duration-200 uppercase hover:scale-125">

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 24C18.612 24 24 18.612 24 12C24 5.388 18.612 2.71623e-07 12 -3.06417e-07C5.388 -8.84456e-07 2.36977e-06 5.388 1.79173e-06 12C1.21369e-06 18.612 5.388 24 12 24ZM8.652 11.364L12.888 7.128C13.068 6.948 13.296 6.864 13.524 6.864C13.752 6.864 13.98 6.948 14.16 7.128C14.508 7.476 14.508 8.052 14.16 8.4L10.56 12L14.16 15.6C14.508 15.948 14.508 16.524 14.16 16.872C13.812 17.22 13.236 17.22 12.888 16.872L8.652 12.636C8.292 12.288 8.292 11.712 8.652 11.364Z"
                            fill="#45A29E" />
                    </svg>

                </button>
            </div>

            <div data-tasks-container class="h-full overflow-hidden transition-all ease-linear duration-200">
                @foreach ($tasks as $task)
                    <x-task :data=$task />
                @endforeach
            </div>
    @endif

    </div>
</x-layout>

<script>
    function handleShowLateTasks() {
        let buttonLateTasks = document.querySelector('[data-button-late-tasks]');
        let tasks = document.querySelector('[data-late-tasks-container]');

        buttonLateTasks.classList.toggle('-rotate-90');

        if (tasks.classList.contains('hidden')) {
            tasks.classList.toggle('hidden');
            setTimeout(() => {
                tasks.classList.toggle('h-full');
                tasks.classList.toggle('h-0');
            }, 1);
        } else {
            setTimeout(() => {
                tasks.classList.toggle('hidden');
            }, 200);
            tasks.classList.toggle('h-full');
            tasks.classList.toggle('h-0');
        }
    }

    function handleShowTasks() {
        let buttonTasks = document.querySelector('[data-button-tasks]');
        let tasks = document.querySelector('[data-tasks-container]');

        buttonTasks.classList.toggle('-rotate-90');

        if (tasks.classList.contains('hidden')) {
            tasks.classList.toggle('hidden');
            setTimeout(() => {
                tasks.classList.toggle('h-full');
                tasks.classList.toggle('h-0');
            }, 1);
        } else {
            setTimeout(() => {
                tasks.classList.toggle('hidden');
            }, 200);
            tasks.classList.toggle('h-full');
            tasks.classList.toggle('h-0');
        }
    }
</script>
