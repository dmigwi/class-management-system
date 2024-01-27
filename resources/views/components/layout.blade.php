<div class="relative bg-gray-100 dark:bg-gray-800 h-full overflow-scroll">
    <div class="flex items-start justify-between h-full">
        <div class="relative h-full lg:block w-60">
            <div class="bg-white dark:bg-gray-700 h-full">
                <nav>
                    <div>
                        <a @class([
                            "flex items-center justify-start w-full p-3 mb-2 text-gray-800 transition-colors duration-200 dark:text-white",
                            "bg-light-blue" => ($attributes->get('page') === 'home'|| $attributes->get('page') === 'admin'),
                            ])
                            @if ($attributes->get('page') !== 'home' && $attributes->get('page') !== 'admin') href="/home" @endif>
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1472 992v480q0 26-19 45t-45 19h-384v-384h-256v384h-384q-26 0-45-19t-19-45v-480q0-1 .5-3t.5-3l575-474 575 474q1 2 1 6zm223-69l-62 74q-8 9-21 11h-3q-13 0-21-7l-692-577-692 577q-12 8-24 7-13-2-21-11l-62-74q-8-10-7-23.5t11-21.5l719-599q32-26 76-26t76 26l244 204v-195q0-14 9-23t23-9h192q14 0 23 9t9 23v408l219 182q10 8 11 21.5t-7 23.5z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-2 text-sm font-normal">Home</span>
                        </a>
                        <a @class([
                            "flex items-center justify-start w-full p-3 mb-2 text-gray-800 transition-colors duration-200 dark:text-white",
                            "bg-light-blue" => ($attributes->get('page') === 'attendance'),
                            ])
                            @if ($attributes->get('page') !== 'attendance') href="/attendance" @endif>
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-2 text-sm font-normal">Attendance</span>
                            {{-- <span class="w-4 h-2 p-1 ml-4 text-xs text-gray-400 bg-gray-200 rounded-lg">0</span> --}}
                        </a>
                        <a @class([
                            "flex items-center justify-start w-full p-3 mb-2 text-gray-800 transition-colors duration-200 dark:text-white",
                            "bg-light-blue" => ($attributes->get('page') === 'chat'),
                            ])
                            @if ($attributes->get('page') !== 'chat') href="/chat" @endif>
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M580 461q0-41-25-66t-66-25q-43 0-76 25.5t-33 65.5q0 39 33 64.5t76 25.5q41 0 66-24.5t25-65.5zm743 507q0-28-25.5-50t-65.5-22q-27 0-49.5 22.5t-22.5 49.5q0 28 22.5 50.5t49.5 22.5q40 0 65.5-22t25.5-51zm-236-507q0-41-24.5-66t-65.5-25q-43 0-76 25.5t-33 65.5q0 39 33 64.5t76 25.5q41 0 65.5-24.5t24.5-65.5zm635 507q0-28-26-50t-65-22q-27 0-49.5 22.5t-22.5 49.5q0 28 22.5 50.5t49.5 22.5q39 0 65-22t26-51zm-266-397q-31-4-70-4-169 0-311 77t-223.5 208.5-81.5 287.5q0 78 23 152-35 3-68 3-26 0-50-1.5t-55-6.5-44.5-7-54.5-10.5-50-10.5l-253 127 72-218q-290-203-290-490 0-169 97.5-311t264-223.5 363.5-81.5q176 0 332.5 66t262 182.5 136.5 260.5zm592 561q0 117-68.5 223.5t-185.5 193.5l55 181-199-109q-150 37-218 37-169 0-311-70.5t-223.5-191.5-81.5-264 81.5-264 223.5-191.5 311-70.5q161 0 303 70.5t227.5 192 85.5 263.5z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-2 text-sm font-normal">Chat With Lecturer</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        @switch($attributes->get('page'))
            @case('admin')
                <x-view.admin/>
                @break
            @case('chat')
                <x-view.chat/>
                @break
            @case('attendance')
                <x-view.attendance/>
                @break
            @default
                <x-view.home/>
        @endswitch
    </div>
</div>