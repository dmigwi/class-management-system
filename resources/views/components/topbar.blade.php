@php
    $role = $attributes->get('role') ?? null;
    $name = $attributes->get('name') ?? null;
@endphp

<div class="z-40 flex items-center justify-between w-full h-16 py-10">
@auth
    <div class="block ml-6 lg:hidden">
        <button class="flex items-center p-2 text-gray-500 bg-white rounded-full shadow text-md">
            <svg width="20" height="20" class="text-gray-400" fill="currentColor" viewBox="0 0 1792 1792"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                </path>
            </svg>
        </button>
    </div>
  @endauth
  <img src="images/cms.png" loading="lazy" class="ml-4 w-40" alt="Class Management System logo" />

    @auth
    <div class="relative space-x-4 z-20 flex justify-end h-full px-3 w-full" onclick="accountDropdown()">
        <button class="flex items-center justify-end text-black-500 dark:text-white text-md">
            <span class="pr-2">{{$name}}</span>
            <span  @class([
                'mx-auto object-cover rounded-full h-10 w-10 pl-2', 
                'student-account' => ($role === "student"),
                'lecturer-account' => ($role !== "student"),
                ])></span>
            <svg width="20" height="20" class="ml-2 text-black-400" fill="currentColor" viewBox="0 0 1792 1792"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                </path>
            </svg>
        </button>

        <div id="account-dropdown-menu" class="absolute hidden divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black
        overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch 
        ring-opacity-5 focus:outline-none h-fit" role="menu" aria-orientation="vertical"
            aria-labelledby="hs-dropdown-btn" tabindex="-1">
            <form id="logout-form" action="{{ route('log.out') }}" method="POST" style="display: none;">
               @csrf
            </form>
            <a href="{{ route('log.out') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <div class="text-gray-700 block px-4 py-0 text-sm w-full" id="menu-item-0">
                    <div class="flex sm:items-center justify-between py-2 w-fit">
                        <span class="relative flex items-center space-x-4"> Sign out </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" class="mx-2" fill="currentColor"
                            viewBox="0 0 520 520">
                            <path
                                d="M210 485v-30c0-8-7-15-15-15H95c-8 0-15-7-15-15V95c0-8 7-15 15-15h100c8 0 15-7 15-15V35c0-8-7-15-15-15H60a40 40 0 0 0-40 40v400a40 40 0 0 0 40 40h135c8 0 15-7 15-15zm286-215c6-6 6-15 0-21L361 114c-6-6-15-6-21 0l-21 21c-6 6-6 15 0 21l56 56c6 6 2 17-7 17H155c-8 0-15 6-15 14v30c0 8 7 16 15 16h212c9 0 13 11 7 17l-56 56c-6 6-6 15 0 21l21 21c6 6 15 6 21 0l136-134z" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endauth
</div>

<script>
  function accountDropdown() {
      const dropdown = document.getElementById("account-dropdown-menu");
      dropdown.classList.toggle("hidden");
  }
</script>