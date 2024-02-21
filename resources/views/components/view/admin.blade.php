<?php
    $account = session('account') ?? $account;
    $selectedTab = $account->tab ?? 'list-units';

    $disableAddUser = false;
    $disableListUsers = $account->tab === 'list-users';
    $disableAddUnit = false;
    $disableListUnits = $account->tab === 'list-units';

    $studentsCount = 34;
    $staffCount = 13;
    $unitsRegistered = 21;
    $shortCourses = 10;
    $issuesFixedThisWeek = 10;
    $issuesPending = 13;

    $users = session('users') ?? $users;
    $units = session('units') ?? $units;
?>
<div class="flex flex-col w-full md:space-y-4 h-full">
    <div class="h-screen px-4 pb-24 overflow-auto md:px-6">
        <div class="grid grid-cols-1 gap-4 my-4 md:grid-cols-3 lg:grid-cols-3">
            <div class="w-full">
                <div class="relative w-full px-4 py-4 bg-white shadow-lg dark:bg-gray-700">
                    <p class="text-xl font-bold text-gray-800 border-b border-gray-200 w-ma">Users</p>
                    <div class="mt-3">
                        <span class="absolute p-4 bg-blue-light rounded-full top-2 right-4">
                            <svg class="absolute h-4 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                width="40" height="40" fill="currentColor" viewBox="0 0 520 520"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M267 290c20-29 41-43 55-65 25-37 30-90 14-130-16-41-54-65-98-64s-80 28-94 69c-16 45-9 99 27 133 15 14 29 36 21 57-7 20-31 29-48 37-39 17-86 41-94 87-8 38 18 77 59 77h180c8 0 15-9 10-15-25-29-51-67-51-105-2-27 6-57 19-81zm110 104c-21 0-39-17-39-38s17-38 39-38c21 0 39 17 39 38s-18 38-39 38zm0-130a92 92 0 0 0-92 92c0 63 66 122 86 137 3 3 8 3 12 0 20-16 86-74 86-137a92 92 0 0 0-92-92z" />
                            </svg>
                        </span>
                        <div class="flex items-center justify-between pb-2 mb-2 text-sm border-b border-gray-200 sm:space-x-12">
                            <p>Students Registered</p>
                            <div class="flex items-end text-xs font-bold">{{$studentsCount}}</div>
                        </div>
                        <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                            <p>Staff Registered</p>
                            <div class="flex items-end text-xs font-bold">{{$staffCount}}</div>
                        </div>
                        <div class="flex items-center justify-center space-x-12 text-sm md:space-x-24">
                            <div class="flex items-center text-xs">
                                <button id="btn-add-user" type="button" {{ $disableAddUser ? ' disabled' :'' }}
                                    class="btn-tab flex items-center justify-center mr-1 py-2 text-grays-500 border-1 rounded-l-lg btn-primary w-20">
                                    <span class="">Add</span>
                                </button>
                                <button id="btn-list-users" type="button" {{ $disableListUsers ? ' disabled' :'' }}
                                    class="btn-tab flex items-center justify-center mr-1 py-2 text-grays-500 border-1 rounded-r-lg btn-primary w-20">
                                    <span class="">List</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="relative w-full px-4 py-4 bg-white shadow-lg dark:bg-gray-700">
                    <p class="text-xl font-bold text-gray-800 border-b border-gray-200 w-ma">Units</p>
                    <div class="mt-3">
                        <span class="absolute p-4 bg-blue-light rounded-full top-2 right-4">
                            <svg class="absolute h-4 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                width="40" height="40" fill="currentColor" viewBox="0 0 520 520"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M444 230h-58c-4 15-11 28-21 40h75v60H80v-60h60v-40H76c-20 0-36 16-36 36v194a30 30 0 0 0 30 30h380a30 30 0 0 0 30-30V266c0-20-16-36-36-36zM350 99c0-39-34-69-72-69h-83c-8 0-15 7-15 15v210c0 8 7 15 15 15h85c39 0 70-32 69-71 0-19-8-36-21-48a73 73 0 0 0 22-52zM220 70h60a30 30 0 1 1 0 60h-60V70zm90 130a30 30 0 0 1-30 30h-60v-60h60a30 30 0 0 1 30 30z" />
                            </svg>
                        </span>
                        <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                            <p>Classes Registered</p>
                            <div class="flex items-end text-xs font-bold">{{$unitsRegistered}}</div>
                        </div>
                        <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                            <p>Training Courses Registered</p>
                            <div class="flex items-end text-xs font-bold">{{$shortCourses}}</div>
                        </div>
                        <div class="flex items-center justify-center space-x-12 text-sm md:space-x-24">
                            <div class="flex items-center text-xs">
                                <button id="btn-add-unit" type="button" {{ $disableAddUnit ? ' disabled' :'' }}
                                    class="btn-tab flex items-center justify-center mr-1 py-2 text-grays-500 border-1 rounded-l-lg btn-primary w-20">
                                    <span class="">Add</span>
                                </button>
                                <button id="btn-list-units" type="button" {{ $disableListUnits ? ' disabled' :'' }}
                                    class="btn-tab flex items-center justify-center mr-1 py-2 text-grays-500 border-1 rounded-r-lg btn-primary w-20">
                                    <span class="">List</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="relative w-full px-4 py-4 bg-white shadow-lg dark:bg-gray-700">
                    <p class="text-xl font-bold text-gray-800 border-b border-gray-200 w-ma">Issues</p>
                    <div class="mt-3">
                        <span class="absolute p-4 bg-blue-light rounded-full top-2 right-4">
                            <svg class="absolute h-4 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                width="40" height="40" fill="currentColor" viewBox="0 0 520 520"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m240 70-17-17c-5-5-12-5-17 0L100 158l-43-42c-5-5-12-5-17 0l-17 17c-5 5-5 12 0 17l59 59c5 5 11 7 17 7s12-2 17-7L240 87c4-4 4-12 0-17zm244 114H275c-9 0-16-7-16-16v-32c0-9 7-16 16-16h209c9 0 16 7 16 16v32c0 9-7 16-16 16zm0 143H227c-9 0-16-7-16-16v-32c0-9 7-16 16-16h257c9 0 16 7 16 16v32c0 9-7 16-16 16zm-354 0H98c-9 0-16-7-16-16v-32c0-9 7-16 16-16h32c9 0 16 7 16 16v32c1 9-7 16-16 16zm0 143H98c-9 0-16-7-16-16v-32c0-9 7-16 16-16h32c9 0 16 7 16 16v32c1 9-7 16-16 16zm354 0H227c-9 0-16-7-16-16v-32c0-9 7-16 16-16h257c9 0 16 7 16 16v32c0 9-7 16-16 16z" />
                            </svg>
                        </span>
                        <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                            <p>Issues Responded to this Week</p>
                            <div class="flex items-end text-xs font-bold">{{$issuesFixedThisWeek}}</div>
                        </div>
                        <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                            <p>Issues in Progress</p>
                            <div class="flex items-end text-xs font-bold">{{$issuesPending}}</div>
                        </div>
                        <div class="flex items-center justify-center space-x-12 text-sm md:space-x-24">
                            <a href="{{url('chat')}}" class="flex items-center text-xs">
                                <button type="text"
                                    class="flex items-center justify-center py-2 text-grays-500 border-1 rounded-lg btn-primary w-32">
                                    <span class="">Follow Up</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 my-4 md:grid-cols-1">
            <span id="add-user" @class(['tabs', 'hidden' => !$disableAddUser])>
                <x-form.user />
            </span>
            <span id="list-users" @class(['tabs', 'hidden' => !$disableListUsers])>
                <x-show.users :users='$users' />
            </span>
            <span id="add-unit" @class(['tabs', 'hidden' => !$disableAddUnit])>
                <x-form.unit />
            </span>
            <span id="list-units" @class(['tabs', 'hidden' => !$disableListUnits])>
                <x-show.units :units='$units' />
            </span>
        </div>
    </div>
</div>

<script>
    function tabsToggle() {
      const tabs = document.querySelectorAll(".tabs");
      for (i = 0; i < tabs.length; i++){
          tabs[i].classList.add("hidden");
      }

      const btns = document.querySelectorAll(".btn-tab");
      for (i = 0; i < btns.length; i++){
        btns[i].disabled = false;
      }
    }

    const btn1 = document.getElementById("btn-add-user");
    btn1.addEventListener( "click", 
        (event)=>{
            tabsToggle();
            document.getElementById("add-user").classList.remove("hidden");
            btn1.disabled = true;
            event.preventDefault();
        }
    );

    const btn2 = document.getElementById("btn-list-users");
    btn2.addEventListener( "click", 
        (event)=>{
            tabsToggle();
            document.getElementById("list-users").classList.remove("hidden");
            btn2.disabled = true;
            event.preventDefault();
        }
    );

    const btn3 = document.getElementById("btn-add-unit");
    btn3.addEventListener( "click", 
        (event)=>{
            tabsToggle();
            document.getElementById("add-unit").classList.remove("hidden");
            btn3.disabled = true;
            event.preventDefault();
        }
    );

    const btn4 = document.getElementById("btn-list-units");
    btn4.addEventListener( "click", 
        (event)=>{
            tabsToggle();
            document.getElementById("list-units").classList.remove("hidden");
            btn4.disabled = true;
            event.preventDefault();
        }
    );
</script>