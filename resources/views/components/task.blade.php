@php
    use Carbon\Carbon;

    $today = Carbon::createFromDate(date('Y-m-d'));
    $taskDate = Carbon::createFromDate($data['due_date']);
@endphp

<div onClick="handleCheckTask({{ $data['id'] }})"
    class="p-3 flex justify-between items-center border-b border-gray_td-200 cursor-pointer transition-all ease-linear duration-200 hover:rounded-md hover:bg-gray_td-100">
    <div class="flex items-center gap-3">
        <label data-check-{{ $data['id'] }}
            class="{{ $data && $data['is_done'] ? 'bg-secondary2' : '' }} w-5 h-5 border-2 border-secondary2 rounded-full cursor-pointer">
        </label>

        <input id="task-{{ $data['id'] }}" type="checkbox" @if ($data && $data['is_done']) checked @endif
            class="hidden cursor-pointer" />

        <p class="text-base tracking-wider">{{ $data['title'] ?? '' }}</p>
    </div>

    <div class="flex items-center gap-3 text-gray_td-300 text-sm tracking-wider">
        @if ($data['description'] ?? '')
            <svg class="cursor-pointer hover:scale-125 transition-all ease-linear duration-200" width="23"
                height="24" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M21.2795 0.33677C20.6235 -0.31923 19.4875 0.12877 19.4875 1.04077V6.62477C19.4875 8.96077 21.4715 10.8968 23.8875 10.8968C25.4075 10.9128 27.5195 10.9128 29.3275 10.9128C30.2395 10.9128 30.7195 9.84077 30.0795 9.20077C27.7755 6.88077 23.6475 2.70477 21.2795 0.33677Z"
                    fill="#45A29E" />
                <path
                    d="M28.8 13.104H24.176C20.384 13.104 17.296 10.016 17.296 6.224V1.6C17.296 0.72 16.576 0 15.696 0H8.912C3.984 0 0 3.2 0 8.912V23.088C0 28.8 3.984 32 8.912 32H21.488C26.416 32 30.4 28.8 30.4 23.088V14.704C30.4 13.824 29.68 13.104 28.8 13.104ZM14.4 25.2H8C7.344 25.2 6.8 24.656 6.8 24C6.8 23.344 7.344 22.8 8 22.8H14.4C15.056 22.8 15.6 23.344 15.6 24C15.6 24.656 15.056 25.2 14.4 25.2ZM17.6 18.8H8C7.344 18.8 6.8 18.256 6.8 17.6C6.8 16.944 7.344 16.4 8 16.4H17.6C18.256 16.4 18.8 16.944 18.8 17.6C18.8 18.256 18.256 18.8 17.6 18.8Z"
                    fill="#45A29E" />
            </svg>
        @endif

        @if ($taskDate < $today)
            <p class="w-20 text-right">{{ date('d/m/y', strtotime($data['due_date'])) }}</p>
        @endif
        <div class="w-28 flex justify-end items-center gap-1">
            <p class="max-w-[80px] truncate">{{ $data['priority']->title ?? '' }}</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="10" cy="10" r="10" fill="{{ $data['priority']->color }}" />
            </svg>
        </div>

        <div class="w-28 flex justify-end items-center gap-1">
            <p class="max-w-[80px] truncate">
                {{ $data['category']->title ?? '' }}
            </p>
            <svg width="24" height="24" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17 18.5C20.7266 18.5 23.75 15.4766 23.75 11.75C23.75 8.02344 20.7266 5 17 5C13.2734 5 10.25 8.02344 10.25 11.75C10.25 15.4766 13.2734 18.5 17 18.5ZM23 20H20.4172C19.3766 20.4781 18.2188 20.75 17 20.75C15.7813 20.75 14.6281 20.4781 13.5828 20H11C7.68594 20 5 22.6859 5 26V26.75C5 27.9922 6.00781 29 7.25 29H26.75C27.9922 29 29 27.9922 29 26.75V26C29 22.6859 26.3141 20 23 20Z"
                    fill="{{ $data['category']->color }}" />
                <rect x="0.5" y="0.5" width="33" height="33" rx="4.5"
                    stroke="{{ $data['category']->color }}" />
            </svg>
        </div>

        <div class="w-28 flex justify-end items-center gap-5">
            <a href="https://localhost:8000/tarefas/edit/{{ $data['id'] }}">
                <svg class="cursor-pointer transition-all ease-linear duration-200 hover:scale-125" width="25"
                    height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.2617 0.0010376H7.2007C2.83052 0.0010376 0.22522 2.60481 0.22522 6.97243V17.0156C0.22522 21.3952 2.83052 23.999 7.2007 23.999H17.2497C21.6199 23.999 24.2252 21.3952 24.2252 17.0276V6.97243C24.2372 2.60481 21.6319 0.0010376 17.2617 0.0010376ZM10.9706 18.6114C10.6224 18.9594 9.96207 19.2954 9.48183 19.3674L6.52836 19.7873C6.42031 19.7993 6.31225 19.8113 6.2042 19.8113C5.71195 19.8113 5.25573 19.6433 4.93156 19.3194C4.53537 18.9234 4.36728 18.3475 4.46333 17.7115L4.88354 14.7598C4.95558 14.2678 5.27974 13.6199 5.63992 13.2719L10.9946 7.92035C11.0906 8.17233 11.1867 8.42431 11.3187 8.71228C11.4388 8.96426 11.5709 9.22824 11.7149 9.46822C11.835 9.6722 11.9671 9.86418 12.0751 10.0082C12.2072 10.2122 12.3633 10.4041 12.4593 10.5121C12.5193 10.5961 12.5674 10.6561 12.5914 10.6801C12.8915 11.0401 13.2397 11.3761 13.5399 11.628C13.6239 11.712 13.6719 11.76 13.6959 11.772C13.876 11.916 14.0561 12.06 14.2122 12.168C14.4043 12.312 14.5964 12.444 14.8005 12.552C15.0406 12.6959 15.3047 12.8279 15.5689 12.9599C15.845 13.0799 16.0971 13.1879 16.3493 13.2719L10.9706 18.6114ZM18.6784 10.9081L17.5739 12.024C17.5018 12.096 17.4058 12.132 17.3097 12.132C17.2737 12.132 17.2257 12.132 17.2017 12.12C14.7645 11.4241 12.8195 9.48022 12.1231 7.04443C12.0871 6.91244 12.1231 6.76845 12.2192 6.68446L13.3358 5.56856C15.1607 3.74471 16.9015 3.78071 18.6904 5.56856C19.6029 6.48048 20.0471 7.3564 20.0471 8.26832C20.0351 9.13225 19.5909 9.99617 18.6784 10.9081Z"
                        fill="#45A29E" />
                </svg>
            </a>

            <a href="https://localhost:8000/tarefas/delete/{{ $data['id'] }}">
                <svg class="cursor-pointer transition-all ease-linear duration-200 hover:scale-125" width="22"
                    height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.2278 4.44073C19.4315 4.2622 17.6351 4.12831 15.8276 4.02789V4.01674L15.5821 2.56625C15.4147 1.53975 15.1693 0 12.5584 0H9.6351C7.03535 0 6.78988 1.4728 6.61136 2.55509L6.37705 3.98326C5.33939 4.05021 4.30173 4.11716 3.26408 4.21757L0.987926 4.44073C0.519307 4.48536 0.184579 4.89819 0.229209 5.35565C0.27384 5.81311 0.675513 6.14784 1.14413 6.10321L3.42028 5.88006C9.2669 5.29986 15.1581 5.52301 21.0716 6.11437H21.1609C21.5849 6.11437 21.9531 5.7908 21.9977 5.35565C22.0312 4.89819 21.6965 4.48536 21.2278 4.44073Z"
                        fill="#E53939" />
                    <path
                        d="M19.1748 7.68759C18.9071 7.40865 18.5389 7.25244 18.1595 7.25244H4.05636C3.677 7.25244 3.29764 7.40865 3.04101 7.68759C2.78439 7.96653 2.63934 8.34589 2.66166 8.7364L3.35343 20.1841C3.47616 21.8801 3.63237 24 7.52637 24H14.6895C18.5835 24 18.7398 21.8912 18.8624 20.1841L19.5542 8.74756C19.5765 8.34589 19.4315 7.96653 19.1748 7.68759ZM12.9601 18.41H9.24459C8.78718 18.41 8.40782 18.0307 8.40782 17.5732C8.40782 17.1158 8.78718 16.7364 9.24459 16.7364H12.9601C13.4175 16.7364 13.7969 17.1158 13.7969 17.5732C13.7969 18.0307 13.4175 18.41 12.9601 18.41ZM13.8973 13.947H8.31856C7.8611 13.947 7.48174 13.5676 7.48174 13.1102C7.48174 12.6527 7.8611 12.2734 8.31856 12.2734H13.8973C14.3548 12.2734 14.7341 12.6527 14.7341 13.1102C14.7341 13.5676 14.3548 13.947 13.8973 13.947Z"
                        fill="#E53939" />
                </svg>
            </a>
        </div>
    </div>
</div>

<script>
    function handleCheckTask(idTask) {
        const labelCheck = document.querySelector('[data-check-' + idTask + ']');
        const tasks = document.querySelector('#task-' + idTask);

        tasks.checked = !tasks.checked

        if (tasks.checked) {
            labelCheck.classList.add('bg-secondary2');
        } else {
            labelCheck.classList.remove('bg-secondary2');
        }
    }
</script>
