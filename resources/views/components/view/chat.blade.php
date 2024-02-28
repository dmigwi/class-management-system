<?php 
   $user = Auth::user();
   $role = Str::lower($user->role ?? "");
   $courses =  $units ?? [];
   $conversation = $conversation ?? [];
   $unit = $account->unit ?? null;
?>

<div @class([
      'flex-1 p:2 sm:p-5 justify-between flex flex-col h-full',
      $class => true,
   ])>
   <div class="hs-dropdown relative inline-block text-left max-w-fit" onclick="toggleDropdown()">
      <button id="dropdown-btn" type="button"
         class="flex items-center px-2 py-2  bg-gray-100 text-grays-400 border text-md border-b-2 border-gray-300 rounded-md w-fit">
         <div class="flex sm:items-center justify-between">
            <div class="relative flex items-center space-x-4">
               <div @class([ 
                     'mx-auto object-cover rounded-full h-10 w-10 pl-2',
                     'student-account'=> ($role !== "student"),
                     'lecturer-account' => ($role === "student"),
                  ])></div>
               <div class="flex flex-col leading-tight">
                  <div class="text-sm flex items-center font-bold text-gray-700">{{$unit->name}} - ({{$unit->code}})</div>
                  <span class='text-xs flex items-center text-gray-500 dark:text-neutral-500 space-x-1'>
                     <span>{{$unit->lecturer->title ?? "Not Set"}}</span>
                     <span>{{$unit->lecturer->firstname ?? ''}}</span>
                     <span>{{$unit->lecturer->middlename ?? ''}}</span>
                     <span>{{$unit->lecturer->lastname ?? ''}}</span>
                  </span>
               </div>
            </div>
         </div>
         <div>
            <svg width="20" height="20" class="ml-2 text-black-400" fill="currentColor" viewBox="0 0 1792 1792"
               xmlns="http://www.w3.org/2000/svg">
               <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
               </path>
            </svg>
         </div>
      </button>

      <div id="dropdown-menu" class="absolute hidden z-auto origin-top-right divide-y divide-gray-100
         rounded-md bg-gray-100 shadow-lg overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded
         scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch ring-1 ring-black
         ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical"
         aria-labelledby="hs-dropdown-btn" tabindex="-1">
      @foreach($courses as $course)
         @if ($course->id === $unit->id)
            @continue
         @endif

         <a class="text-gray-700 block px-2 py-2 text-sm w-full" href="{{'?'.http_build_query(['unit' => $course->id])}}">
            <div class="flex sm:items-center justify-between w-fit">
               <div class="relative flex items-center space-x-4">
                  <div @class([
                        'mx-auto object-cover rounded-full h-10 w-10 pl-2',
                        'student-account'=> ($role !== "student"),
                        'lecturer-account' => ($role === "student"),
                     ])></div>
                  <div class="flex flex-col leading-tight">
                     <div class="text-sm flex items-center font-bold text-gray-700">{{$course->name}} - ({{$course->code}})</div>
                     <span class='text-xs flex items-center text-gray-500 dark:text-neutral-500 space-x-1'>
                        <span>{{$course->lecturer->title ?? "Not Set"}}</span>
                        <span>{{$course->lecturer->firstname ?? ''}}</span>
                        <span>{{$course->lecturer->middlename ?? ''}}</span>
                        <span>{{$course->lecturer->lastname ?? ''}}</span>
                     </span>
                  </div>
               </div>
            </div>
         </a>

         @isset($courses)
            {{$courses->links()}}
         @endisset

      @endforeach
      </div>
   </div>

   <div id="messages" class="flex flex-col space-y-1 p-2 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded 
      scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
   @foreach ($conversation as $data)
      @php
         $isCurrent = $data->sender_id === $user->id;
      @endphp
         <div @class([
               'flex items-end', 
               'justify-end' => !$isCurrent,
            ])>
            <span @class([
                  'flex-col space-y-2 text-sm max-w-md mx-2 px-4 py-2 rounded-lg inline-block font-semibold', 
                  'order-2 rounded-bl-none bg-blue-light text-white' => $isCurrent,
                  'order-1 rounded-br-none bg-gray-300 text-gray-700' => !$isCurrent,
               ])>
               {{ $data->message }}
               @if (!$isCurrent)
                  @php
                     $status =  'Read';
                     if (is_null($data->read_at)) $status = 'Delivered';
                  @endphp
                  <span class="flex items-end">
                     <x-utils.status :status='$status ?? "Pending"' />
                  </span>
               @endif
            </span>
         </div>
   @endforeach
   </div>

   <div class="border-t-2 border-gray-300 px-4 pt-4 mb-2 sm:mb-0">
      <form  class="relative flex" method="POST" action="">
         @csrf
         <input type="text" placeholder="Write your message!" name="message" required
            class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-4 bg-gray-300 rounded-md py-3"/>
         <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">
            <!--
            <button type="button" disabled
               class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out
                  text-gray-500 hover:bg-gray-300 focus:outline-none">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  class="h-6 w-6 text-gray-600">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                  </path>
               </svg>
            </button>
            <button type="button" disabled
               class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out
                  text-gray-500 hover:bg-gray-300 focus:outline-none">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  class="h-6 w-6 text-gray-600">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812
                        1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                  </path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
               </svg>
            </button>
            <button type="button" disabled
               class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out
                  text-gray-500 hover:bg-gray-300 focus:outline-none">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  class="h-6 w-6 text-gray-600">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                  </path>
               </svg>
            </button>
         -->
            <button type="submit"
               class="inline-flex items-center justify-center rounded-lg px-4 py-3 transition duration-500 ease-in-out
                  text-white bg-blue-light hover:bg-blue-400 focus:outline-none">
               <span class="font-bold">Send</span>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                  class="h-6 w-6 ml-2 transform rotate-90">
                  <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112
                     0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                  </path>
               </svg>
            </button>
         </div>
      </form>
   </div>
</div>

<script>
   const el = document.getElementById('messages')
	el.scrollTop = el.scrollHeight

   function toggleDropdown() {
      const dropdown = document.getElementById("dropdown-menu");
      dropdown.classList.toggle("hidden");
   }
</script>