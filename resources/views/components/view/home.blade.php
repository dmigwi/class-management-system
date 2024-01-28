<script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>
<script src="https://preline.co/assets/vendor/apexcharts/dist/apexcharts.min.js"></script>
<script src="https://preline.co/assets/vendor/lodash/lodash.min.js"></script>
<script src="/js/charts.js"></script>

<div class="flex flex-col w-full md:space-y-4 h-full">
    <div class="h-screen px-4 pb-24 overflow-auto my-6 md:px-6">
        <div class="flex items-center space-x-4">
            <button class="flex items-center px-4 py-2 text-grays-400 border rounded-l-lg text-md" type="date">
                <svg width="20" height="20" fill="currentColor" class="mr-2 border-black-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M192 1664h288v-288h-288v288zm352 0h320v-288h-320v288zm-352-352h288v-320h-288v320zm352 0h320v-320h-320v320zm-352-384h288v-288h-288v288zm736 736h320v-288h-320v288zm-384-736h320v-288h-320v288zm768 736h288v-288h-288v288zm-384-352h320v-320h-320v320zm-352-864v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm736 864h288v-320h-288v320zm-384-384h320v-288h-320v288zm384 0h288v-288h-288v288zm32-480v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38h-1408q-52 0-90-38t-38-90v-1280q0-52 38-90t90-38h128v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z">
                    </path>
                </svg>
                From: 24 Jan, 2024
                <svg width="20" height="20" class="ml-2 text-black-400" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                    </path>
                </svg>
            </button>
            
            <button class="flex items-center px-4 py-2 text-grays-400 border text-md" type="date">
                <svg width="20" height="20" fill="currentColor" class="mr-2 border-black-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M192 1664h288v-288h-288v288zm352 0h320v-288h-320v288zm-352-352h288v-320h-288v320zm352 0h320v-320h-320v320zm-352-384h288v-288h-288v288zm736 736h320v-288h-320v288zm-384-736h320v-288h-320v288zm768 736h288v-288h-288v288zm-384-352h320v-320h-320v320zm-352-864v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm736 864h288v-320h-288v320zm-384-384h320v-288h-320v288zm384 0h288v-288h-288v288zm32-480v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38h-1408q-52 0-90-38t-38-90v-1280q0-52 38-90t90-38h128v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z">
                    </path>
                </svg>
                To: 5 Feb, 2024
                <svg width="20" height="20" class="ml-2 text-black-400" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                    </path>
                </svg>
            </button>

            <button class="flex items-center px-4 py-2 text-grays-400 border rounded-r-lg text-md" type="text">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mr-2 border-black-500" height="20" width="20" viewBox="0 0 520 520">
                    <path d="M449 20H71a51 51 0 0 0-51 51v377c0 29 23 52 51 52h377c28 0 51-23 51-51V71a50 50 0 0 0-50-51zM157 397c0 9-8 17-17 17h-17c-9 0-17-8-17-17v-94c0-9 8-17 17-17h17c9 0 17 8 17 17zm86 0c0 9-8 17-17 17h-17c-9 0-17-8-17-17V174c0-9 8-17 17-17h17c9 0 17 8 17 17zm86 0c0 9-8 17-17 17h-17c-9 0-17-8-17-17V123c0-9 8-17 17-17h17c9 0 17 8 17 17zm85 0c0 9-8 17-17 17h-17c-9 0-17-8-17-17V234c0-9 8-17 17-17h17c9 0 17 8 17 17z"/>
                </svg>
                Class: Introduction to Programming
                <svg width="20" height="20" class="ml-2 text-black-400" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                    </path>
                </svg>
            </button>
           
        </div>

        <div class="flex flex-col items-center w-full space-y-4 md:space-x-4 md:space-y-0 md:flex-row">
            <div class="w-full md:w-2/3">
                <div class="relative w-full h-80 overflow-hidden bg-white shadow-lg dark:bg-gray-700">
                    <a href="#" class="block w-full h-full">
                        <div class="flex items-center justify-between px-4 py-6 space-x-4">
                            <div class="flex items-center">
                                <span class="relative p-5 bg-yellow-100 rounded-full">
                                    <svg width="40" fill="currentColor" height="40" class="absolute h-5 text-yellow-500 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" viewBox="0 0 520 520" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 455a40 40 0 0 0 40 40h424c9 0 16-7 16-16v-28c0-9-7-16-16-16H95c-8 0-15-7-15-15V41c0-9-7-16-16-16H36c-9 0-16 7-16 16v414zm477-314a30 30 0 0 0-30-30c-9 0-16 4-22 9l-86 86-59-56-1-1-2-2-2-1-3-2-2-1-4-1-2-1-6-1-6 1-2 1-4 1-2 1-3 2-2 2-3 2-114 115a30 30 0 0 0-10 22 30 30 0 0 0 30 30c7 0 14-3 19-7l98-97 57 56 3 2 2 2 3 2 2 1 4 1 2 1 6 1 6-1h2l4-1 2-1 3-2 2-1 1-1 1-1 1-1 108-107c5-6 9-13 9-22z"/>
                                    </svg>
                                </span>
                                <p class="ml-2 text-sm font-semibold text-gray-700 border-b border-gray-200 dark:text-white">
                                    Introduction to Programming class Attendance between 25th Jan 2024 and 5th Feb 2024
                                </p>
                            </div>
                        </div>
                        <div class="w-full bg-gray-100">
                            <div class="w-5/5 h-full text-xs text-center text-white">
                                <!-- Legend Indicator -->
                                <div class="flex justify-center sm:justify-end items-center gap-x-4 mb-3 sm:mb-6">
                                    <div class="inline-flex items-center">
                                    <span class="w-2.5 h-2.5 inline-block bg-blue-600 rounded-sm me-2"></span>
                                    <span class="text-sm text-gray-600 dark:text-neutral-400">
                                        Classes Available Per Week
                                    </span>
                                    </div>
                                    <div class="inline-flex items-center">
                                    <span class="w-2.5 h-2.5 inline-block bg-purple-600 rounded-sm me-2"></span>
                                    <span class="text-sm text-gray-600 dark:text-neutral-400">
                                        Classes Attended Per Week
                                    </span>
                                    </div>
                                </div>
                                <!-- End Legend Indicator -->
                                <div id="line-graph-charts"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex items-center w-full space-x-4 h-80 md:w-1/3">
                <div class="relative w-full px-4 py-6 bg-white shadow-lg  h-full dark:bg-gray-700">
                    <p class="text-xl font-bold text-black dark:text-white">Course Details</p>
                    <p> Lecturer:
                        <span class="text-sm text-gray-400 dark:text-neutral-400">Dr. Iwona Dolinska</span>
                    </p>
                    <p> Title:
                        <span class="text-sm text-gray-400 dark:text-neutral-400">Introduction to Programming</span>
                    </p>
                    <p> ID:
                        <span class="text-sm text-gray-400 dark:text-neutral-400">CSE123-2023/2024</span>
                    </p>
                    <p> Students:
                        <span class="text-sm text-gray-400 dark:text-neutral-400">37</span>
                    </p>
                    <p> Duration:
                        <span class="text-sm text-gray-400 dark:text-neutral-400">20 Classes</span>
                    </p>
                    <p>Start Date:
                        <span class="text-sm text-gray-400 dark:text-neutral-400">23th Oct 2023</span>
                    </p>
                    <p>End Date:
                        <span class="text-sm text-gray-400 dark:text-neutral-400">20th Feb 2024</span>
                    </p>

                    <div class="flex items-end text-md">
                        Mid-Term Exam Date:
                        <span class="flex items-center text-sm pl-2 text-gray-400 dark:text-neutral-400">
                            7th Dec 2023
                            <svg xmlns="http://www.w3.org/2000/svg" class="pl-2" height="20" width="20" viewBox="0 0 520 520" fill="currentColor">
                                <path d="m95 334 89 89c4 4 10 4 14 0l222-223c4-4 4-10 0-14l-88-88a10 10 0 0 0-14 0L95 321c-4 4-4 10 0 13zM361 57a10 10 0 0 0 0 14l88 88c4 4 10 4 14 0l25-25a38 38 0 0 0 0-55l-47-47a40 40 0 0 0-57 0zM21 482c-2 10 7 19 17 17l109-26c4-1 7-3 9-5l2-2c2-2 3-9-1-13l-90-90c-4-4-11-3-13-1l-2 2a20 20 0 0 0-5 9z"/>
                            </svg>
                        </span>
                    </div>

                        <div class="flex items-end text-md">
                            Final Exam Date:
                            <span class="flex items-center text-sm pl-2 text-gray-400 dark:text-neutral-400">
                                20th Feb 2024
                                <svg xmlns="http://www.w3.org/2000/svg" class="pl-2" height="20" width="20" viewBox="0 0 520 520" fill="currentColor">
                                    <path d="m95 334 89 89c4 4 10 4 14 0l222-223c4-4 4-10 0-14l-88-88a10 10 0 0 0-14 0L95 321c-4 4-4 10 0 13zM361 57a10 10 0 0 0 0 14l88 88c4 4 10 4 14 0l25-25a38 38 0 0 0 0-55l-47-47a40 40 0 0 0-57 0zM21 482c-2 10 7 19 17 17l109-26c4-1 7-3 9-5l2-2c2-2 3-9-1-13l-90-90c-4-4-11-3-13-1l-2 2a20 20 0 0 0-5 9z"/>
                                </svg>
                            </span>
                        </div>
                    
                    <span class="absolute p-4 bg-green-500 rounded-full top-2 right-4">
                        <svg width="40" fill="currentColor" height="40" class="absolute h-4 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" viewBox="0 0 520 520" xmlns="http://www.w3.org/2000/svg">
                            <path d="M80 105c0-8-7-15-15-15H35c-8 0-15 7-15 15v30c0 8 7 15 15 15h30c8 0 15-7 15-15zm420 0c0-8-7-15-15-15H135c-8 0-15 7-15 15v30c0 8 7 15 15 15h350c8 0 15-7 15-15zM80 245c0-8-7-15-15-15H35c-8 0-15 7-15 15v30c0 8 7 15 15 15h30c8 0 15-7 15-15zm380 0c0-8-7-15-15-15H135c-8 0-15 7-15 15v30c0 8 7 15 15 15h310c8 0 15-7 15-15zM80 385c0-8-7-15-15-15H35c-8 0-15 7-15 15v30c0 8 7 15 15 15h30c8 0 15-7 15-15zm420 0c0-8-7-15-15-15H135c-8 0-15 7-15 15v30c0 8 7 15 15 15h350c8 0 15-7 15-15z"/>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 my-4 md:grid-cols-2 lg:grid-cols-3">
            <div class="w-full">
                <div class="relative w-full px-4 py-6 bg-white shadow-lg dark:bg-gray-700">
                    <p class="text-sm font-semibold text-gray-700 border-b border-gray-200 w-max dark:text-white">
                        Last Conversation
                    </p>
                    <div class="flex items-end my-6 space-x-2">
                        <p class="text-xl font-bold text-black dark:text-white">
                            Excuse me Sir, My grades on your.... 
                        </p>
                    </div>
                    <div class="dark:text-white">
                        <div class="flex items-center justify-between pb-2 mb-2 text-sm border-b border-gray-200 sm:space-x-12">
                            <p>
                                Sent To:
                            </p>
                            <div class="flex items-end text-xs">
                                Dr. Jan Kowalski
                            </div>
                        </div>
                        <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                            <p>
                                Sent At:
                            </p>
                            <div class="flex items-end text-xs">
                                13:45 12/Jan/2024
                            </div>
                        </div>
                        <div class="flex items-center justify-between space-x-12 text-sm md:space-x-24">
                            <p>
                                Status:
                            </p>
                            <div class="flex items-end text-xs text-green-500">
                                Read
                                <span class="flex items-center">
                                    <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 520 520" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M191 425 26 259c-6-6-6-16 0-22l22-22c6-6 16-6 22 0l124 125a10 10 0 0 0 15 0L452 95c6-6 16-6 22 0l22 22c6 6 6 16 0 22L213 425c-6 7-16 7-22 0z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="relative w-full px-4 py-6 bg-white shadow-lg dark:bg-gray-700">
                    <p class="text-sm font-semibold text-gray-700 border-b border-gray-200 w-max dark:text-white">
                        Last Class Attended
                    </p>
                    <div class="flex items-end my-6 space-x-2">
                        <p class="text-xl font-bold text-black dark:text-white">
                            Introduction To Programming
                        </p>
                    </div>
                    <div class="dark:text-white">
                        <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                            <p>
                               Signed In On:
                            </p>
                            <div class="flex items-end text-xs">
                                13:45 12/Jan/2024
                            </div>
                        </div>
                        <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                            <p>
                                Started On:
                            </p>
                            <div class="flex items-end text-xs">
                                13:30 12/Jan/2024
                            </div>
                        </div>
                        <div class="flex items-center justify-between space-x-12 text-sm md:space-x-24">
                            <p>
                                Ended On:
                            </p>
                            <div class="flex items-end text-xs">
                                15:30 12/Jan/2024
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="relative w-full px-4 py-6 bg-white shadow-lg dark:bg-gray-700">
                    <p class="text-sm font-semibold text-gray-700 border-b border-gray-200 w-max dark:text-white">
                        Last Assignment Submitted
                    </p>
                    <div class="flex items-end my-6 space-x-2">
                        <p class="text-xl font-bold text-black dark:text-white">
                            Coming Soon!
                        </p>
                    </div>
                    <div class="dark:text-white">
                        <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                            <p>
                                Sent To:
                            </p>
                            <div class="flex items-end text-xs">
                                Coming Soon!
                            </div>
                        </div>
                        <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                            <p>
                                Sent At:
                            </p>
                            <div class="flex items-end text-xs">
                                Coming Soon!
                            </div>
                        </div>
                        <div class="flex items-center justify-between space-x-12 text-sm md:space-x-24">
                            <p>
                                Status:
                            </p>
                            <div class="flex items-end text-xs text-green-500">
                                Coming Soon!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>