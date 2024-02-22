@php
    $unit = $attributes->get('unit');
    $instructors = $users ?? [];
@endphp

<div class="w-full">
    <form method="POST" action="{{route('insert.unit')}}"
        class="relative w-full px-4 py-4 bg-white shadow-lg dark:bg-gray-700  rounded-b-lg rounded-tr-lg
             w-80 overflow-scroll scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter ring-1 ring-black">
        @csrf
        @if (is_null($unit))
            <p class="text-xl font-bold text-gray-800 w-max pb-4">Add New Unit</p>
        @else
            <p class="text-xl font-bold text-gray-800 w-max pb-4">Update Unit</p>
        @endif

        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-2/5 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Name
                </label>
                <input name="name" id="name" type="text" size="55" placeholder="Computational Mathematics" 
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight 
                    focus:outline-none focus:bg-white" value="{{$unit->name ?? ''}}" 
                    autocomplete="off" required />
                <p class="text-gray-600 text-xs italic mb-2">Max characters allowed are 55</p>
            </div>
            <div class="w-fit px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="code">
                    Code
                </label>
                <input id="code" name="code" type="text" placeholder="CME1234/2024" value="{{$unit->code ?? ''}}"
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight 
                    focus:outline-none focus:bg-white focus:border-gray-500" required />
                <p class="text-gray-600 text-xs italic mb-2">Must be unique for every entry</p>
            </div>
            <div class="w-fit px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="semester">
                    Semester
                </label>
                <div class="relative">
                    <select id="semester" name="semester"
                        class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded 
                        leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="" >-- 0 --</option>
                        <option @selected($unit->semester ?? '' == "1") value="1">1</option>
                        <option @selected($unit->semester ?? '' == "2") value="2">2</option>
                        <option @selected($unit->semester ?? '' == "Summer") value="Summer">Summer</option>
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
            <div class="w-fit px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="year">
                    Academic Year
                </label>
                <input id="year" name="year" type="text" placeholder="2023/2024" value="{{$unit->year ?? ''}}"
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 
                    leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/5 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="start_date">
                    Start Date
                </label>
                <input id="start_date" name="start_date" type="date" placeholder="7/01/2024"
                    value="{{$unit->start_date ?? ''}}"
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 
                        leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
            </div>
            <div class="w-full md:w-1/5 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="end_date">
                    End Date
                </label>
                <input id="end_date" name="end_date" type="date" placeholder="13/02/2024"
                    value="{{$unit->end_date ?? ''}}"
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 
                        leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
            </div>
            <div class="w-full md:w-1/5 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="duration">
                    Duration
                </label>
                <input id="duration" name="duration" type="number" placeholder="12" value="{{$unit->duration ?? 0}}"
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 
                        leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
                <p class="text-gray-600 text-xs italic mb-2">Total lessons to be taught</p>
            </div>
            <div class="w-full md:w-1/5 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="midterm_exam">
                    Mid-Term Exam Date
                </label>
                <input id="midterm_exam" name="midterm_exam" type="date" placeholder="7/01/2024"
                    value="{{$unit->midterm_exam ?? ''}}"
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 
                        leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
            <div class="w-full md:w-1/5 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="final_exam">
                    Final Exam Date
                </label>
                <input id="final_exam" name="final_exam" type="date" placeholder="13/02/2024"
                    value="{{$unit->final_exam ?? ''}}"
                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 
                        leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/2 px-3 mb-8 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="start_date">
                    Instructor
                </label>
                <select  class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 
                    leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="instructor" id="instructor">
                    <option value="">-- Select an Instructor --</option>
                    @forelse ($instructors as $instructor)
                        <option value="{{$instructor->id}}" @selected($instructor->id === ($unit->instructor ?? ""))>
                            <span class="flex items-center justify-start space-x-1">
                                <span>{{$instructor->title}}</span>
                                <span>{{$instructor->firstname}}</span>
                                <span>{{$instructor->middlename}}</span>
                                <span>{{$instructor->lastname}}</span>
                            </span>
                        </option>
                    @empty
                        <option value="" @selected(true)>--No Instructors Available---</option>
                    @endforelse
                </select>
                @if (!empty($instructors))
                    {{$instructors->links() ?? ''}}
                @endif
            </div>
            <div class="w-full md:w-1/2 px-3 mb-8 md:mb-0">
                @if (!is_null($errors ?? null) && $errors->first("status"))
                    <span class="-mr-2 p-2 text-sm text-red-500">* {{$errors->first("status")}}</span>
                @endif
            </div>
        </div>
        <div class="flex items-center justify-center py-3 space-x-12 text-sm md:space-x-24">
            <div class="flex items-center text-xs">
                <button type="submit"
                    class="flex items-center justify-center py-3 text-grays-500 border-1 rounded-lg btn-primary w-40">
                    <span class="">Submit</span>
                </button>
            </div>
        </div>
    </form>
</div>