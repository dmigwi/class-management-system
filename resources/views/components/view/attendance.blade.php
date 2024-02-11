@php
    $account = session('account') ?? $account;
    $units = session('units') ?? $units;
    $unitSelected = $account->code ?? null;
    $timerId = $account->timer_id ?? -1;
    $isAttendanceOpen = $timerId > 0;
    $role = $account->role;
    $userId = $account->id;
    $courses = $units ?? [];
    $status = $account->status ?? '';
@endphp

<div class="py-16 h-full">
  <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
      <div class="grid gap-12 md:gap-6 md:grid-cols-2 lg:gap-12">
          <div class="group space-y-6">
            @if ($role === "instructor")
                <span class="flex items-center justify-between space-x-2">
                    <div class="inline-block relative w-full">
                        @if (!$isAttendanceOpen)
                            <form type="hidden" id="start-form" action="{{ route('start.attendance') }}" method="POST">
                        @else 
                            <form type="hidden" id="stop-form" action="{{ route('end.attendance') }}" method="POST">
                        @endif
                            @csrf
                            <input type="hidden" id="sender-id" name="id" value="{{$userId}}">
                            <input type="hidden" id="course-code" name="code" value="{{$unitSelected}}">
                        </form>
                        <select id="select-cours" name="code" class="block w-full bg-white border border-gray-400 hover:border-gray-500
                            px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            onchange="onSelectChange();" @disabled($isAttendanceOpen)>
                            <option value="">--Select a Unit---</option>
                            @forelse ($courses as $course)
                                <option value="{{$course->code}}"  @selected($course->code === $unitSelected)>
                                    {{$course->name}}
                                </option>
                            @empty
                                <option value="" @selected(true)>--No Units Available---</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="flex items-center text-md">
                        @if (count($courses) > 0)
                            @if (!$isAttendanceOpen)
                                <a href="{{ route('start.attendance') }}" onclick="event.preventDefault(); document.getElementById('start-form').submit();">
                            @else 
                                <a href="{{ route('end.attendance') }}" onclick="event.preventDefault(); document.getElementById('stop-form').submit();">
                            @endif
                                <span class="flex items-center justify-center py-2 text-grays-500 border-1 rounded-lg btn-primary w-40">
                                @if (!$isAttendanceOpen)
                                    <span>Start Attendance</span>
                                @else
                                    <span>Stop Attendance</span>
                                @endif
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
            @else 
                <dialog id="attendance" class="h-fit w-11/12 md:w-1/2 p-5 bg-white border-2 border-gray-200 rounded-md" open>
                    <div class="flex w-full h-auto justify-center items-center">
                        <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
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
                                        <span class="text-3xl text-gray-500">No class to sign in yet!</span>
                                    @endif
                            @endswitch
                        </div>
                        <div onclick="document.getElementById('attendance').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </div>
                    </div>
                </dialog>  
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