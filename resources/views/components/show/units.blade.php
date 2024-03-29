@php
    $units = session('units') ?? $units;
    $selectedUnit = $unit ?? null;
    $selectedUnitId = $selectedUnit->id ?? '';

    if(empty($units ?? [])) {
        // Do not process this page since it is not on display.
        return;
    }

    $currentPage = $units->currentPage() ?? -1;
    $lastPage = $units->lastPage() ?? -1;
@endphp

<div id="add-new-unit" class="w-full">
    <div class="relative w-full px-4 py-4 bg-white shadow-lg dark:bg-gray-700 overflow-scroll rounded-b-lg rounded-tr-lg
      w-80 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter ring-1 ring-black">
        <div class="flex items-center justify-between">
            <p class="text-xl font-bold text-gray-800 w-1/3 pb-4">List Of Units</p>
            <form action="{{ route('dashboard') }}" method="GET"
                class="relative flex items-center justify-end w-full pb-4 pr-20 mx-auto text-gray-600">
                <input type="hidden" name="tab" value="list-units">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 w-full rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="Search By Unit Name"/>
                <button type="submit" class="absolute flex items-center justify-end mr-2">
                    <svg  xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 56.966 56.966" width="17px" height="17px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 
                            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
                            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z
                            M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </form>
        </div>
        <div class="flex flex-col">
            <div class="p-1.5 min-w-full inline-block align-middle min-h-80">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead>
                        <tr class="bg-gray-200 text-xs font-medium text-gray-500 uppercase">
                            <th class="px-4 py-1 text-start">Name</th>
                            <th class="px-4 py-1 text-start">Code</th>
                            <th class="px-4 py-1 text-start">Semester</th>
                            <th class="px-4 py-1 text-start">Academic Year</th>
                            <th class="px-4 py-1 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="overflow-x-auto" >
                        @forelse ($units as $unit)
                        <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 ">
                            <td class="px-4 py-1 text-sm text-gray-800 font-medium">{{$unit->name ?? '--'}}</td>
                            <td class="px-4 py-1 text-sm text-gray-800">{{$unit->code ?? '--'}}</td>
                            <td class="px-4 py-1 text-sm text-gray-800">{{$unit->semester ?? '--'}}</td>
                            <td class="px-4 py-1 text-sm text-gray-800">{{$unit->year ?? '--'}}</td>
                            <td class="flex items-center justify-between px-4 py-1 text-center text-sm font-medium">
                                @if ($selectedUnitId === $unit->id)
                                    <dialog id="unit-{{$unit->id}}" class="h-full w-full p-5 backdrop" open>
                                        <x-show.unit :unit="$selectedUnit" />
                                    </dialog>
                                @endif

                                <a href="{{ request()->fullUrlWithQuery(['tab' => 'list-units', 'page' => $units->currentPage(), 'unit' => $unit->id]) }}"
                                    class="inline-flex items-center text-xl font-semibold text-light-blue hover:text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                                        viewBox="0 0 520 520" fill="currentColor">
                                        <path
                                            d="M518 251a288 288 0 0 0-516 0 20 20 0 0 0 0 18 288 288 0 0 0 516 0 20 20 0 0 0 0-18zM260 370c-61 0-110-49-110-110s49-110 110-110 110 49 110 110-49 110-110 110zm0-180c-39 0-70 31-70 70s31 70 70 70 70-31 70-70-31-70-70-70z" />
                                    </svg>
                                </a>
                                <a href="{{ request()->fullUrlWithQuery(['tab' => 'add-unit', 'unit' => $unit->id]) }}"
                                    class="inline-flex items-center text-sm font-semibold text-light-blue hover:text-blue-600">
                                    <?xml version="1.0" ?><svg class="feather feather-edit" fill="none" height="24"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" width="20" height="20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                    </svg>
                                </a>

                                @php
                                    $modalId = 'delete-unit-'.$unit->id;
                                @endphp

                                <x-utils.modal :modalId="$modalId">
                                    <x-utils.delete :modalId="$modalId" :unit='$unit'/>
                                </x-utils.modal>

                                <button type="button" onclick="document.getElementById('{{$modalId}}').showModal();"
                                    class="inline-flex items-center text-sm font-semibold text-light-blue hover:text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                        viewBox="0 0 52 52" fill="currentColor">
                                        <path
                                            d="M45.5 10H33V6a4 4 0 0 0-4-4h-6a4 4 0 0 0-4 4v4H6.5c-.8 0-1.5.7-1.5 1.5v3c0 .8.7 1.5 1.5 1.5h39c.8 0 1.5-.7 1.5-1.5v-3c0-.8-.7-1.5-1.5-1.5zM23 7c0-.6.4-1 1-1h4c.6 0 1 .4 1 1v3h-6zm18.5 13h-31c-.8 0-1.5.7-1.5 1.5V45a5 5 0 0 0 5 5h24a5 5 0 0 0 5-5V21.5c0-.8-.7-1.5-1.5-1.5zM23 42c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1V28c0-.6.4-1 1-1h2c.6 0 1 .4 1 1zm10 0c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1V28c0-.6.4-1 1-1h2c.6 0 1 .4 1 1z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td class="px-4 py-1 text-sm text-red-500">No data found! Please modify your search query</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <nav class="flex items-center justify-center pt-3">
                <ul class="flex bg-transparent">
                    <li>
                        <a @class(["mx-1 flex h-9 w-9 items-center justify-center rounded-full border p-0",
                                'text-light-blue border-blue-light' => ($currentPage !== 1),
                                'text-gray-500 border-gray-500' => ($currentPage === 1),
                            ]) 
                            @if($currentPage !== 1) href="{{$units->previousPageUrl()}}" @endif>
                            <span class="inline-flex items-center text-sm font-semibold hover:text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                    viewBox="0 0 520 520" fill="currentColor">
                                    <path d="M342 477 134 272c-6-6-6-16 0-22L342 45c6-6 16-6 22 0l22 22c6 6 6 16 0 22L221 250c-6 6-6 
                                            16 0 22l163 161c6 6 6 16 0 22l-22 22c-5 5-14 5-20 0z" />
                                </svg>
                            </span>
                        </a>
                    </li>

                    @foreach ($units->getUrlRange(1, $lastPage) as $pageURL)
                        <li>
                            <a @class([
                                'font-semibold mx-1 flex h-9 w-9 items-center justify-center rounded-full p-0 text-sm transition duration-150 ease-in-out',
                                'border border-blue-light text-gray-500 hover:bg-light-300' => ($loop->iteration !== $currentPage),
                                'bg-blue-light text-white shadow-md shadow-pink-500/20' => ($loop->iteration === $currentPage),
                                ]) href="{{$pageURL}}">
                                {{$loop->iteration}}
                            </a>
                        </li>
                    @endforeach
                    
                    <li>
                        <a @class(["mx-1 flex h-9 w-9 items-center justify-center rounded-full border p-0",
                                'text-light-blue border-blue-light' => ($currentPage !== $lastPage),
                                'text-gray-500 border-gray-500' => ($currentPage === $lastPage),
                            ]) 
                            @if($currentPage !== $lastPage)  href="{{$units->url($lastPage)}}" @endif>
                            <span class="inline-flex items-center text-sm font-semibold hover:text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                    viewBox="0 0 520 520" fill="currentColor">
                                    <path d="m179 44 207 205c6 6 6 16 0 22L179 476c-6 6-16 6-22 0l-22-22c-6-6-6-16 0-22l163-161c6-6 
                                            6-16 0-22L136 88c-6-6-6-16 0-22l22-22c6-5 15-5 21 0z" />
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>