<div id="add-new-unit" class="w-full ">
  <form
      class="relative w-full px-4 py-4 bg-white shadow-lg dark:bg-gray-700  rounded-b-lg rounded-tr-lg
      w-80 overflow-scroll scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter ring-1 ring-black">
      <p class="text-xl font-bold text-gray-800 w-max pb-4">Add New Unit</p>
      <form class="w-fit max-w-lg">
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full md:w-2/5 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                      Name
                  </label>
                  <input
                      class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                      name="firstname" id="name" type="text" placeholder="Computational Mathematics" required>
                  {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
              </div>
              <div class="w-fit px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="code">
                      Code
                  </label>
                  <input
                      class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                      id="code" name="middlename" type="text" placeholder="CME1234/2024">
              </div>
              <div class="w-fit px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="semester">
                      Semester
                  </label>
                  <div class="relative">
                      <select
                          class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                          id="role" name="role">
                          <option>1</option>
                          <option>2</option>
                          <option>Summer</option>
                      </select>
                      <div
                          class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                          </svg>
                      </div>
                  </div>
              </div>
              <div class="w-fit px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="semester">
                      Academic Year
                  </label>
                  <input
                      class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                      id="semester" name="lastname" type="text" placeholder="2023/2024" required>
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                      for="mid-term-exam">
                      Mid-Term Exam Date
                  </label>
                  <input
                      class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                      id="mid-term-exam" name="mid-term-exam" type="date" placeholder="7/01/2024">
              </div>
              <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="final-exam">
                      Final Exam Date
                  </label>
                  <input
                      class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                      id="final-exam" type="date" placeholder="13/02/2024">
              </div>
          </div>
          <div class="flex items-center justify-center py-3 space-x-12 text-sm md:space-x-24">
              <div class="flex items-center text-xs">
                  <button
                      class="flex items-center justify-center py-2 text-grays-500 border-1 rounded-lg btn-primary w-40"
                      type="text">
                      <span class="">Submit</span>
                  </button>
              </div>
          </div>
      </form>
  </form>
</div>