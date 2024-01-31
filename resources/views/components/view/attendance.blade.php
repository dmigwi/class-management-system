@php
    $unitSelected = ""
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
                    <button type="submit"
                        class="flex items-center justify-center py-2 text-grays-500 border-1 rounded-lg btn-primary w-40">
                        <span class="">Start Attendance</span>
                        <span class="hidden">Stop Attendance</span>
                    </button>
                </div>
            </span>
            <span id="qr-code">No Unit Selected yet!</span>
            {{-- @if ()
                
            @endif --}}
            {{-- <div class="visible-print text-center">
                {!! QrCode::size(580)->generate('http://localhost:8000/attendance'); !!}
            </div> --}}
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
    function generateQr(){
        const qrCode = document.getElementById("qr-code")
        qrCode.innerHTML = `<div class="visible-print text-center">
                {!! QrCode::size(580)->generate('http://localhost:8000/attendance?'); !!}
            </div>`
    }
</script>