
@php
    $user = $attributes->get('data');
    $units = ["Introduction to Computer Programming",
        "Introduction to Computer Systems",
        "Advanced Programming Concepts",
        "Introduction to Computational Theory",
    ];
@endphp

<div class="flex flex-col w-full h-fit ">
    <div class="flex w-full h-auto justify-center items-center">
        <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold text-light-blue">
            User Details
        </div>
        <div onclick="document.getElementById('user-{{$user->id}}').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </div>
    </div>
    <div class="flex items-center justify-between bg-gray-200 rounded text-center">
        <div class="w-1/2 h-auto py-10 px-2">
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/5 text-start uppercase">Name:</span> 
                <span class="flex items-center justify-start space-x-1">
                    <span>{{$user->title}}</span>
                    <span>{{$user->firstname}}</span>
                    <span>{{$user->middlename}}</span>
                    <span>{{$user->lastname}}</span>
                </span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/5 text-start uppercase">Role:</span> 
                <span>{{$user->role ?? "Not Set"}}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/5 text-start uppercase">Dept.:</span> 
                <span>{{$user->faculty ?? "Not Set" }}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/5 text-start uppercase">Email:</span> 
                <span>{{$user->email ?? "Not Set" }}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/5 text-start uppercase">Phone:</span> 
                <span>{{$user->phone ?? "Not Set"}}</span>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <span class="w-1/5 text-start uppercase">Country:</span> 
                <span>{{$user->country ?? "Not Set"}}</span>
            </div>
        </div>
        <div class="w-1/2 text-gray-900 text-sm font-medium flex items-center justify-end">
            <div class="w-full">
                <span aria-current="true" class="block uppercase bg-blue-light px-4 py-2 bg-gray-700 text-white">
                    Units Allocated
                </span>
                <span class="w-full block">
                    @forelse ($units as $unit)
                        <li class="px-4 text-start py-2">{{$unit}}</li>
                    @empty
                        No Units Allocated yet!
                    @endforelse
                </span>
            </div>
        </div>
    </div>
</div>