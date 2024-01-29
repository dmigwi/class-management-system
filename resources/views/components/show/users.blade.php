@php
$users = [(object)[
        "id"=>"1",
        "title"=>"Ms.",
        "firstname"=>"Jane",
        "middlename"=>"Doe",
        "lastname"=>"Smith",
        "role"=>"student",
        "email"=>"jane.doe@gmail.com",
        "department"=>"Engineering",
        "country"=>"U.K",
        "phone"=>"+48 456 789 234",
      ],
      (object)[
        "id"=>"2",
        "title"=>"Dr.",
        "firstname"=>"John",
        "middlename"=>"Brown",
        "lastname"=>"",
        "role"=>"lecturer",
        "email"=>"john.brown@gmail.com",
        "department"=>"Languages",
        "country"=>"U.S.A",
        "phone"=>"+48 456 789 234",
      ],
      (object)[
        "id"=>"3",
        "title"=>"Mr.",
        "firstname"=>"John",
        "middlename"=>"Black",
        "lastname"=>"Smith",
        "role"=>"student",
        "email"=>"john.black@gmail.com",
        "department"=>"Tourism",
        "country"=>"Poland",
        "phone"=>"+48 456 789 234",
      ],
      (object)[
        "id"=>"4",
        "title"=>"Prof.",
        "firstname"=>"Jamie",
        "middlename"=>"Smith",
        "lastname"=>"Green",
        "role"=>"lecturer",
        "email"=>"jamie.green@gmail.com",
        "department"=>"Engineering",
        "country"=>"Germany",
        "phone"=>"+48 456 789 234",
      ],
      (object)[
        "id"=>"5",
        "title"=>"Sir.",
        "firstname"=>"Edward",
        "middlename"=>"Woodward",
        "lastname"=>"King",
        "role"=>"Lecturer",
        "email"=>"edward.king@gmail.com",
        "department"=>"Tourism",
        "country"=>"Ireland",
        "phone"=>"+48 456 789 234",
      ],
      (object)[
        "id"=>"6",
        "title"=>"Ms.",
        "firstname"=>"Fantasia",
        "middlename"=>"Jim",
        "lastname"=>"Red",
        "role"=>"student",
        "email"=>"fantasia.red@gmail.com",
        "department"=>"Languages",
        "country"=>"Belarus",
        "phone"=>"+48 456 789 234",
      ],
      (object)[
        "id"=>"7",
        "title"=>"Dr.",
        "firstname"=>"Jan",
        "middlename"=>"Kowalski",
        "lastname"=>"",
        "role"=>"Lecturer",
        "email"=>"jan.kowalski@gmail.com",
        "department"=>"Engineering",
        "country"=>"Poland",
        "phone"=>"+48 456 789 234",
      ],
      (object)[
        "id"=>"8",
        "title"=>"Dr.",
        "firstname"=>"Adam",
        "middlename"=>"Selcut",
        "lastname"=>"Cankurt",
        "role"=>"student",
        "email"=>"adam.cancurt@gmail.com",
        "department"=>"Marketing",
        "country"=>"Sweden",
        "phone"=>"+48 456 789 234",
      ],
      (object)[
        "id"=>"9",
        "title"=>"Prof.",
        "firstname"=>"Mary",
        "middlename"=>"Jane",
        "lastname"=>"Austins",
        "role"=>"Lecturer",
        "email"=>"mary.jane@gmail.com",
        "department"=>"Architecture",
        "country"=>"Poland",
        "phone"=>"+48 456 789 234",
      ],
      (object)[
        "id"=>"10",
        "title"=>"Mr.",
        "firstname"=>"David",
        "middlename"=>"Waweru",
        "lastname"=>"Smith",
        "role"=>"student",
        "email"=>"david.waweru@gmail.com",
        "department"=>"Engineering",
        "country"=>"Poland",
        "phone"=>"+48 456 789 234",
      ]];
@endphp
<div id="add-new-user" class="w-full ">
    <div
        class="relative w-full px-4 py-4 bg-white shadow-lg dark:bg-gray-700 overflow-scroll rounded-b-lg rounded-tr-lg
      w-80 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter ring-1 ring-black">
        <div class="flex items-center justify-between">
            <p class="text-xl font-bold text-gray-800 w-1/3 pb-4">List Of Users</p>
            <div class="relative flex items-center justify-end w-full pb-4 pr-20 mx-auto text-gray-600">
                <input
                    class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 w-full rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                <svg class="absolute flex items-center justify-end mr-2" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 56.966 56.966" width="17px" height="17px">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-1 text-start  text-xs font-medium text-gray-500 uppercase">Name
                                </th>
                                <th class="px-4 py-1 text-start text-xs font-medium text-gray-500 uppercase">Role
                                </th>
                                <th class="px-4 py-1 text-start text-xs font-medium text-gray-500 uppercase">Email
                                </th>
                                <th class="px-4 py-1 text-center text-xs font-medium text-gray-500 uppercase">Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 ">
                                <td
                                    class="flex items-center justify-start space-x-1 px-4 py-1 text-sm font-medium text-gray-800">
                                    <span>{{$user->title}}</span>
                                    <span>{{$user->firstname}}</span>
                                    <span>{{$user->middlename}}</span>
                                    <span>{{$user->lastname}}</span>
                                </td>
                                <td class="px-4 py-1 text-sm text-gray-800">{{$user->role}}</td>
                                <td class="px-4 py-1 text-sm text-gray-800">{{$user->email}}</td>
                                <td class="flex items-center justify-between px-4 py-1 text-center text-sm font-medium">
                                    <dialog id="user-{{$user->id}}" class="h-fit w-11/12 md:w-1/2 p-5 bg-white rounded-md ">
                                        <x-show.user :data="$user"/>
                                    </dialog>
                                    <button type="button" onclick="document.getElementById('user-{{$user->id}}').showModal()"
                                        class="inline-flex items-center text-xl font-semibold text-light-blue hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                                            viewBox="0 0 520 520" fill="currentColor">
                                            <path
                                                d="M518 251a288 288 0 0 0-516 0 20 20 0 0 0 0 18 288 288 0 0 0 516 0 20 20 0 0 0 0-18zM260 370c-61 0-110-49-110-110s49-110 110-110 110 49 110 110-49 110-110 110zm0-180c-39 0-70 31-70 70s31 70 70 70 70-31 70-70-31-70-70-70z" />
                                        </svg>
                                    </button>
                                    <button type="button"
                                        class="inline-flex items-center text-sm font-semibold text-light-blue hover:text-blue-600">
                                        <?xml version="1.0" ?><svg class="feather feather-edit" fill="none" height="24"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" width="20" height="20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                        </svg>
                                    </button>
                                    <button type="button"
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
                            <p class="px-4 py-1 text-sm text-gray-800">No data found! Please modify your search
                                parameters</p>
                            @endforelse
                        </tbody>
                    </table>

                    <nav class="flex items-center justify-center">
                        <ul class="flex bg-transparent">
                            <li>
                                <a class="mx-1 flex h-9 w-9 items-center justify-center rounded-full border border-blue-light p-0
                      text-sm text-gray-500 transition duration-150 ease-in-out hover:bg-light-300" href="#">
                                    <span
                                        class="inline-flex items-center text-sm font-semibold text-light-blue hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                            viewBox="0 0 520 520" fill="currentColor">
                                            <path d="M342 477 134 272c-6-6-6-16 0-22L342 45c6-6 16-6 22 0l22 22c6 6 6 16 0 22L221 250c-6 6-6 
                            16 0 22l163 161c6 6 6 16 0 22l-22 22c-5 5-14 5-20 0z" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="font-semibold mx-1 flex h-9 w-9 items-center justify-center rounded-full bg-blue-light p-0 text-sm 
                          text-white shadow-md shadow-pink-500/20 transition duration-150 ease-in-out" href="#">1</a>
                            </li>
                            <li>
                                <a class="font-semibold mx-1 flex h-9 w-9 items-center justify-center rounded-full border border-blue-light p-0 text-sm 
                          text-gray-500 transition duration-150 ease-in-out hover:bg-light-300" href="#">2</a>
                            </li>
                            <li>
                                <a class="font-semibold mx-1 flex h-9 w-9 items-center justify-center rounded-full border border-blue-light p-0 text-sm 
                            text-gray-500 transition duration-150 ease-in-out hover:bg-light-300" href="#">3</a>
                            </li>
                            <li>
                                <a class="mx-1 flex h-9 w-9 items-center justify-center rounded-full border border-blue-light p-0
                        transition duration-150 ease-in-out hover:bg-light-300" href="#" aria-label="Next">
                                    <span
                                        class="inline-flex items-center text-sm font-semibold text-light-blue hover:text-blue-600">
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
    </div>
</div>