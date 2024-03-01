@php
    $user = $user ?? null;
    $unit = $unit ?? null;

    if (is_null($user) && is_null($unit)) {
        // either user or unit details must be provided otherwise ignore further processing
        return;
    }

    $deleteRoute = 'delete.user';
    $deleteId = $user->id ?? '';
    $modalId = $modalId ?? 'modal-id';

    if (!is_null($unit)) {
        $deleteRoute = 'delete.unit';
        $deleteId = $unit->id ?? '';
    }
@endphp

<form method="POST" action="{{route($deleteRoute, $deleteId)}}">
    @csrf
    <div class="flex flex-col items-center justify-center text-sm font-semibold">
        <span class="text-gray-800 p-4">
            <span>Do you want to proceed with deletion of </span>
            @isset($user)
                <span class="capitalize">"{{$user->title}}</span>
                <span class="capitalize">{{$user->firstname}}</span>
                <span class="capitalize">{{$user->middlename}}</span>
                <span class="capitalize">{{$user->lastname}}"</span>
            @endisset
            @isset($unit)
                <span>"{{$unit->name}}"</span>
            @endisset
            <span>?</span>
        </span>
        <div class="flex items-center justify-center space-x-12 text-sm md:space-x-24">
            <button type="submit" class="flex items-center justify-center py-2 text-white 
                        border-1 border-gray-200 rounded-lg bg-red-500 hover:bg-red-400 w-32">
                <span class="">Delete</span>
            </button>
            <button type="reset" onclick="document.getElementById(`{{$modalId}}`).close();"
                    class="flex items-center justify-center py-2 hover:bg-gray-300
                        border-1 border-gray-200 rounded-lg bg-gray-200 w-32">
                <span class="">Cancel</span>
            </button>
        </div>
    </div>
</form>