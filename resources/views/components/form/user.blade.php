@php
    $courses = $units ?? [];
    $user = $user ?? null;

    $userRoute = 'update.user';
    if (is_null($user)) {
        $userRoute = 'insert.user';
    }
@endphp

<div id="add-new-user" class="w-full ">
    <form  method="POST" action="{{route($userRoute, $user->id ?? '')}}" 
        class="relative w-full px-5 py-3 bg-white shadow-lg dark:bg-gray-700 overflow-scroll rounded-b-lg rounded-tr-lg
        w-80 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter ring-1 ring-black">
    @if (is_null($user))
        <p class="text-xl font-bold text-gray-800 w-max pb-2">Add New User</p>
    @else
        <p class="text-xl font-bold text-gray-800 w-max pb-2">Update User</p>
        {{ method_field('PUT') }}
    @endif
        @csrf
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-fit px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    Title
                </label>
                <div class="relative">
                    <select id="title" name="title"
                        class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded 
                        leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="" > -- Set Title -- </option>
                        <option @selected(Str::lower($user->title ?? '')==="mr.") value="Mr.">Mr.</option>
                        <option @selected(Str::lower($user->title ?? '')==="ms.") value="Ms.">Ms.</option>
                        <option @selected(Str::lower($user->title ?? '')==="dr.") value="Dr.">Dr.</option>
                        <option @selected(Str::lower($user->title ?? '')==="prof.") value="Prof.">Prof.</option>
                        <option @selected(Str::lower($user->title ?? '')==="eng.") value="Eng.">Eng.</option>
                        <option @selected(Str::lower($user->title ?? '')==="sir") value="Sir">Sir</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/4 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="firstname">
                    First Name
                </label>
                <input name="firstname" id="firstname" type="text" placeholder="Jane"
                    value="{{$user->firstname ?? ''}}"
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 
                        leading-tight focus:outline-none focus:bg-white" required>
            </div>
            <div class="w-full md:w-1/4 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="middlename">
                    Middle Name
                </label>
                <input id="middlename" name="middlename" type="text" placeholder="Doe"
                    value="{{$user->middlename ?? ''}}"
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4
                        leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
            <div class="w-full md:w-1/4 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="lastname">
                    Last Name
                </label>
                <input id="lastname" name="lastname" type="text" placeholder="Smith"
                    value="{{$user->lastname ?? ''}}" 
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 
                        leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-3">
            <div class="w-full md:w-1/2 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                    Password
                </label>
                <input name="password" id="password" type="password" placeholder="*********" value="" 
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 
                    leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                <p class="text-gray-600 text-xs italic mb-2">Make it as long and as crazy as you'd like</p>
            </div>
            <div class="w-fit px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="role">
                    Role
                </label>
                <div class="relative">
                    <select id="role" name="role" 
                        class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 
                            rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="" > -- Set Role -- </option>
                        <option value="student" @selected(Str::lower($user->role ?? '')==="student")>Student</option>
                        <option value="instructor" @selected(Str::lower($user->role ?? '')==="instructor")>Lecturer
                        </option>
                        <option value="admin" @selected(Str::lower($user->role ?? '')==="admin")>Admin</option>
                    </select>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email
                </label>
                <input id="email" name="email" type="text" placeholder="jane.doe@gmail.com"
                    value="{{$user->email ?? ''}}" autocomplete="off"
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 
                        leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-3">
            <div class="w-fit px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Faculty
                </label>
                <div class="relative">
                    <select id="faculty" name="faculty" 
                        class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 
                            rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="" > -- Select the Faculty -- </option>
                        <option @selected(Str::lower($user->faculty ?? '')==="business and international relations")
                            value="Business And International Relations">
                            Business And International Relations
                        </option>
                        <option @selected(Str::lower($user->faculty ?? '')==="computer engineering, graphics design and architecture")
                            value="Computer Engineering, Graphics Design And Architecture">
                            Computer Engineering, Graphics Design And Architecture
                        </option>
                        <option @selected(Str::lower($user->faculty ?? '')==="philology and journalism")
                            value="Philology And Journalism">
                            Philology And Journalism
                        </option>
                        <option @selected(Str::lower($user->faculty ?? '')==="polish and foreign languages")
                            value="Polish And Foreign Languages">
                            Polish And Foreign Languages
                        </option>
                        <option @selected(Str::lower($user->faculty ?? '')==="administration")
                            value="Administration">
                            Administration
                        </option>
                    </select>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4 pr-2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="w-fit px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Country Of Origin
                </label>
                <div class="relative">
                    <select id="country" name="country" autocomplete="off"
                        class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 
                            rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                            @isset($user->country)
                                <option value="{{$user->country}}" selected>{{$user->country}}</option>
                            @endisset
                        <x-utils.country />
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/6 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                    Phone Number
                </label>
                <input id="phone" name="phone" type="text" placeholder="+48 726 902 210" autocomplete="off"
                    value="{{$user->phone ?? ''}}" class="block w-full bg-gray-200 text-gray-700 border border-gray-200
                        rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-3/5 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Class/Training Course(s)
                </label>
                <div class="relative block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-2 
                        px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <span class="w-full flex flex-col max-h-32 overflow-scroll bg-gray-200">
                    @forelse ($courses as $unit)
                        <li class="inline-flex items-center gap-x-2 py-2 px-2 -mt-px">
                            <div class="relative flex items-start w-full">
                                <label class="ms-3.5 block w-full text-sm text-gray-600">
                                    @php
                                       $isChecked = false;
                                       if ($user->role === "student") {
                                            foreach ($user->units ?? [] as $assignedUnit) {
                                                if ($unit->id === $assignedUnit->id) {
                                                    $isChecked = true;
                                                    break;
                                                }
                                            }
                                       } elseif ($user->role === "instructor") {
                                            $isChecked = $user->id === $unit->instructor;
                                       }
                                    @endphp

                                    <input type="checkbox" name="classes[]" value="{{$unit->id}}" @checked($isChecked)>
                                    <span>{{$unit->name}} - ({{$unit->code}})</span>
                                </label>
                            </div>
                        </li>
                    @empty
                        No Units Available!
                    @endforelse
                    </span>

                    @if (!empty($courses))
                        {{ $courses->links() }}
                    @endif
                </div>
            </div>
            <div class="w-full md:w-2/5 px-3 mb-8 md:mb-0">
                @if (!is_null($errors ?? null) && $errors->first("status"))
                    <span class="-mr-2 p-2 text-sm text-red-500">* {{$errors->first("status")}}</span>
                @endif
            </div>
        </div>
        <div class="flex items-center justify-center py-2 space-x-12 text-sm md:space-x-24">
            <div class="flex items-center text-xs">
                <button type="submit"
                    class="flex items-center justify-center py-3 text-grays-500 border-1 rounded-lg btn-primary w-40">
                    <span class="">Submit</span>
                </button>
            </div>
        </div>
    </form>
</div>