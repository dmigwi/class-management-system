@php
     $courses = [
            "Introduction to Computer Programming",
            "Introduction to Computer Systems",
            "Advanced Programming Concepts",
        ];
@endphp

<div id="add-new-user" class="w-full ">
    <form
        class="relative w-full px-4 py-4 bg-white shadow-lg dark:bg-gray-700 overflow-scroll rounded-b-lg rounded-tr-lg
        w-80 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter ring-1 ring-black">
        <p class="text-xl font-bold text-gray-800 w-max pb-4">Add New User</p>
        <form class="w-fit max-w-lg">
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-fit px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                        Title
                    </label>
                    <div class="relative">
                        <select
                            class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="title" name="title">
                            <option>Mr.</option>
                            <option>Ms.</option>
                            <option>Dr.</option>
                            <option>Prof.</option>
                            <option>Eng.</option>
                            <option>Sir</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="firstname">
                        First Name
                    </label>
                    <input name="firstname" id="firstname" type="text" placeholder="Jane" required
                        class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                </div>
                <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="middle-name">
                        Middle Name
                    </label>
                    <input id="middlename" name="middlename" type="text" placeholder="Doe"
                        class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
                <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="lastname">
                        Last Name
                    </label>
                    <input id="lastname" name="lastname" type="text" placeholder="Smith" required
                        class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                        Password
                    </label>
                    <input name="password" id="password" type="password" placeholder="*********" required
                        class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <p class="text-gray-600 text-xs italic mb-2">Make it as long and as crazy as you'd like</p>
                </div>
                <div class="w-fit px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="role">
                        Role
                    </label>
                    <div class="relative">
                        <select id="role" name="role"
                            class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="Student">Student</option>
                            <option value="Lecturer">Lecturer</option>
                            <option value="Admin">Admin</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-fit px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="faculty">
                        Faculty
                    </label>
                    <div class="relative">
                        <select id="faculty" name="faculty"
                            class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="Business And International Relations">
                                Business And International Relations
                            </option>
                            <option value="Computer Engineering, Graphics Design And Architecture">
                                Computer Engineering, Graphics Design And Architecture
                            </option>
                            <option value="Philology And Journalism">
                                Philology And Journalism
                            </option>
                            <option value="Polish And Foreign Languages">
                                Polish And Foreign Languages
                            </option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-fit px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Country Of Origin
                    </label>
                    <div class="relative">
                        <select id="country"
                            class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <x-utils.country />
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                        Email
                    </label>
                    <input id="email" name="email" type="text" placeholder="jane.doe@gmail.com"
                        class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>

                <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="phone-number">
                        Phone Number
                    </label>
                    <input id="phone" name="phone" type="text" placeholder="+48 726 902 210"
                        class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="unit">
                        Class/Training Course(s)
                    </label>
                    <div
                        class="relative block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <ul class="max-w-sm flex flex-col max-h-40 overflow-scroll">
                            @forelse ($courses as $unit)
                                <li class="inline-flex items-center gap-x-2 py-2 px-2 -mt-px">
                                    <div class="relative flex items-start w-full">
                                        <div class="flex items-center h-5">
                                            <input type="checkbox" class="border-gray-200 mx-1 rounded disabled:opacity-50">
                                        </div>
                                        <label class="ms-3.5 block w-full text-sm text-gray-600">$unit</label>
                                    </div>
                                </li>
                            @empty
                                No Units Available!
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center py-3 space-x-12 text-sm md:space-x-24">
                <div class="flex items-center text-xs">
                    <button type="submit"
                        class="flex items-center justify-center py-2 text-grays-500 border-1 rounded-lg btn-primary w-40">
                        <span class="">Submit</span>
                    </button>
                </div>
            </div>
        </form>
    </form>
</div>