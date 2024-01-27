@extends("layouts.base")

@section("title", "Attendance")

@section("content")

<div class="py-16">
    <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
      <div class="grid gap-12 md:gap-6 md:grid-cols-2 lg:gap-12">
        <div class="group space-y-6">
          <img
            src="https://www.uia.no/var/uia/storage/images/media/images/2021-nyhetsbilder-1-vaar/qr-code-1500-q/2018792-1-nor-NO/qr-code-1500-q_fullwidth.jpg"
            alt="Scan QR Code"
            loading="lazy"
            width="800"
            height="800"
            class="h-80 w-full rounded-3xl object-cover object-top transition-all duration-500 group-hover:rounded-xl"
          />
          <h3 class="text-3xl font-semibold text-gray-800 dark:text-white">
           Scan the QR code to sign into class
          </h3>
          <p class="text-gray-600 dark:text-gray-300">
            Finding the right open source project for your first contribution can feel daunting. It took me years to find a repository that fit my skills and interests. 
          </p>
          <div class="flex gap-6 items-center">
            <a href="#" class="-ml-1 p-1 rounded-full flex items-center gap-3 hover:bg-gray-50 dark:hover:bg-gray-800">
              <img class="w-8 h-8 object-cover rounded-full" src="images/man.jpg" alt="">
              <span class="hidden sm:block font-semibold text-base text-gray-600 dark:text-gray-200">Bernard Ng.</span>
            </a>
            <span class="w-max block font-light text-gray-500 sm:mt-0">Aug 27 2022</span>
            <div class="flex gap-2 items-center text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400 dark:text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>2 min read</span>                
            </div>
          </div>
        </div>
        {{-- <div class="group space-y-6">
          <img
            src="https://images.unsplash.com/photo-1491895200222-0fc4a4c35e18?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1674&q=80"
            alt="art cover"
            loading="lazy"
            width="1000"
            height="667"
            class="h-80 w-full rounded-3xl object-cover object-top transition-all duration-500 group-hover:rounded-xl"
          />
          <h3 class="text-3xl font-semibold text-gray-800 dark:text-white">
            Flipper and JS: why we added JavaScript support to a mobile debugging platform
          </h3>
          <p class="text-gray-600 dark:text-gray-300">
            Finding the right open source project for your first contribution can feel daunting. It took me years to find a repository that fit my skills and interests. 
          </p>
          <div class="flex flex-wrap gap-6 items-center">
            <a href="#" class="-ml-1 p-1 rounded-full flex items-center gap-3 hover:bg-gray-50 dark:hover:bg-gray-800">
              <img class="w-8 h-8 object-cover rounded-full" src="images/man.jpg" alt="">
              <span class="hidden sm:block font-semibold text-base text-gray-600 dark:text-gray-200">Bernard Ng.</span>
            </a>
            <span class="w-max block font-light text-gray-500 sm:mt-0">Aug 27 2022</span>
            <div class="flex gap-2 items-center text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400 dark:text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>2 min read</span>                
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
                                      
                                      
@endsection