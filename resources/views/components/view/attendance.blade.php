@php
    $unitSelected = "CSE-204-2022/2023";
    $isAttendanceOpen = true;
    $role = "instructor";
    $userId = 2;
    $courses = [
        (object)[
                "unit" => "Introduction to Computer Programming",
                "code" => "CSE-142-2022/2023",
                ],
        (object)[
                "unit" => "Introduction to Computer Systems",
                "code" => "CSE-204-2022/2023",
                ],
        (object)[
                "unit" => "Advanced Programming Concepts",
                "code" => "CSE-320-2022/2023",
                ],
        (object)[
                "unit" => "Artificial Intelligence",
                "code" => "CSE-320-2022/2023",
                ],
        (object)[
                "unit" => "Calculus 1",
                "code" => "CSE-123-2022/2023",
                ]];
@endphp

<div class="py-16 h-full">
  <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
      <div class="grid gap-12 md:gap-6 md:grid-cols-2 lg:gap-12">
          <div class="group space-y-6">
            @if ($role === "instructor")
                <span class="flex items-center justify-between space-x-2">
                    <div class="inline-block relative w-full">
                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            @forelse ($courses as $course)
                                <option value="{{$course->code}}">"{{$course->unit}}"</option>
                            @empty
                                <option>---No courses yet assigned---</option>
                            @endforelse
                        </select>

                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <div class="flex items-center text-xl">
                        @if (!isAttendanceOpen)
                            <form id="stop-form" action="{{ route('end.attendance') }}" method="POST" style="display: none;">
                                {{method('PUT')}}
                                @csrf
                                <input name="id" value="{{$userId}}" style="display: none;">
                                <input name="code" value="{{$unitSelected}}" style="display: none;">
                            </form>
                            <a href="{{ route('end.attendance') }}" onclick="event.preventDefault(); document.getElementById('start-form').submit();">
                        @else 
                            <form id="start-form" action="{{ route('start.attendance') }}" method="POST" style="display: none;">
                                <input name="id" value="{{$userId}}" style="display: none;">
                                <input name="code" value="{{$unitSelected}}" style="display: none;">
                                @csrf
                            </form>
                            <a href="{{ route('start.attendance') }}" onclick="event.preventDefault(); document.getElementById('start-form').submit();">
                        @endif
                            <button type="submit"
                                class="flex items-center justify-center py-2 text-grays-500 border-1 rounded-lg btn-primary w-40">
                                @if (!isAttendanceOpen)
                                    <span>Stop Attendance</span>
                                @else
                                    <span>Start Attendance</span>
                                @endif
                            </button>
                        </a>
                    </div>
                </span>
            
                @if (isAttendanceOpen)
                    <div class="visible-print text-center">
                        {!! QrCode::size(580)->generate(url()->current().'?c='.$unitSelected); !!}
                    </div>
                @else
                    @if ($errors)
                        <span class="text-sm text-red-500">{{$errors->first("status")}}</span>
                    @else
                        <h2 class="text-xl font-semibold items-center text-light-blue dark:text-white">Class Attendance not yet open!</h2>
                    @endif
                @endif
            @else 
                <dialog id="attendance" class="h-fit w-11/12 md:w-1/2 p-5 bg-white rounded-md" open>
                    <div class="flex w-full h-auto justify-center items-center">
                        <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold text-light-blue">
                            @if ($errors)
                                <span class="text-3xl text-red-500">
                                    Failed: {{$errors->first("status")}}
                                </span>
                            @else
                                <span class="text-3xl text-green-500">
                                    Congratulations!!!
                                </span>
                            @endif
                        </div>
                        <form method="dialog">
                            <button class="flex w-1/12 h-auto justify-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </form>
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
