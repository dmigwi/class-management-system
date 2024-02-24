@php
    $user = Auth::user();
    $role = $user->role ?? '';
    $userId = $user->id ?? '';

    $account = session('account') ?? $account;
    $units = session('units') ?? $units;
    $unitSelected = $account->code ?? null;
    $timerId = $account->timer_id ?? -1;
    $isAttendanceOpen = $timerId > 0;
    $status = $account->status ?? '';

    $courses = $units ?? [];

    $fmDiv = 'start-form';
    $fmRoute = 'start.attendance';
    $btnText = 'Start Attendance';

    if ($isAttendanceOpen) {
        $fmDiv = 'stop-form';
        $fmRoute = 'end.attendance';
        $btnText = 'Stop Attendance';
    }
@endphp

<div class="py-16 h-full">
    <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <div class="grid gap-12 md:gap-6 md:grid-cols-2 lg:gap-12">
            <div class="group space-y-6">

            @if ($role === "student")
                <x-utils.modal :modalId="'attendance'" :modalOpen="'open'" class="backdrop">
                    @switch($status)
                        @case("success")
                            <span class="text-3xl text-green-500">Congratulations! You are signed in.</span>
                        @break
                        @case('already-exists')
                            <span class="text-3xl text-yellow-500">You are already signed in!</span>
                        @break
                        @default
                            @if (!is_null($errors ?? null) && $errors->first("status"))
                                <span class="text-3xl text-red-500">Oops! Sorry, {{$errors->first("status")}}</span>
                            @else
                                <span class="text-3xl text-light-blue">No class to sign in yet!</span>
                            @endif
                    @endswitch
                </x-utils.modal>
            @endif

            @if ($role === "instructor")
                <span class="flex items-center justify-between space-x-2">
                    <div class="inline-block relative w-full">
                        <form type="hidden" id="{{$fmDiv}}" action="{{route($fmRoute)}}" method="POST">
                            @csrf
                            <input type="hidden" id="sender-id" name="id" value="{{$userId}}">
                            <input type="hidden" id="course-code" name="code" value="{{$unitSelected}}">
                        </form>
                        <select id="select-cours" name="code" class="block w-full bg-white border border-gray-400 hover:border-gray-500
                            px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            onchange="onSelectChange();" @disabled($isAttendanceOpen)>
                                <option value="">--Select a Unit---</option>
                                @forelse ($courses as $course)
                                    <option value="{{$course->code}}" @selected($course->code === $unitSelected)>
                                        {{$course->name}}
                                    </option>
                                @empty
                                    <option value="" @selected(true)>--No Units Available---</option>
                                @endforelse
                        </select>
                    </div>
                    <div class="flex items-center text-md">
                    @if (count($courses) > 0)
                        <a href="{{route($fmRoute)}}"
                            onclick="event.preventDefault(); document.getElementById({{$fmDiv}}).submit();">
                            <span class="flex items-center justify-center py-2 text-grays-500 border-1 rounded-lg btn-primary w-40">
                                $btnText
                            </span>
                        </a>
                    @endif
                    </div>
                </span>
                @if ($isAttendanceOpen)
                    <div class="visible-print text-center">
                        {!! QrCode::size(560)->generate(route('sign.attendance', $timerId)); !!}
                    </div>
                    <div class="text-xl text-light-blue font-normal md:font-bold italic text-center">
                        {{route('sign.attendance', $timerId)}}
                    </div>
                @else
                    @if (!is_null($errors ?? null) && $errors->first("status"))
                        <span class="text-sm text-red-500">{{$errors->first("status")}}</span>
                    @else
                        <h2 class="flex items-center justify-center text-xl font-semibold text-light-blue dark:text-white">
                        @if (count($courses) > 0)
                            <span>Class attendance sign in is not yet open!</span>
                        @else
                            <span>No classes allocated to you yet!</span>
                        @endif
                        </h2>
                    @endif
                @endif
            @endif

            </div>
            <div class="group space-y-6">
                <h3 class="text-3xl font-semibold items-center text-light-blue dark:text-white">Scan the QR code</h3>
                <p class="text-gray-800 text-xl dark:text-gray-300 semi-bold">
                    1. This feature requires a scanning device (phone e.g Android or Iphone) with functionality to read
                    a QR code.
                </p>
                <p class="text-gray-800 text-xl dark:text-gray-300 semi-bold">
                    2. On scanning the QR code you will be redirected to a page that requires you sign in using your
                    student/staff credentails.
                </p>
                <p class="text-gray-800 text-xl dark:text-gray-300 semi-bold">
                    3. You have signed into the current class. Congratulations for following this
                    simple process!
                </p>
                <p class="text-gray-800 text-xl dark:text-gray-300 semi-bold">
                    4. If you experience an problems signing into your class, inform your Instructor/Lecturer
                    immediately or visit the IT's office.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    function onSelectChange() {
        var e = document.getElementById("select-cours");
        document.getElementById("course-code").value = e.options[e.selectedIndex].value;
    }
</script>