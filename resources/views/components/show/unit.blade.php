@php
    $unit = $unit ?? [];
    $isAdmin = ($unit->name ?? '') === 'Administrator';
@endphp

<div class="modal flex flex-col bg-white rounded-md h-fit w-11/12 md:w-5/6">
    <div class="flex w-full h-auto justify-center items-center">
        <div class="flex w-10/12 h-auto py-2 justify-center items-center text-2xl font-bold text-light-blue">
            @if ($isAdmin)
                <span>Admin Details</span>
            @else
                <span>Unit Details</span>
            @endif
        </div>
        <div onclick="document.getElementById('unit-{{$unit->id}}').close();"
            class="flex w-1/12 h-auto justify-end cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </div>
    </div>
    <div class="flex items-center justify-between bg-gray-200 rounded text-center">
        <div class="w-3/5 h-auto py-5 px-5">
            <div class="flex items-center justify-start">
                <span class="w-1/4 text-start uppercase font-bold">Code:</span>
                <span>{{$unit->code ?? "Not Set"}}</span>
            </div>
            <div class="flex items-center justify-start">
                <span class="w-1/4 text-start uppercase font-bold">Name:</span>
                <span>{{$unit->name ?? "Not Set"}}</span>
            </div>
            @if (!$isAdmin)
                <div class="flex items-center justify-start">
                    <span class="w-1/4 text-start uppercase font-bold">Instructor:</span>
                    <span class="flex items-center justify-start space-x-1 capitalize">
                        <span>{{$unit->lecturer->title ?? "Not Set"}}</span>
                        <span>{{$unit->lecturer->firstname ?? ''}}</span>
                        <span>{{$unit->lecturer->middlename ?? ''}}</span>
                        <span>{{$unit->lecturer->lastname ?? ''}}</span>
                    </span>
                </div>
                <div class="flex items-center justify-start">
                    <span class="w-1/4 text-start uppercase font-bold">Semester:</span>
                    <span>{{$unit->semester ?? "Not Set" }}</span>
                </div>
                <div class="flex items-center justify-start">
                    <span class="w-1/4 text-start uppercase font-bold">Academic Year:</span>
                    <span>{{$unit->year ?? "Not Set" }}</span>
                </div>
                <div class="flex items-center justify-start">
                    <span class="w-1/4 text-start uppercase font-bold">Start Date:</span>
                    <span>{{$unit->start_date ?? "Not Set"}}</span>
                </div>
                <div class="flex items-center justify-start">
                    <span class="w-1/4 text-start uppercase font-bold">End Date:</span>
                    <span>{{$unit->end_date ?? "Not Set"}}</span>
                </div>
            @endif
        </div>
        <div class="w-2/5 h-auto py-5 px-5">
            @if (!$isAdmin)
                <div class="flex items-center justify-start">
                    <span class="w-1/2 text-start uppercase font-bold">Duration:</span>
                    <span>
                        <span>{{$unit->duration ?? "No Set"}}</span>
                        <span>Classes</span>
                    </span>
                </div>
                <div class="flex items-center justify-start">
                    <span class="w-1/2 text-start uppercase font-bold">Mid-Term Exam Date:</span>
                    <span>{{$unit->midterm_exam ?? "Not Set"}}</span>
                </div>
                <div class="flex items-center justify-start">
                    <span class="w-1/2 text-start uppercase font-bold">Final Exam Date:</span>
                    <span>{{$unit->final_exam ?? "Not Set"}}</span>
                </div>
            @endif
            <div class="flex items-center justify-start">
                <span class="w-1/2 text-start uppercase font-bold">Created On:</span>
                <span>{{$unit->created_at ?? "Not Set"}}</span>
            </div>
            <div class="flex items-center justify-start">
                <span class="w-1/2 text-start uppercase font-bold">Updated On:</span>
                <span>{{$unit->updated_at ?? "Not Set"}}</span>
            </div>
        </div>
    </div>
</div>