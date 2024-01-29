<?php $conversation = [(object)[
               "role" => "student",
               "message" => "Can be verified on any platform using docker",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "lecturer",
               "message" => "Your error message says permission denied, npm global installs must be given root privileges.",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "student",
               "message" => "Command was run with root privileges. I'm sure about that.",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "student",
               "message" => "I've update the description so it's more obviously now",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "student",
               "message" => "FYI https://askubuntu.com/a/700266/510172",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "student",
               "message" => "Check the line above (it ends with a # so, I'm running it as root ) `# npm install -g @vue/devtools`",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "lecturer",
               "message" => "Any updates on this issue? I'm getting the same error when trying to install devtools. Thanks",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "student",
               "message" => "Thanks for your message David. I thought I'm alone with this issue. Please, ? the issue to support it :)",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "lecturer",
               "message" => "Are you using sudo?",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "lecturer",
               "message" => "Run this command sudo chown -R `whoami` /Users/[your_user_profile]/.npm-global/ then install the package globally without using sudo",
               "timestamp" => "",
               "status" => "Read",
            ],

            (object)[
               "role" => "student",
               "message" => "It seems like you are from Mac OS world. There is no /Users/ folder on linux?",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "student",
               "message" => "I have no issue with any other packages installed with root permission globally.",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "lecturer",
               "message" => "yes, I have a mac. I never had issues with root permission as well, but this helped me to solve the problem",
               "timestamp" => "",
               "status" => "Read",
            ],
            (object)[
               "role" => "student",
               "message" => "I get the same error on Arch Linux (also with sudo)",
               "timestamp" => "",
               "status" => "Delivered",
            ],
            (object)[
               "role" => "student",
               "message" => "I also have this issue, Here is what I was doing until now: #1076",
               "timestamp" => "",
               "status" => "Delivered",
            ],
            (object)[
               "role" => "student",
               "message" => "even i am facing",
               "timestamp" => "",
               "status" => "Pending",
            ]];

<?php $selected = (object)[
                "title" => "Introduction into Programming",
                "name" => "Dr. Jan Kowalski",
                ];

        $courses =[
                (object)[
                "title" => "Introduction into Programming",
                "name" => "Dr. Jan Kowalski",
                ],
                (object)[
                "title" => "Computational Sampling Methods",
                "name" => "Dr. Adam Kowalski",
                ],
                (object)[
                "title" => "Artificial intelligence",
                "name" => "Dr. Selckut Cankurt",
                ],
                (object)[
                "title" => "Masters Project Diploma",
                "name" => "Prof. Edip Senyurek",
                ],
                (object)[
                "title" => "Calculus 1",
                "name" => "Dr. Jan Kowalski",
                ]];
?>

<div class="flex-1 p:2 sm:p-5 justify-between flex flex-col h-full">
    <div class="hs-dropdown relative inline-block text-left max-w-xs" onclick="toggleDropdown()">
        <button id="dropdown-btn" type="button"
            class="flex items-center px-4 py-2 text-grays-400 border text-md border-b-2 border-gray-300 rounded-md w-full">
            <div class="flex sm:items-center justify-between py-2">
                <div class="relative flex items-center space-x-4">
                    <div class=" relative flex flex-col leading-tight lecturer-account"></div>
                    <div class="flex flex-col leading-tight">
            <div class="text-sm flex items-center text-gray-700">{{$selected->title}}</div>
            <div class="text-sm flex items-center text-light-blue mr-1">{{$selected->name}}</div>
            <svg width="20" height="20" class="ml-2 text-black-400" fill="currentColor" viewBox="0 0 1792 1792"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                </path>
            </svg>
        </button>

        <div id="dropdown-menu" class="absolute hidden z-auto mt-2 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg  
            overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch ring-1 ring-black
            ring-opacity-5 focus:outline-none h-40" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-btn" tabindex="-1">
            @foreach($courses as $course)
                @if ($course->title === $selected->title && $course->name === $selected->name)
                @continue
            @endif
                <button class="text-gray-700 block px-4 py-2 text-sm py-1 w-full" type="button" role="menuitem"
                    tabindex="-1" id="menu-item-0">
                    <div class="flex sm:items-center justify-between py-2 w-fit">
                        <div class="relative flex items-center space-x-4">
                            <div class=" relative flex flex-col leading-tight lecturer-account"></div>
                            <div class="flex flex-col leading-tight">
                                <div class="text-sm flex items-center text-gray-700">{{$course->title}}</div>
                                <div class="text-sm flex items-center text-light-blue mr-1">{{$course->name}}</div>
                            </div>
                        </div>
                    </div>
                </button>
            @endforeach
        </div>
    </div>

    <div id="messages" class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded 
      scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
        @foreach ($conversation as $data)
            @if (strtolower($data->role) === "lecturer")
                <div class="flex items-end">
                    <span class="flex-col space-y-2 text-sm max-w-xs mx-2 order-2 px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">
                        {{ $data->message }}
                    </span>
                </div>
            @else
                <div class="flex justify-end items-end">
                    <span
                        class="flex-col space-y-2 text-sm max-w-xs mx-2 order-1 px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-light text-white">
                        {{ $data->message }}
                    </span>
                </div>
            @endif
        @endforeach
    </div>

    <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2 sm:mb-0">
        <div class="relative flex">
            <span class="absolute inset-y-0 flex items-center">
                <button type="button" disabled
                    class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                        </path>
                    </svg>
                </button>
            </span>
            <input type="text" placeholder="Write your message!" name="message"
                class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-md py-3">
            <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">
                <button type="button" disabled
                    class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                        </path>
                    </svg>
                </button>
                <button type="button" disabled
                    class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </button>
                <button type="button" disabled
                    class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </button>
                <button type="button"
                    class="inline-flex items-center justify-center rounded-lg px-4 py-3 transition duration-500 ease-in-out text-white bg-blue-light hover:bg-blue-400 focus:outline-none">
                    <span class="font-bold">Send</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="h-6 w-6 ml-2 transform rotate-90">
                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 
                            1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const el = document.getElementById('messages')
    el.scrollTop = el.scrollHeight

    function toggleDropdown() {
        const dropdown = document.getElementById("dropdown-menu");
        dropdown.classList.toggle("hidden");
    }
</script>