<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="canonical" href="{{url()->current()}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Discover free flashcards for self-study or teaching kids. Create flashcard groups for easy management. Everything is available free of charge!">
        <meta name="keywords" content="your ,flashcards, flash, cards, study, teach, learning, groups, free, progress, organize, prepare, user, subjects, topics, focused, exam, manage, private, multiple, register, welcome, start, improve, stay updated">

        <title>{{config('app.name', 'Your Flash Cards')}}</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bubblegum-sans-regular">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>
                    <main class="min-h-screen flex items-center justify-center">
                        <svg class="sm:" viewBox="0 0 390 218"><g transform="matrix(1,0,0,1,0,0)" fill="#111"><rect xmlns="http://www.w3.org/2000/svg" width="390" height="218" rx="10" ry="10"></rect></g><g transform="matrix(6.065464496612549,0,0,6.065464496612549,20.001214740303396,24.323527548822643)" fill="#fff"><path d="M22.744 1.0549999999999997 c-0.87891 -1.1914 -2.1777 -1.7806 -3.8965 -1.7676 c-1.5755 0.013018 -2.9883 0.48177 -4.2383 1.4063 c-3.0208 2.0313 -5.6087 5.3483 -7.7637 9.9512 c-0.26692 -0.37109 -0.60221 -2.0508 -1.0059 -5.0391 l-5.8398 0 l0.058594 0.078125 c3.3203 5.1888 4.9089 8.8672 4.7656 11.035 c0.013018 0.83984 -0.026045 1.4583 -0.11719 1.8555 c-0.058594 0.24739 -0.24089 0.72266 -0.54688 1.4258 l5.293 0 c-0.058594 0 -0.1595 -0.46224 -0.30273 -1.3867 c-0.045576 -0.29948 -0.094404 -0.62826 -0.14648 -0.98633 c-0.019531 -0.11719 -0.035811 -0.23112 -0.048828 -0.3418 c-0.0065136 -0.039063 -0.0097656 -0.074873 -0.0097656 -0.10742 c-0.0065136 -0.026045 -0.0097656 -0.045576 -0.0097656 -0.058594 c-0.13021 -1.0222 -0.0097656 -2.1387 0.36133 -3.3496 c0.24089 -0.78776 0.68034 -1.8327 1.3184 -3.1348 c1.1589 -2.3894 2.3161 -4.2171 3.4717 -5.4834 s1.9646 -2.072 2.4268 -2.417 c1.2695 -0.95703 2.3438 -1.3184 3.2227 -1.084 c-0.14323 0.30599 -0.21484 0.62174 -0.21484 0.94726 c0 0.57292 0.1888 1.0612 0.56641 1.4648 s0.83334 0.60547 1.3672 0.60547 c0.42317 0 0.79427 -0.13347 1.1133 -0.40039 c0.29297 -0.24089 0.50781 -0.56315 0.64453 -0.9668 c0.13021 -0.39063 0.15625 -0.7845 0.078125 -1.1816 c-0.071611 -0.42317 -0.25064 -0.77474 -0.5371 -1.0547 z M19.1260046875 15.4297 c-0.41016 -0.69011 -0.61522 -1.5625 -0.61522 -2.6172 c0 -0.85286 0.17903 -1.6438 0.53711 -2.373 c0.42969 -0.88542 0.90169 -1.3672 1.416 -1.4453 c0.29297 -0.045576 0.58269 0.035801 0.86914 0.24413 c0.26692 0.20183 0.49479 0.48503 0.68358 0.84961 c0.22136 0.42317 0.39389 0.88216 0.51759 1.377 c0.11067 0.44922 0.16602 0.89844 0.16602 1.3477 c0 1.0547 -0.20508 1.9271 -0.61523 2.6172 c-0.39714 0.67058 -0.88867 1.0059 -1.4746 1.0059 c-0.59245 0 -1.0872 -0.33528 -1.4844 -1.0059 z M24.614304687500002 7.49 c-0.55339 -0.74219 -1.2109 -1.3118 -1.9727 -1.709 c-0.82031 -0.42969 -1.6602 -0.5957 -2.5195 -0.49805 c-1.4778 0.16276 -2.8418 1.1394 -4.0918 2.9297 c-1.0286 1.4648 -1.543 3.0566 -1.543 4.7754 c0 2.1224 0.58919 3.877 1.7676 5.2637 c1.1589 1.3542 2.5879 2.0313 4.2871 2.0313 s3.125 -0.67708 4.2773 -2.0313 c1.1784 -1.3867 1.7676 -3.1413 1.7676 -5.2637 c0 -0.91146 -0.1595 -1.8196 -0.47852 -2.7246 c-0.35156 -0.99609 -0.84961 -1.9206 -1.4941 -2.7734 z M36.367175 5.605 l0.0097754 0.019513 c0.49479 0.95052 0.83334 2.5488 1.0156 4.7949 c0.026045 0.38411 0.0032615 0.8431 -0.06835 1.377 c-0.078125 0.63802 -0.20833 1.2012 -0.39063 1.6895 c-0.49479 1.3216 -1.2175 1.7546 -2.168 1.2988 c-0.47526 -0.22786 -0.81381 -0.66406 -1.0156 -1.3086 c-0.078125 -0.25391 -0.13997 -0.54688 -0.18555 -0.87891 c-0.026045 -0.22786 -0.048828 -0.51432 -0.068359 -0.85937 c-0.045576 -0.83984 0.03418 -1.9255 0.23926 -3.2568 s0.50944 -2.29 0.91309 -2.876 l-5.6543 0 c0.14974 0.37109 0.29947 0.8138 0.44921 1.3281 c0.1237 0.41667 0.22787 0.82357 0.31251 1.2207 c0.20183 0.87891 0.28646 2.0345 0.25392 3.4668 l-0.019531 0.89844 l-0.029297 0.89844 c-0.013018 0.70964 -0.0097656 1.3184 0.0097656 1.8262 c0.039063 0.76172 0.21484 1.5137 0.52734 2.2559 c0.34505 0.8138 0.90494 1.4583 1.6797 1.9336 c0.71614 0.4362 1.5332 0.68686 2.4512 0.75196 c0.90495 0.065107 1.7676 -0.058594 2.5879 -0.37109 c0.85938 -0.32552 1.5495 -0.8138 2.0703 -1.4648 c0.71614 -0.89844 1.1687 -1.9336 1.3574 -3.1055 c0.11719 -0.71614 0.1595 -1.7188 0.12695 -3.0078 c-0.045576 -2.1484 0.074863 -3.7907 0.36132 -4.9268 s0.45247 -1.7041 0.49805 -1.7041 l-5.2637 0 z M49.2236140625 11.2207 c-0.071611 -0.80729 -0.11068 -1.6504 -0.1172 -2.5293 c0.78125 -0.039063 1.4421 0.026045 1.9824 0.19531 c0.67058 0.21484 0.97979 0.55664 0.92774 1.0254 c-0.1237 1.1133 -1.0547 1.5495 -2.793 1.3086 z M57.5149140625 15.976600000000001 c-0.13672 0.20833 -0.30919 0.39388 -0.51752 0.55664 c-0.41667 0.33203 -0.81055 0.39388 -1.1816 0.18555 c-0.20183 -0.10417 -0.38412 -0.27995 -0.54688 -0.52734 c-0.1237 -0.17578 -0.25065 -0.4069 -0.38086 -0.69336 c0 -0.0065136 -0.045576 -0.11394 -0.13672 -0.32227 l-0.25391 -0.58594 l-0.27344 -0.57617 c-0.16276 -0.33203 -0.34831 -0.63477 -0.55664 -0.9082 c0.59245 -0.1888 0.99609 -0.33203 1.2109 -0.42969 c0.59896 -0.26042 1.0481 -0.67383 1.3477 -1.2402 c0.26042 -0.48177 0.39063 -1.0156 0.39063 -1.6016 c0 -0.13672 -0.0065136 -0.27669 -0.019531 -0.41992 c-0.019531 -0.20183 -0.05208 -0.40039 -0.097656 -0.5957 c-0.11719 -0.53386 -0.31901 -1.0091 -0.60547 -1.4258 c-0.82683 -1.2044 -2.2493 -1.8066 -4.2676 -1.8066 l-6.875 0 c0.70964 4.8177 0.70313 9.5638 -0.019531 14.238 c-0.0065136 0.032549 -0.013027 0.061846 -0.019541 0.087891 l0 0.029297 l5.7813 0 c-0.45573 -1.8815 -0.75521 -3.8835 -0.89845 -6.0059 l0.18555 0.058594 c0.60547 0.24739 1.0449 0.68033 1.3184 1.2988 c0.10417 0.24089 0.19531 0.52734 0.27344 0.85938 l0.087891 0.44922 l0.078125 0.43945 l0.068359 0.3418 l0.068359 0.3418 c0.05208 0.25391 0.10742 0.47852 0.16602 0.67383 c0.15625 0.48828 0.36458 0.88542 0.625 1.1914 c0.70313 0.83984 1.5788 1.1882 2.627 1.0449 c0.5013 -0.071611 0.95377 -0.26041 1.3574 -0.5664 c0.40364 -0.3125 0.71614 -0.70964 0.9375 -1.1914 c0.071611 -0.16927 0.13346 -0.3483 0.18554 -0.5371 c0.16276 -0.61849 0.17253 -1.2891 0.029297 -2.0117 z"></path></g><g id="SvgjsG2801" featurekey="uKAeQw-1" transform="matrix(2.4350740909576416,0,0,2.4350740909576416,19.998975879945714,147.72503288198357)" fill="#fff"><path d="M6.5918 14.1699 c0.30599 0.24739 0.65427 0.37111 1.0449 0.37111 c0.46875 0 0.86914 -0.16602 1.2012 -0.49805 c0.32552 -0.33203 0.48828 -0.72917 0.48828 -1.1914 c0 -0.35808 -0.10091 -0.68359 -0.30273 -0.97656 c-0.20833 -0.33203 -0.60221 -0.58919 -1.1816 -0.77148 c-0.63802 -0.19531 -1.2858 -0.19856 -1.9434 -0.0097656 c-0.5013 0.14323 -0.99287 0.39389 -1.4746 0.75196 c0.11067 -1.0091 0.45247 -1.8489 1.0254 -2.5195 c0.57942 -0.67708 1.2532 -1.0156 2.0215 -1.0156 c0.54688 0 1.0547 0.18229 1.5234 0.54688 c0.45573 0.35156 0.82357 0.82683 1.1035 1.4258 c0.097656 -1.1067 0.23112 -2.2168 0.40039 -3.3301 c0.05208 -0.35156 0.10742 -0.68034 0.16602 -0.98633 c0.013018 -0.097656 0.029297 -0.18555 0.048828 -0.26367 c0 -0.026045 0.0032521 -0.05209 0.0097656 -0.078135 l0 -0.019531 l0.0097656 0 l-10.732 0 c0.70964 2.7083 0.95378 5.7813 0.73242 9.2188 c-0.071611 1.1653 -0.19531 2.3015 -0.37109 3.4082 c-0.058594 0.40364 -0.1237 0.78125 -0.19531 1.1328 c-0.05208 0.27344 -0.10091 0.48503 -0.14648 0.63477 l6.084 0 c-0.13672 -0.15625 -0.3125 -0.39388 -0.52734 -0.71289 c-0.60547 -0.88542 -0.92773 -1.9629 -0.9668 -3.2324 c-0.05208 -1.4714 0.41016 -2.4056 1.3867 -2.8027 c0.091143 0.37109 0.28971 0.67708 0.59569 0.91797 z M18.7060765625 15.7715 c-0.14323 -0.31901 -0.24088 -0.70965 -0.29296 -1.1719 c-0.045576 -0.34505 -0.068359 -0.75195 -0.068359 -1.2207 c0 -1.4192 0.16602 -3.0827 0.49805 -4.9902 c0.10417 -0.60547 0.22461 -1.2239 0.36133 -1.8555 c0.026045 -0.11067 0.05209 -0.22461 0.078135 -0.3418 c0.013018 -0.071611 0.032549 -0.1595 0.058594 -0.26367 c0.039063 -0.18229 0.061846 -0.28972 0.068359 -0.32227 l-5.5957 0 c0.70964 2.8906 0.95378 6.0188 0.73242 9.3848 c-0.071611 1.1394 -0.19531 2.2429 -0.37109 3.3105 c-0.058594 0.38411 -0.1237 0.74544 -0.19531 1.084 c-0.05208 0.25391 -0.10091 0.45898 -0.14648 0.61523 l10.674 0 l0 -6.2598 c-0.29948 0.54036 -0.68686 1.084 -1.1621 1.6309 c-0.41667 0.47526 -0.83334 0.84636 -1.25 1.1133 c-0.52083 0.33854 -1.0254 0.50781 -1.5137 0.50781 c-0.89844 0 -1.5234 -0.4069 -1.875 -1.2207 z M33.749996875 9.414 c0.5013 1.4519 0.88217 2.8157 1.1426 4.0918 c-0.72917 0.25391 -1.5039 0.31901 -2.3242 0.19531 c0.26692 -1.3347 0.6608 -2.7637 1.1816 -4.2871 z M40.595296875 19.9999904633 c-0.013018 -0.058594 -0.55177 -1.6341 -1.6162 -4.7266 s-1.4339 -6.3151 -1.1084 -9.668 l-8.2324 0 c0.13021 3.8802 -0.28972 7.2347 -1.2598 10.063 s-1.4616 4.2725 -1.4746 4.3311 l5.7129 0 c-0.3125 -0.89192 -0.45247 -1.9563 -0.41992 -3.1934 c1.1979 0.34505 2.2331 0.319 3.1055 -0.078135 c0.039063 1.2695 -0.097656 2.3601 -0.41016 3.2715 l5.7031 0 z M50.3271390625 11.9629 l-0.36132 -0.20509 c-0.29297 -0.15625 -0.52409 -0.29297 -0.69336 -0.41016 c-0.50781 -0.35808 -0.82356 -0.77475 -0.94727 -1.25 c-0.14323 -0.55989 -0.065107 -1.0481 0.23438 -1.4648 c0.33203 -0.44922 0.81055 -0.60872 1.4355 -0.47852 c0.38411 0.071611 0.65755 0.17903 0.82031 0.32227 c0.15625 0.13672 0.29948 0.38086 0.42969 0.73242 c-0.13021 -0.23438 -0.3418 -0.39063 -0.63477 -0.46875 c-0.28646 -0.084639 -0.54361 -0.061855 -0.77147 0.06835 c-0.39063 0.22786 -0.56966 0.56966 -0.53711 1.0254 c0.032549 0.42969 0.2181 0.80078 0.55664 1.1133 c0.39063 0.36458 0.88542 0.52408 1.4844 0.47851 c0.61198 -0.05208 1.0808 -0.29622 1.4063 -0.73242 c0.24089 -0.31901 0.39389 -0.7487 0.45899 -1.2891 c0.045576 -0.41016 0.039063 -0.86263 -0.019531 -1.3574 c-0.14974 -1.2109 -0.8431 -2.0735 -2.0801 -2.5879 c-1.4388 -0.44271 -2.9427 -0.53385 -4.5117 -0.27343 c-0.97005 0.20183 -1.7839 0.62826 -2.4414 1.2793 c-0.70313 0.68359 -1.1133 1.5104 -1.2305 2.4805 c-0.091143 0.67708 -0.022783 1.3184 0.20508 1.9238 c0.24739 0.65104 0.65755 1.2142 1.2305 1.6895 c0.24089 0.20833 0.64128 0.45572 1.2012 0.74218 l0.35156 0.17578 l0.35156 0.17578 c0.26042 0.14323 0.48503 0.27344 0.67383 0.39063 c1.0612 0.65104 1.5625 1.4453 1.5039 2.3828 c-0.026045 0.41016 -0.094404 0.74544 -0.20508 1.0059 c-0.14323 0.33854 -0.36784 0.55664 -0.67383 0.6543 c-0.67708 0.22136 -1.1849 -0.048828 -1.5234 -0.81055 l0 0.0097656 l0.0097656 0.0097656 c0.0065136 0.0065136 0.0097656 0.0032615 0.0097656 -0.0097561 c0.3125 0.41667 0.66406 0.52409 1.0547 0.32227 c0.36458 -0.18229 0.57291 -0.51758 0.62499 -1.0059 c0.078125 -0.625 -0.10091 -1.1198 -0.53711 -1.4844 c-0.36458 -0.30599 -0.85938 -0.49153 -1.4844 -0.55664 c-0.87891 -0.084639 -1.6569 0.20508 -2.334 0.86914 c-0.70313 0.70313 -0.93099 1.5169 -0.68359 2.4414 c0.24739 0.91797 0.80729 1.6309 1.6797 2.1387 c0.79427 0.45573 1.7253 0.67709 2.793 0.66407 c1.8164 -0.013018 3.1706 -0.25391 4.0625 -0.72266 c0.95703 -0.5013 1.6406 -1.1719 2.0508 -2.0117 c0.54688 -1.1263 0.5013 -2.2591 -0.13672 -3.3984 c-0.53386 -0.9375 -1.3606 -1.7317 -2.4805 -2.3828 z M63.6523625 5.605 l-0.000019073 0.0097561 l0.0097656 0.029297 c0.0065136 0.032549 0.013027 0.068359 0.019541 0.10742 c0.026045 0.1237 0.05209 0.25717 0.078135 0.4004 c0.091143 0.46875 0.17578 0.96028 0.25391 1.4746 c0.24739 1.6472 0.39388 3.2292 0.43945 4.7461 c-0.64453 0.078125 -1.2988 0.019531 -1.9629 -0.17578 c-0.25391 -0.071611 -0.50456 -0.16602 -0.75195 -0.2832 c-0.19531 -0.091143 -0.38411 -0.19205 -0.56641 -0.30272 c0.058594 -1.4323 0.20508 -2.8613 0.43945 -4.2871 c0.071611 -0.44271 0.14974 -0.86263 0.23438 -1.2598 l0.039063 -0.19531 c0.013018 -0.05208 0.022783 -0.10091 0.029297 -0.14648 l0.019531 -0.048828 l0.0097656 -0.039063 l0 -0.019531 l0 -0.0097656 l-5.3418 0 c0.70964 2.8906 0.95378 6.0188 0.73242 9.3848 c-0.071611 1.1394 -0.19531 2.2429 -0.37109 3.3105 c-0.058594 0.38411 -0.1237 0.74544 -0.19531 1.084 c-0.05208 0.25391 -0.10091 0.45898 -0.14648 0.61523 l5.5469 0 c-0.48177 -1.4714 -0.79427 -3.0989 -0.9375 -4.8828 c1.1523 0.58594 2.2103 0.71614 3.1738 0.39063 c-0.13672 1.7839 -0.45898 3.2813 -0.9668 4.4922 l5.5371 0 c-0.039063 -0.15625 -0.084639 -0.36133 -0.13672 -0.61523 c-0.071611 -0.33854 -0.13997 -0.69987 -0.20508 -1.084 c-0.16927 -1.0677 -0.29297 -2.1712 -0.37109 -3.3105 c-0.21484 -3.3659 0.032549 -6.4941 0.74219 -9.3848 l-5.3516 0 z M81.4403671875 16.0937 c-1.1067 0.65104 -2.1777 0.63149 -3.2129 -0.058612 c-0.96354 -0.63802 -1.5657 -1.5918 -1.8066 -2.8613 c-0.15625 -0.82031 -0.11394 -1.6179 0.12695 -2.3926 c0.26692 -0.85286 0.72591 -1.4812 1.377 -1.8848 c0.27995 -0.17578 0.52734 -0.30599 0.74219 -0.39063 c0.29297 -0.1237 0.56315 -0.18881 0.81055 -0.19532 c0.25391 0 0.49153 0.042314 0.71289 0.12695 c0.26692 0.097656 0.45572 0.24089 0.5664 0.42969 c0.078125 0.13672 0.12044 0.26367 0.12695 0.38086 l0 0 l0 -0.0097656 c-0.22136 -0.40364 -0.55664 -0.5957 -1.0059 -0.57617 c-0.52734 0.026045 -0.88867 0.28972 -1.084 0.79102 c-0.10417 0.27344 -0.074873 0.57617 0.087891 0.9082 c0.14974 0.30599 0.35481 0.53385 0.61523 0.68358 c0.51433 0.29297 1.0515 0.4069 1.6113 0.3418 c0.59245 -0.065107 1.071 -0.32227 1.4355 -0.77148 c0.36458 -0.4362 0.57942 -1.0905 0.64453 -1.9629 c0.097656 -1.3021 -0.42644 -2.2493 -1.5723 -2.8418 c-0.93099 -0.48177 -2.1224 -0.67708 -3.5742 -0.58594 c-1.1719 0.071611 -2.2559 0.46224 -3.252 1.1719 c-1.0286 0.72917 -1.8457 1.6536 -2.4512 2.7734 c-0.61198 1.1198 -0.92123 2.2754 -0.92774 3.4668 c-0.0065136 1.2891 0.21484 2.4577 0.66406 3.5059 c0.5013 1.1719 1.2468 2.0931 2.2363 2.7637 c1.4192 0.96354 3.0534 1.4128 4.9023 1.3477 c0.91146 -0.032549 1.7578 -0.24088 2.5391 -0.62499 c0.89844 -0.44271 1.5169 -1.0417 1.8555 -1.7969 c0.20183 -0.45573 0.27995 -1.0254 0.23438 -1.709 c-0.05208 -0.69661 -0.2181 -1.25 -0.49805 -1.6602 c-0.76823 0.79427 -1.403 1.3379 -1.9043 1.6309 z M92.56835625 9.414 c0.5013 1.4519 0.88217 2.8157 1.1426 4.0918 c-0.72917 0.25391 -1.5039 0.31901 -2.3242 0.19531 c0.26692 -1.3347 0.6608 -2.7637 1.1816 -4.2871 z M99.41365625 19.9999904633 c-0.013018 -0.058594 -0.55177 -1.6341 -1.6162 -4.7266 s-1.4339 -6.3151 -1.1084 -9.668 l-8.2324 0 c0.13021 3.8802 -0.28972 7.2347 -1.2598 10.063 s-1.4616 4.2725 -1.4746 4.3311 l5.7129 0 c-0.3125 -0.89192 -0.45247 -1.9563 -0.41992 -3.1934 c1.1979 0.34505 2.2331 0.319 3.1055 -0.078135 c0.039063 1.2695 -0.097656 2.3601 -0.41016 3.2715 l5.7031 0 z M107.0068171875 11.2207 c-0.071611 -0.80729 -0.11068 -1.6504 -0.1172 -2.5293 c0.78125 -0.039063 1.4421 0.026045 1.9824 0.19531 c0.67058 0.21484 0.97979 0.55664 0.92774 1.0254 c-0.1237 1.1133 -1.0547 1.5495 -2.793 1.3086 z M115.2981171875 15.976600000000001 c-0.13672 0.20833 -0.30919 0.39388 -0.51752 0.55664 c-0.41667 0.33203 -0.81055 0.39388 -1.1816 0.18555 c-0.20183 -0.10417 -0.38412 -0.27995 -0.54688 -0.52734 c-0.1237 -0.17578 -0.25065 -0.4069 -0.38086 -0.69336 c0 -0.0065136 -0.045576 -0.11394 -0.13672 -0.32227 l-0.25391 -0.58594 l-0.27344 -0.57617 c-0.16276 -0.33203 -0.34831 -0.63477 -0.55664 -0.9082 c0.59245 -0.1888 0.99609 -0.33203 1.2109 -0.42969 c0.59896 -0.26042 1.0481 -0.67383 1.3477 -1.2402 c0.26042 -0.48177 0.39063 -1.0156 0.39063 -1.6016 c0 -0.13672 -0.0065136 -0.27669 -0.019531 -0.41992 c-0.019531 -0.20183 -0.05208 -0.40039 -0.097656 -0.5957 c-0.11719 -0.53386 -0.31901 -1.0091 -0.60547 -1.4258 c-0.82683 -1.2044 -2.2493 -1.8066 -4.2676 -1.8066 l-6.875 0 c0.70964 4.8177 0.70313 9.5638 -0.019531 14.238 c-0.0065136 0.032549 -0.013027 0.061846 -0.019541 0.087891 l0 0.029297 l5.7813 0 c-0.45573 -1.8815 -0.75521 -3.8835 -0.89845 -6.0059 l0.18555 0.058594 c0.60547 0.24739 1.0449 0.68033 1.3184 1.2988 c0.10417 0.24089 0.19531 0.52734 0.27344 0.85938 l0.087891 0.44922 l0.078125 0.43945 l0.068359 0.3418 l0.068359 0.3418 c0.05208 0.25391 0.10742 0.47852 0.16602 0.67383 c0.15625 0.48828 0.36458 0.88542 0.625 1.1914 c0.70313 0.83984 1.5788 1.1882 2.627 1.0449 c0.5013 -0.071611 0.95377 -0.26041 1.3574 -0.5664 c0.40364 -0.3125 0.71614 -0.70964 0.9375 -1.1914 c0.071611 -0.16927 0.13346 -0.3483 0.18554 -0.5371 c0.16276 -0.61849 0.17253 -1.2891 0.029297 -2.0117 z M122.812546875 15.761700000000001 c-0.05208 -0.52734 -0.084639 -1.1165 -0.097656 -1.7676 c-0.045576 -1.8425 0.071611 -3.3333 0.35156 -4.4727 c0.026045 -0.11067 0.17578 -0.13021 0.44922 -0.058594 c0.097656 0.026045 0.22136 0.065107 0.37109 0.11719 l0.17578 0.058594 c0.071611 0.026045 0.12369 0.045576 0.15624 0.058594 c0.83984 0.29297 1.4355 0.81706 1.7871 1.5723 c0.31901 0.69011 0.39389 1.4485 0.22462 2.2754 c-0.17578 0.8138 -0.54688 1.4941 -1.1133 2.041 c-0.61849 0.59245 -1.3509 0.88867 -2.1973 0.88867 c-0.032549 0 -0.068359 -0.23763 -0.10742 -0.71289 z M129.697046875 9.648 c-0.79427 -1.8034 -2.1062 -2.9915 -3.9355 -3.5645 c-1.1394 -0.36458 -2.9492 -0.54036 -5.4297 -0.52734 l-1.1621 0 l-0.27344 0 l-0.2832 -0.0097656 l-0.61523 0 c0.70964 2.8972 0.95378 6.0286 0.73242 9.3945 c-0.071611 1.1328 -0.19531 2.2331 -0.37109 3.3008 c-0.058594 0.38411 -0.1237 0.74544 -0.19531 1.084 c-0.05208 0.25391 -0.10091 0.46224 -0.14648 0.625 c2.2591 0.045576 3.3854 0.058594 3.3789 0.039063 l2.6953 0 c1.1523 0 2.1745 -0.23763 3.0664 -0.71289 c0.94401 -0.5013 1.6829 -1.2402 2.2168 -2.2168 c0.79427 -1.4648 1.1133 -3.0925 0.95703 -4.8828 c-0.084639 -0.91146 -0.29623 -1.7546 -0.63478 -2.5293 z M140.3954984375 11.9629 l-0.36132 -0.20509 c-0.29297 -0.15625 -0.52409 -0.29297 -0.69336 -0.41016 c-0.50781 -0.35808 -0.82356 -0.77475 -0.94727 -1.25 c-0.14323 -0.55989 -0.065107 -1.0481 0.23438 -1.4648 c0.33203 -0.44922 0.81055 -0.60872 1.4355 -0.47852 c0.38411 0.071611 0.65755 0.17903 0.82031 0.32227 c0.15625 0.13672 0.29948 0.38086 0.42969 0.73242 c-0.13021 -0.23438 -0.3418 -0.39063 -0.63477 -0.46875 c-0.28646 -0.084639 -0.54361 -0.061855 -0.77147 0.06835 c-0.39063 0.22786 -0.56966 0.56966 -0.53711 1.0254 c0.032549 0.42969 0.2181 0.80078 0.55664 1.1133 c0.39063 0.36458 0.88542 0.52408 1.4844 0.47851 c0.61198 -0.05208 1.0808 -0.29622 1.4063 -0.73242 c0.24089 -0.31901 0.39389 -0.7487 0.45899 -1.2891 c0.045576 -0.41016 0.039063 -0.86263 -0.019531 -1.3574 c-0.14974 -1.2109 -0.8431 -2.0735 -2.0801 -2.5879 c-1.4388 -0.44271 -2.9427 -0.53385 -4.5117 -0.27343 c-0.97005 0.20183 -1.7839 0.62826 -2.4414 1.2793 c-0.70313 0.68359 -1.1133 1.5104 -1.2305 2.4805 c-0.091143 0.67708 -0.022783 1.3184 0.20508 1.9238 c0.24739 0.65104 0.65755 1.2142 1.2305 1.6895 c0.24089 0.20833 0.64128 0.45572 1.2012 0.74218 l0.35156 0.17578 l0.35156 0.17578 c0.26042 0.14323 0.48503 0.27344 0.67383 0.39063 c1.0612 0.65104 1.5625 1.4453 1.5039 2.3828 c-0.026045 0.41016 -0.094404 0.74544 -0.20508 1.0059 c-0.14323 0.33854 -0.36784 0.55664 -0.67383 0.6543 c-0.67708 0.22136 -1.1849 -0.048828 -1.5234 -0.81055 l0 0.0097656 l0.0097656 0.0097656 c0.0065136 0.0065136 0.0097656 0.0032615 0.0097656 -0.0097561 c0.3125 0.41667 0.66406 0.52409 1.0547 0.32227 c0.36458 -0.18229 0.57291 -0.51758 0.62499 -1.0059 c0.078125 -0.625 -0.10091 -1.1198 -0.53711 -1.4844 c-0.36458 -0.30599 -0.85938 -0.49153 -1.4844 -0.55664 c-0.87891 -0.084639 -1.6569 0.20508 -2.334 0.86914 c-0.70313 0.70313 -0.93099 1.5169 -0.68359 2.4414 c0.24739 0.91797 0.80729 1.6309 1.6797 2.1387 c0.79427 0.45573 1.7253 0.67709 2.793 0.66407 c1.8164 -0.013018 3.1706 -0.25391 4.0625 -0.72266 c0.95703 -0.5013 1.6406 -1.1719 2.0508 -2.0117 c0.54688 -1.1263 0.5013 -2.2591 -0.13672 -3.3984 c-0.53386 -0.9375 -1.3606 -1.7317 -2.4805 -2.3828 z"></path></g></svg>
                        <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg dark:bg-indigo-800">
                            <h1 class="text-4xl font-bold text-center text-indigo-600 mb-4 dark:text-white">
                                <span class="font-semibold text-indigo-500 dark:text-indigo-300">Your</span> Flash Cards Are Awaiting
                            </h1>
                            <p class="text-lg text-gray-700 text-center mb-6 dark:text-white">
                                Welcome to the best flashcard experience designed to help you study and teach effectively. Whether you're preparing for exams or expanding your knowledge, our platform has everything you need.
                            </p>
                            <p class="text-gray-600 text-center mb-6 dark:text-white">
                                Our platform is currently a <span class="font-semibold text-indigo-500 dark:text-indigo-300">Work in Progress</span>, and you may notice updates in design frequently. Rest assured, the core functionality is stable, and the platform is entirely free to use!
                            </p>
                            <h2 class="text-2xl font-semibold text-indigo-600 text-center mb-4 dark:text-white">
                                Organize and Personalize Your Flashcards
                            </h2>
                            <p class="text-gray-600 text-center mb-6 dark:text-white">
                                Create and organize your private flashcards effortlessly. Whether you're working with multiple subjects or different topics, you can easily group your flashcards to keep your study sessions streamlined and efficient.
                            </p>
                            <h3 class="text-xl font-semibold text-indigo-500 text-center mb-4 dark:text-white">
                                Stay Focused and Organized
                            </h3>
                            <p class="text-gray-600 text-center mb-6 dark:text-white">
                                Our flashcards are designed to enhance your focus during study sessions. Navigate easily between your groups of flashcards, study individual cards, or add new ones with ease. From your dashboard, you’ll have quick access to your flashcard groups, view and review each flashcard, and add new cards seamlessly.
                            </p>
                            <p class="text-gray-600 text-center mb-6 dark:text-white">
                                With 3 simple sections, you’ll be well on your way to mastering any topic: choose your flashcard group, review individual flashcards, and add new flashcards. Take control of your learning and stay organized with our intuitive flashcard system.
                            </p>
                            <div class="flex justify-center">
                                <a href="{{route('register')}}" class="bg-indigo-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-600 transition-all dark:bg-indigo-500">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
