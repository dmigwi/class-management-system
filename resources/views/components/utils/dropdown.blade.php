<div class="relative flex items-center space-x-4">
    <div @class([
            'mx-auto object-cover rounded-full h-10 w-10 pl-2',
            'student-account'=> ($role !== "student"),
            'lecturer-account' => ($role === "student"),
        ])></div>
    <div class="flex flex-col leading-tight">
       <div class="text-sm flex items-center font-bold text-gray-700">{{$course->name}} - ({{$course->code}})</div>
       <span class='text-xs flex items-center text-gray-500 dark:text-neutral-500 space-x-1'>
          @if (Str::lower($course->name) === "administrator")
             <span>Do you need assistance? Share your concerns!</span>
          @elseif($role !== "instructor")
             <span>{{$course->lecturer->title ?? "Not Set"}}</span>
             <span>{{$course->lecturer->firstname ?? ''}}</span>
             <span>{{$course->lecturer->middlename ?? ''}}</span>
             <span>{{$course->lecturer->lastname ?? ''}}</span>
          @endif
       </span>
    </div>
 </div>