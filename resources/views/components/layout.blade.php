<!DOCTYPE html>
<html lang="pt-BR   ">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle ?? 'To-Doodle - Tarefas' }}</title>
</head>

<body>
    <header class="w-screen px-5 flex justify-between items-center bg-primary">
        <div class="h-16 w-60 flex items-center bg-primary">
            <svg width="218" height="61" viewBox="0 0 218 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="218" height="61" />
                <path
                    d="M25.75 48.916C24.35 48.916 23.286 48.454 22.558 47.53C21.83 46.606 21.326 45.234 21.046 43.414C20.794 41.566 20.668 39.284 20.668 36.568C20.668 35.588 20.682 34.664 20.71 33.796C20.738 32.928 20.766 32.116 20.794 31.36C17.434 31.192 14.97 30.716 13.402 29.932C11.834 29.148 11.05 27.79 11.05 25.858C11.05 23.45 12.268 21.826 14.704 20.986C17.168 20.146 20.864 19.726 25.792 19.726C30.748 19.726 34.472 20.146 36.964 20.986C39.484 21.826 40.744 23.45 40.744 25.858C40.744 27.762 39.946 29.12 38.35 29.932C36.782 30.716 34.332 31.192 31 31.36C31.056 32.116 31.098 32.928 31.126 33.796C31.154 34.664 31.168 35.588 31.168 36.568C31.168 40.852 30.79 43.988 30.034 45.976C29.278 47.936 27.85 48.916 25.75 48.916ZM47.0207 49.042C44.9487 49.07 43.1287 48.65 41.5607 47.782C40.0207 46.886 38.8027 45.682 37.9067 44.17C37.0387 42.63 36.5767 40.936 36.5207 39.088C36.4927 37.184 36.9267 35.504 37.8227 34.048C38.7187 32.564 39.9647 31.388 41.5607 30.52C43.1567 29.652 44.9767 29.218 47.0207 29.218C49.0367 29.19 50.8147 29.61 52.3547 30.478C53.9227 31.346 55.1687 32.522 56.0927 34.006C57.0167 35.49 57.5067 37.184 57.5627 39.088C57.5907 40.908 57.1567 42.574 56.2607 44.086C55.3647 45.57 54.1187 46.76 52.5227 47.656C50.9267 48.524 49.0927 48.986 47.0207 49.042ZM47.1467 42.91C47.9027 42.91 48.5607 42.616 49.1207 42.028C49.6807 41.44 49.9607 40.754 49.9607 39.97C49.9607 39.186 49.6807 38.514 49.1207 37.954C48.5607 37.366 47.9027 37.072 47.1467 37.072C46.3907 37.072 45.7327 37.366 45.1727 37.954C44.6127 38.514 44.3327 39.186 44.3327 39.97C44.3327 40.754 44.6127 41.44 45.1727 42.028C45.7327 42.616 46.3907 42.91 47.1467 42.91ZM67.9695 41.272C67.1295 41.272 66.2475 41.258 65.3235 41.23C64.4275 41.202 63.6015 41.104 62.8455 40.936C62.0895 40.768 61.4735 40.474 60.9975 40.054C60.5215 39.606 60.2835 38.962 60.2835 38.122C60.2835 37.282 60.5215 36.652 60.9975 36.232C61.4735 35.784 62.0895 35.476 62.8455 35.308C63.6015 35.112 64.4275 35 65.3235 34.972C66.2475 34.944 67.1295 34.93 67.9695 34.93C68.8375 34.93 69.7195 34.944 70.6155 34.972C71.5115 35 72.3375 35.112 73.0935 35.308C73.8775 35.476 74.5075 35.784 74.9835 36.232C75.4595 36.652 75.6975 37.282 75.6975 38.122C75.6975 38.962 75.4595 39.606 74.9835 40.054C74.5075 40.474 73.8775 40.768 73.0935 40.936C72.3375 41.104 71.5115 41.202 70.6155 41.23C69.7195 41.258 68.8375 41.272 67.9695 41.272ZM90.2407 49C87.5247 49 85.3687 48.762 83.7727 48.286C82.1767 47.782 81.0007 46.984 80.2447 45.892C79.4887 44.8 78.9987 43.33 78.7747 41.482C78.5507 39.634 78.4387 37.352 78.4387 34.636C78.4387 31.92 78.5367 29.61 78.7327 27.706C78.9567 25.774 79.4327 24.22 80.1607 23.044C80.9167 21.84 82.0787 20.972 83.6467 20.44C85.2427 19.88 87.3987 19.6 90.1147 19.6C91.2627 19.6 92.4947 19.768 93.8107 20.104C95.1267 20.412 96.4287 20.916 97.7167 21.616C99.0047 22.316 100.167 23.254 101.203 24.43C102.267 25.606 103.107 27.034 103.723 28.714C104.367 30.394 104.689 32.382 104.689 34.678C104.689 36.89 104.353 38.808 103.681 40.432C103.037 42.028 102.183 43.386 101.119 44.506C100.083 45.598 98.9207 46.48 97.6327 47.152C96.3447 47.796 95.0567 48.272 93.7687 48.58C92.4807 48.86 91.3047 49 90.2407 49ZM87.6367 41.608C90.2127 42 92.2147 41.664 93.6427 40.6C95.0987 39.536 95.8267 37.926 95.8267 35.77C95.8267 33.81 95.0987 32.368 93.6427 31.444C92.2147 30.492 90.2127 30.212 87.6367 30.604V41.608ZM117.28 49.042C115.208 49.07 113.388 48.65 111.82 47.782C110.28 46.886 109.062 45.682 108.166 44.17C107.298 42.63 106.836 40.936 106.78 39.088C106.752 37.184 107.186 35.504 108.082 34.048C108.978 32.564 110.224 31.388 111.82 30.52C113.416 29.652 115.236 29.218 117.28 29.218C119.296 29.19 121.074 29.61 122.614 30.478C124.182 31.346 125.428 32.522 126.352 34.006C127.276 35.49 127.766 37.184 127.822 39.088C127.85 40.908 127.416 42.574 126.52 44.086C125.624 45.57 124.378 46.76 122.782 47.656C121.186 48.524 119.352 48.986 117.28 49.042ZM117.406 42.91C118.162 42.91 118.82 42.616 119.38 42.028C119.94 41.44 120.22 40.754 120.22 39.97C120.22 39.186 119.94 38.514 119.38 37.954C118.82 37.366 118.162 37.072 117.406 37.072C116.65 37.072 115.992 37.366 115.432 37.954C114.872 38.514 114.592 39.186 114.592 39.97C114.592 40.754 114.872 41.44 115.432 42.028C115.992 42.616 116.65 42.91 117.406 42.91ZM139.593 49.042C137.521 49.07 135.701 48.65 134.133 47.782C132.593 46.886 131.375 45.682 130.479 44.17C129.611 42.63 129.149 40.936 129.093 39.088C129.065 37.184 129.499 35.504 130.395 34.048C131.291 32.564 132.537 31.388 134.133 30.52C135.729 29.652 137.549 29.218 139.593 29.218C141.609 29.19 143.387 29.61 144.927 30.478C146.495 31.346 147.741 32.522 148.665 34.006C149.589 35.49 150.079 37.184 150.135 39.088C150.163 40.908 149.729 42.574 148.833 44.086C147.937 45.57 146.691 46.76 145.095 47.656C143.499 48.524 141.665 48.986 139.593 49.042ZM139.719 42.91C140.475 42.91 141.133 42.616 141.693 42.028C142.253 41.44 142.533 40.754 142.533 39.97C142.533 39.186 142.253 38.514 141.693 37.954C141.133 37.366 140.475 37.072 139.719 37.072C138.963 37.072 138.305 37.366 137.745 37.954C137.185 38.514 136.905 39.186 136.905 39.97C136.905 40.754 137.185 41.44 137.745 42.028C138.305 42.616 138.963 42.91 139.719 42.91ZM161.401 49C159.329 49 157.537 48.51 156.025 47.53C154.541 46.55 153.393 45.276 152.581 43.708C151.797 42.14 151.405 40.502 151.405 38.794C151.405 36.61 151.839 34.818 152.707 33.418C153.603 32.018 154.737 30.982 156.109 30.31C157.481 29.61 158.909 29.26 160.393 29.26C161.093 29.26 161.807 29.344 162.535 29.512C163.263 29.652 163.949 29.904 164.593 30.268C164.481 29.064 164.229 27.888 163.837 26.74C163.473 25.564 163.291 24.374 163.291 23.17C163.291 21.938 163.669 21.028 164.425 20.44C165.181 19.852 165.993 19.558 166.861 19.558C167.869 19.558 168.737 19.88 169.465 20.524C170.193 21.168 170.809 22.022 171.313 23.086C171.845 24.15 172.265 25.354 172.573 26.698C172.881 28.014 173.105 29.372 173.245 30.772C173.385 32.172 173.455 33.516 173.455 34.804C173.455 35.224 173.427 35.868 173.371 36.736C173.343 37.604 173.217 38.57 172.993 39.634C172.769 40.698 172.405 41.776 171.901 42.868C171.425 43.96 170.739 44.968 169.843 45.892C168.975 46.816 167.855 47.572 166.483 48.16C165.111 48.72 163.417 49 161.401 49ZM161.653 42.364C162.409 42.364 163.067 42.084 163.627 41.524C164.187 40.936 164.467 40.25 164.467 39.466C164.467 38.682 164.187 37.996 163.627 37.408C163.067 36.82 162.409 36.526 161.653 36.526C160.897 36.526 160.225 36.82 159.637 37.408C159.077 37.996 158.797 38.682 158.797 39.466C158.797 40.25 159.077 40.936 159.637 41.524C160.225 42.084 160.897 42.364 161.653 42.364ZM180.478 48.916C179.05 48.916 177.986 48.384 177.286 47.32C176.586 46.228 176.124 44.604 175.9 42.448C175.676 40.264 175.564 37.534 175.564 34.258C175.564 32.102 175.592 30.128 175.648 28.336C175.732 26.544 175.928 25.004 176.236 23.716C176.544 22.4 177.034 21.392 177.706 20.692C178.378 19.964 179.316 19.6 180.52 19.6C181.724 19.6 182.662 19.964 183.334 20.692C184.006 21.392 184.496 22.4 184.804 23.716C185.112 25.004 185.294 26.544 185.35 28.336C185.434 30.128 185.476 32.102 185.476 34.258C185.476 39.186 185.126 42.868 184.426 45.304C183.754 47.712 182.438 48.916 180.478 48.916ZM197.303 49C195.203 49 193.355 48.594 191.759 47.782C190.191 46.942 188.959 45.808 188.063 44.38C187.195 42.924 186.761 41.258 186.761 39.382C186.761 37.562 187.195 35.882 188.063 34.342C188.959 32.802 190.177 31.57 191.717 30.646C193.285 29.722 195.077 29.26 197.093 29.26C198.969 29.26 200.579 29.638 201.923 30.394C203.267 31.15 204.289 32.116 204.989 33.292C205.717 34.44 206.081 35.658 206.081 36.946C206.081 38.234 205.787 39.298 205.199 40.138C204.611 40.95 203.841 41.58 202.889 42.028C201.965 42.448 200.971 42.728 199.907 42.868C198.843 43.008 197.821 43.036 196.841 42.952C195.861 42.84 195.035 42.672 194.363 42.448C194.867 43.26 195.497 43.82 196.253 44.128C197.037 44.408 197.849 44.534 198.689 44.506C199.557 44.45 200.341 44.352 201.041 44.212C201.909 44.016 202.623 44.058 203.183 44.338C203.743 44.618 204.037 45.066 204.065 45.682C204.093 46.186 203.911 46.69 203.519 47.194C203.155 47.698 202.483 48.132 201.503 48.496C200.523 48.832 199.123 49 197.303 49ZM194.489 37.324C194.769 37.772 195.175 38.094 195.707 38.29C196.239 38.458 196.771 38.514 197.303 38.458C197.863 38.402 198.325 38.248 198.689 37.996C199.081 37.744 199.277 37.394 199.277 36.946C199.277 36.47 199.081 36.05 198.689 35.686C198.325 35.294 197.737 35.098 196.925 35.098C196.141 35.098 195.539 35.35 195.119 35.854C194.699 36.33 194.489 36.82 194.489 37.324Z"
                    fill="url(#paint0_linear_11_17)" />
                <defs>
                    <linearGradient id="paint0_linear_11_17" x1="109" y1="0" x2="109" y2="61"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#66FCF1" />
                        <stop offset="1" stop-color="#45A29E" />
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <div class="flex-1 flex items-center justify-between gap-10">

            <div class="flex-1 flex items-center px-10">
                <input type="text" placeholder="Pesquisar..." id="search"
                    class="min-w-[150px] max-w-lg w-full pl-3 pr-11 py-[10px] bg-transparent border border-secondary rounded-md text-white_td outline-none">
                <label for="search" class="-ml-10">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.6736 21.2495L18.9998 16.5766C18.7889 16.3656 18.5029 16.2485 18.2029 16.2485H17.4388C18.7326 14.5939 19.5014 12.5129 19.5014 10.249C19.5014 4.86364 15.137 0.5 9.75071 0.5C4.36438 0.5 0 4.86364 0 10.249C0 15.6345 4.36438 19.9981 9.75071 19.9981C12.0149 19.9981 14.0963 19.2294 15.7512 17.9358V18.6998C15.7512 18.9998 15.8683 19.2857 16.0793 19.4966L20.7531 24.1696C21.1937 24.6101 21.9063 24.6101 22.3423 24.1696L23.6689 22.8431C24.1096 22.4026 24.1096 21.6901 23.6736 21.2495ZM9.75071 16.2485C6.43641 16.2485 3.75027 13.5675 3.75027 10.249C3.75027 6.93531 6.43172 4.24963 9.75071 4.24963C13.065 4.24963 15.7512 6.93062 15.7512 10.249C15.7512 13.5628 13.0697 16.2485 9.75071 16.2485Z"
                            fill="#F2F5F7" />
                    </svg>
                </label>
            </div>

            {{ $button ?? null }}

            <a href="/" class="flex items-center gap-2 text-white_td text-base tracking-wider">
                Login
                <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 0.5C8.95161 0.5 0 9.45161 0 20.5C0 31.5484 8.95161 40.5 20 40.5C31.0484 40.5 40 31.5484 40 20.5C40 9.45161 31.0484 0.5 20 0.5ZM20 8.24194C23.9194 8.24194 27.0968 11.4194 27.0968 15.3387C27.0968 19.2581 23.9194 22.4355 20 22.4355C16.0806 22.4355 12.9032 19.2581 12.9032 15.3387C12.9032 11.4194 16.0806 8.24194 20 8.24194ZM20 35.9839C15.2661 35.9839 11.0242 33.8387 8.18548 30.4839C9.70161 27.629 12.6694 25.6613 16.129 25.6613C16.3226 25.6613 16.5161 25.6935 16.7016 25.75C17.75 26.0887 18.8468 26.3065 20 26.3065C21.1532 26.3065 22.2581 26.0887 23.2984 25.75C23.4839 25.6935 23.6774 25.6613 23.871 25.6613C27.3306 25.6613 30.2984 27.629 31.8145 30.4839C28.9758 33.8387 24.7339 35.9839 20 35.9839Z"
                        fill="#66FCF1" />
                </svg>
            </a>
        </div>

    </header>

    <div class="w-full h-[calc(100vh-64px)] m-auto flex justify-center">
        <nav class="w-64 p-5 flex flex-col gap-5 bg-primary">
            <div class="flex flex-col gap-2">
                <div class="flex justify-between items-center text-secondary">
                    <div data-task-deg-progress style="--deg-progress: 5deg;"
                        class="relative w-20 h-20 flex justify-center items-center rounded-full bg-circle-progress before:absolute before:w-16 before:h-16 before:rounded-full before:bg-primary">
                        <span data-task-percent-progress class="text-white_td text-lg z-10">0%</span>
                    </div>
                    <p data-task-quantity-progress>Tarefas: 2/5</p>
                </div>
                <p class="text-center text-base tracking-wide text-white_td">{{ $date }}</p>
            </div>

            <div class="h-[1px] w-full bg-[#36404D]"></div>

            <ul class="text-white_td text-base tracking-wide">
                <li>
                    <div id="filter-task-pending" onclick="handleFilterTask(this)"
                        class="p-3 flex justify-between rounded-md cursor-pointer transition-all ease-linear duration-200 hover:bg-secondary2">
                        Tarefas pendentes
                    </div>
                </li>
                <li>
                    <div id="filter-task-done" onclick="handleFilterTask(this)"
                        class="p-3 my-2 flex justify-between rounded-md cursor-pointer transition-all ease-linear duration-200 hover:bg-secondary2">
                        Tarefas concluidas
                    </div>
                </li>
                <li>
                    <div id="filter-task-all" onclick="handleFilterTask(this)"
                        class="p-3 flex justify-between rounded-md cursor-pointer transition-all ease-linear duration-200 hover:bg-secondary2">
                        Todas tarefas
                    </div>
                </li>
            </ul>
        </nav>
        <main class="flex-1 p-5 flex flex-col gap-10 overflow-auto scroll-smooth">
            {{ $slot }}
        </main>
    </div>

    @foreach ($lateTasks as $task)
        <div class="hidden" data-late-tasks-hidden data-div-late-task-id="{{ $task->id }}"
            data-div-late-task-is-done="{{ $task->is_done }}" data-div-late-task-title="{{ $task->title }}"
            data-div-late-task-description="{{ $task->description }}" data-div-late-task-date="{{ $task->date }}"
            data-div-late-task-category-title="{{ $task->category->title }}"
            data-div-late-task-category-color="{{ $task->category->color }}"
            data-div-late-task-priority-title="{{ $task->priority->title }}"
            data-div-late-task-priority-color="{{ $task->priority->color }}">
        </div>
    @endforeach

    @foreach ($tasks as $task)
        <div class="hidden" data-tasks-hidden data-div-task-id="{{ $task->id }}"
            data-div-task-is-done="{{ $task->is_done }}" data-div-task-title="{{ $task->title }}"
            data-div-task-description="{{ $task->description }}" data-div-task-date="{{ $task->date }}"
            data-div-task-category-title="{{ $task->category->title }}"
            data-div-task-category-color="{{ $task->category->color }}"
            data-div-task-priority-title="{{ $task->priority->title }}"
            data-div-task-priority-color="{{ $task->priority->color }}">
        </div>
    @endforeach

    <script>
        const lateTasksDiv = document.querySelectorAll('[data-late-tasks-container] > div')
        lateTasksDiv.forEach(task => {
            task.addEventListener('click', handleCheckTask)
        });

        const tasksDiv = document.querySelectorAll('[data-tasks-container] > div')
        tasksDiv.forEach(task => {
            task.addEventListener('click', handleCheckTask)
        });

        const lateTasksArray = []
        const tasksArray = []

        document.querySelectorAll('[data-late-tasks-hidden]').forEach(task => {
            lateTasksArray.push({
                id: task.getAttribute('data-div-late-task-id'),
                is_done: task.getAttribute('data-div-late-task-is-done'),
                title: task.getAttribute('data-div-late-task-title'),
                description: task.getAttribute('data-div-late-task-description'),
                due_date: task.getAttribute('data-div-late-task-date'),
                category: {
                    title: task.getAttribute('data-div-late-task-category-title'),
                    color: task.getAttribute('data-div-late-task-category-color')
                },
                priority: {
                    title: task.getAttribute('data-div-late-task-priority-title'),
                    color: task.getAttribute('data-div-late-task-priority-color')
                }
            })
        })

        document.querySelectorAll('[data-tasks-hidden]').forEach(task => {
            tasksArray.push({
                id: task.getAttribute('data-div-task-id'),
                is_done: task.getAttribute('data-div-task-is-done'),
                title: task.getAttribute('data-div-task-title'),
                description: task.getAttribute('data-div-task-description'),
                due_date: task.getAttribute('data-div-task-date'),
                category: {
                    title: task.getAttribute('data-div-task-category-title'),
                    color: task.getAttribute('data-div-task-category-color')
                },
                priority: {
                    title: task.getAttribute('data-div-task-priority-title'),
                    color: task.getAttribute('data-div-task-priority-color')
                }
            })
        })

        function insertTasks(tasksDiv, tasksArray, compareTasks = false) {
            let equalTasks = false;
            tasksDiv.forEach((task, index) => {
                if (compareTasks !== false) {
                    compareTasks.forEach(compareTask => {
                        if (compareTask.id === tasksArray[index].id) {
                            task.classList.add('hidden')
                            equalTasks = true
                        }
                    })
                }

                if (tasksArray[index].is_done) {
                    task.querySelector('label').classList.add('bg-secondary2')
                    task.querySelector('input[type="checkbox"]').checked = true
                } else {
                    task.querySelector('label').classList.remove('bg-secondary2')
                    task.querySelector('input[type="checkbox"]').checked = false
                }

                task.querySelector('p').textContent = tasksArray[index].title
                task.querySelector('p').title = tasksArray[index].title

                if (tasksArray[index].description.length > 0) {
                    task.querySelector('[data-task-description-svg]').classList.remove('hidden')
                } else {
                    task.querySelector('[data-task-description-svg]').classList.add('hidden')
                }

                task.querySelector('[data-task-div-priority] > p').textContent = tasksArray[index].priority
                    .title
                task.querySelector('[data-task-div-priority] > svg > circle')
                    .setAttribute('fill', tasksArray[index].priority.color)

                task.querySelector('[data-task-div-category] > p').textContent = tasksArray[index].category
                    .title
                task.querySelector('[data-task-div-category] > svg > path')
                    .setAttribute('fill', tasksArray[index].priority.color)
                task.querySelector('[data-task-div-category] > svg > rect')
                    .setAttribute('stroke', tasksArray[index].priority.color)

            })
        }
        insertTasks(tasksDiv, tasksArray);
        insertTasks(lateTasksDiv, lateTasksArray, tasksArray);

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


        function updateGraphTasks() {
            console.log("TOTAL TASKS => " + tasksArray.length)
            console.log("TASKS DONE => " + tasksArray.filter(task => task.is_done).length)
            console.log("PERCENTAGE => " + (tasksArray.filter(task => task.is_done).length / tasksArray.length) * 100)
            let totalTasks = tasksArray.length
            let tasksDone = tasksArray.filter(task => task.is_done).length
            let percentageTasksDone = (tasksDone / totalTasks) * 100

            const progressGraph = document.querySelector('[data-task-deg-progress]')
            const quantityProgress = document.querySelector('[data-task-quantity-progress]')
            const percentProgress = document.querySelector('[data-task-percent-progress]')
            let percent = 0;

            quantityProgress.textContent = `${tasksDone}/${totalTasks}`

            const interval = setInterval(() => {
                if (percent <= percentageTasksDone) {
                    progressGraph.style.setProperty('--deg-progress', percent * 3.6 + 'deg')
                    percentProgress.textContent = `${percent}%`
                    percent++;
                } else {
                    clearInterval(interval)
                }
            }, 10);
        }

        function handleFilterTask(element) {
            if (element) {
                localStorage.setItem('filter', element.getAttribute('id').replace('filter-task-', ''))
            }

            if (localStorage.getItem('filter') === null) {
                localStorage.setItem('filter', 'pending')
            }

            const filter = localStorage.getItem('filter')

            const filterTask = document.querySelectorAll('ul > li > div');
            filterTask.forEach(div => {
                if (div.getAttribute('id') == 'filter-task-' + filter) {
                    div.classList.add('bg-secondary2')
                } else {
                    div.classList.remove('bg-secondary2')
                }
            })

            const taskElement = document.querySelectorAll('[data-tasks-container] > div')

            taskElement.forEach(task => {
                const inputElement = task.querySelector('input[type="checkbox"]')

                if (filter === 'all') {
                    task.classList.remove('hidden')
                } else if (filter === 'done') {
                    if (inputElement.checked) {
                        task.classList.remove('hidden')
                    } else {
                        task.classList.add('hidden')
                    }
                } else {
                    if (!inputElement.checked) {
                        task.classList.remove('hidden')
                    } else {
                        task.classList.add('hidden')
                    }
                }
            })
        }

        function openTaskDescription() {
            console.log('oi')
        }

        async function handleCheckTask(element) {
            let isLateTask = false;
            console.log(element.currentTarget)
            isLateTask = lateTasksArray.some(task => task.id === element.currentTarget.getAttribute('data-task-id'));
            // tasksArray.forEach(task => {
            //     console.log("TASK ID => " + task.id + ' --- ' + "ELEMENT ID => " + element.currentTarget
            //         .getAttribute('data-task-id'))
            //     if (task.id !== element.currentTarget.getAttribute('data-task-id')) {
            //         isLateTask = true
            //     } else {
            //         isLateTask = false
            //     }
            // })

            console.log("IS LATE ? ", isLateTask)

            if (element.target.getAttribute('data-task-description') !== null) {
                openTaskDescription()
                return
            }

            const taskId = element.currentTarget.getAttribute('data-task-id')

            const divTask = element.currentTarget
            const labelCheck = divTask.querySelector('label')
            const inputTask = divTask.querySelector('input[type="checkbox"]')

            inputTask.checked = !inputTask.checked

            if (inputTask.checked) {
                labelCheck.classList.add('bg-secondary2')
            } else {
                labelCheck.classList.remove('bg-secondary2')
            }

            const status = inputTask.checked
            const url = '{{ route('task.update') }}'

            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-type': 'application/json',
                    'accept': 'application/json'
                },
                body: JSON.stringify({
                    taskId,
                    status,
                    _token: '{{ csrf_token() }}'
                })
            })

            const result = await response.json()

            if (!result.success) {
                inputTask.checked = !inputTask.checked

                if (inputTask.checked) {
                    labelCheck.classList.add('bg-secondary2')
                } else {
                    labelCheck.classList.remove('bg-secondary2')
                }
            } else {

                if (isLateTask) {
                    isLateTaskEmpty = false
                    lateTasksArray.forEach(task => {
                        if (task.id === taskId) {
                            task.is_done = inputTask.checked
                            divTask.classList.add('hidden')
                        }
                    })
                    if (lateTasksArray.every(task => task.is_done)) {
                        document.querySelector('[data-late-tasks-info]').classList.add('hidden')
                    }
                    insertTasks(lateTasksDiv, lateTasksArray)
                } else {
                    tasksArray.forEach(task => {
                        if (task.id === taskId) {
                            task.is_done = inputTask.checked
                        }
                    })
                    insertTasks(tasksDiv, tasksArray)
                }

                handleFilterTask()
                updateGraphTasks()
            }
        }

        handleFilterTask()
        updateGraphTasks()
    </script>

</body>

</html>
