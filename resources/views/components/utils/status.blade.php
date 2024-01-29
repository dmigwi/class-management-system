@php
    $status = $attributes.get('status')
@endphp

@switch(Str::lower($status))
    @case("read")
        <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500"
            viewBox="0 0 520 520" xmlns="http://www.w3.org/2000/svg">
            <path d="M191 425 26 259c-6-6-6-16 0-22l22-22c6-6 16-6 22 0l124 125a10 10 0 0 0 
                    15 0L452 95c6-6 16-6 22 0l22 22c6 6 6 16 0 22L213 425c-6 7-16 7-22 0z" />
        </svg>
        @break
    @case("delivered")
        <svg width="20" fill="currentColor" height="20" class="h-3 text-gray-500"
            viewBox="0 0 520 520" xmlns="http://www.w3.org/2000/svg">
            <path d="M191 425 26 259c-6-6-6-16 0-22l22-22c6-6 16-6 22 0l124 125a10 10 0 0 0 
                    15 0L452 95c6-6 16-6 22 0l22 22c6 6 6 16 0 22L213 425c-6 7-16 7-22 0z" />
        </svg>
        @break
    @default
        <svg width="20" fill="currentColor" height="20" class="h-3 text-gray-500"
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