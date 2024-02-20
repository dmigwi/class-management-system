<div class="flex flex-col w-full h-fit ">
    @php
        $unit = $attributes->get('data')
    @endphp

    <div class="flex w-full h-auto justify-center items-center">
        <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold text-light-blue">
            Unit Details
        </div>
        <div onclick="document.getElementById('unit-{{$unit->id}}').close();"
            class="flex w-1/12 h-auto justify-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </div>
    </div>
    <div class="flex items-center justify-between bg-gray-200 rounded text-center">
        <div class="w-full h-auto py-10 px-2">
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/4 text-start uppercase">Code:</span>
                <span>{{$unit->code ?? "Not Set"}}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/4 text-start uppercase">Name:</span>
                <span>{{$unit->name ?? "Not Set"}}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/4 text-start uppercase">Instructor:</span>
                <span>{{$unit->lecturer ?? "Not Set"}}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/4 text-start uppercase">Semester:</span>
                <span>{{$unit->semester ?? "Not Set" }}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/4 text-start uppercase">Academic Year:</span>
                <span>{{$unit->year ?? "Not Set" }}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/4 text-start uppercase">Start Date:</span>
                <span>{{$unit->start_date ?? "Not Set"}}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/4 text-start uppercase">End Date:</span>
                <span>{{$unit->end_date ?? "Not Set"}}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/4 text-start uppercase">Duration:</span>
                <span>
                    <span>{{$unit->duration ?? "No Set"}}</span>
                    <span>Classes</span>
                </span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/4 text-start uppercase">Mid-Term Exam Date:</span>
                <span>{{$unit->midterm_exam ?? "Not Set"}}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/4 text-start uppercase">Final Exam Date:</span>
                <span>{{$unit->final_exam ?? "Not Set"}}</span>
            </div>
        </div>
    </div>
</div>