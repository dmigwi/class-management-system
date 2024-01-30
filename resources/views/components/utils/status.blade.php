@php
    $status = $attributes->get('status')
@endphp
<span class='bg-transparent'>
    @switch(Str::lower($status))
        @case("read")
        <svg fill="currentColor" class="text-green-500 font-bold" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="m4.53033 11.4697c-.29289-.2929-.76777-.2929-1.06066 0s-.29289.7677 0 1.0606zm3.46967 
                4.5303-.53033.5303c.29289.2929.76777.2929 1.06066 0zm8.5303-7.46967c.2929-.29289.2929-.76777 
                0-1.06066s-.7677-.29289-1.0606 0zm-7.99997 2.93937c-.29289-.2929-.76777-.2929-1.06066 0s-.29289.7677 
                0 1.0606zm3.46967 4.5303-.5303.5303c.2929.2929.7677.2929 1.0606 0zm8.5303-7.46967c.2929-.29289.2929-.76777 
                0-1.06066s-.7677-.29289-1.0606 0zm-17.06063 3.99997 4 4 1.06066-1.0606-4-4zm5.06066 4 
                7.99997-7.99997-1.0606-1.06066-8.00003 8.00003zm-1.06066-4 4.00003 4 1.0606-1.0606-3.99997-4zm5.06063 
                4 8-7.99997-1.0606-1.06066-8 8.00003z"/>
        </svg>
            @break
        @case("delivered")
        <svg fill="currentColor" class="text-gray-500 font-bold" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="m4.53033 11.4697c-.29289-.2929-.76777-.2929-1.06066 0s-.29289.7677 0 1.0606zm3.46967 
                4.5303-.53033.5303c.29289.2929.76777.2929 1.06066 0zm8.5303-7.46967c.2929-.29289.2929-.76777 
                0-1.06066s-.7677-.29289-1.0606 0zm-7.99997 2.93937c-.29289-.2929-.76777-.2929-1.06066 0s-.29289.7677 
                0 1.0606zm3.46967 4.5303-.5303.5303c.2929.2929.7677.2929 1.0606 0zm8.5303-7.46967c.2929-.29289.2929-.76777 
                0-1.06066s-.7677-.29289-1.0606 0zm-17.06063 3.99997 4 4 1.06066-1.0606-4-4zm5.06066 4 
                7.99997-7.99997-1.0606-1.06066-8.00003 8.00003zm-1.06066-4 4.00003 4 1.0606-1.0606-3.99997-4zm5.06063 
                4 8-7.99997-1.0606-1.06066-8 8.00003z"/>
        </svg>
            @break
        @default
            <svg width="20" fill="currentColor" height="20" class="text-red-500 font-bold"
                viewBox="0 0 520 520" xmlns="http://www.w3.org/2000/svg">
                <path d="M246 406a160 160 0 0 1 202-154c2-11 3-21 3-32-1-110-97-198-215-198-119 0-214 88-214 
                196 0 34 10 66 26 95 3 4 4 10 2 15l-28 76c-3 7 4 13 12 12l77-30c4-2 10-1 15 2a230 230 0 0 0 
                112 29h8zm98-223c20 0 36 16 36 36s-16 36-36 36-36-16-36-36 16-36 36-36zm-215 71c-20 
                0-36-16-36-36s16-36 36-36 36 16 36 36-17 36-36 36zm107 0c-20 0-36-16-36-36s16-36 36-36 
                36 16 36 36-16 36-36 36zm81 92 60 60-60 60c-6 6-6 16 0 21l7 7c6 6 16 6 21 0l60-60 60 
                60c6 6 16 6 21 0l7-7c6-6 6-16 0-21l-60-60 60-60c6-6 6-16 0-21l-7-7c-6-6-16-6-21 0l-60 
                60-60-60c-6-6-16-6-21 0l-7 7c-5 5-5 15 0 21z"/>
            </svg>
    @endswitch
</span>