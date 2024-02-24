@php
    $modalOpen = $modalOpen ?? '';
    $modalId = $modalId ?? 'modal-id';
@endphp

<dialog id="{{$modalId}}" {{ $attributes->merge(['class' => 'w-11/12 md:w-1/2 p-2 border-2 border-gray-200 rounded-md']) }} {{$modalOpen}}>
    <div class="flex w-full h-auto justify-center items-center bg-white h-full rounded-md">
        <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
            {{ $slot }}
        </div>
        <div onclick="document.getElementById(`{{$modalId}}`).close();"
            class="flex w-1/12 h-auto justify-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-x hover:text-blue-600">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </div>
    </div>
</dialog>