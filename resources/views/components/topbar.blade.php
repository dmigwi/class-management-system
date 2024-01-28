<div class="z-40 flex items-center justify-between w-full h-16 py-10">
    <div class="block ml-6 lg:hidden">
        <button class="flex items-center p-2 text-gray-500 bg-white rounded-full shadow text-md">
            <svg width="20" height="20" class="text-gray-400" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                </path>
            </svg>
        </button>
    </div>
    <img src="images/cms.png" loading="lazy" class="ml-4 w-40" alt="Class Management System logo" />
    <div class="relative space-x-4 z-20 flex justify-end h-full px-3 w-full" onclick="accountDropdown()">
      <button class="flex items-center justify-end text-black-500 dark:text-white text-md">
        <span class="pr-2"> Charlie Rector</span>
        <span class="mx-auto object-cover rounded-full h-10 w-10 student-account pl-2"></span>
        <svg width="20" height="20" class="ml-2 text-black-400" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
            </path>
        </svg>
      </button>

      <div id="account-dropdown-menu" class="absolute hidden divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black
      overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch 
        ring-opacity-5 focus:outline-none h-fit" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-btn" tabindex="-1">
          <button class="text-gray-700 block px-4 py-0 text-sm w-full" type="button" role="menuitem" tabindex="-1" id="menu-item-0">
            <div class="flex sm:items-center justify-between py-2 w-fit">
                <span class="relative flex items-center space-x-4"> Sign out </span>
            </div>
          </button>
        </div>
    </div>
</div>

<script>
   function accountDropdown() {
        const dropdown = document.getElementById("account-dropdown-menu");
        dropdown.classList.toggle("hidden");
    }
</script>