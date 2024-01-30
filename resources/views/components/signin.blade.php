@php
    $isConfirmPassword = $attributes->has('confirm');
@endphp

<div class="m-auto space-y-8 md:w-6/12 lg:w-4/12 xl:w-4/12 bg-gradient-to-tr">
    <div
        class="rounded-3xl border border-gray-100 bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 backdrop-blur-2xl">
        <div class="p-8 sm:p-12">
            <div class="relative flex items-center justify-center">
                @if ($isConfirmPassword)
                    <h2 class="mb-4 text-2xl font-bold text-gray-800 dark:text-white">Set a new account password</h2> 
                @else
                    <h2 class="mb-4 text-2xl font-bold text-gray-800 dark:text-white">Sign into your account</h2>
                @endif
            </div>
            <form action="" class="space-y-8">
                @if (!$isConfirmPassword)
                    <div class="space-y-2">
                        <label for="id" class="text-gray-600 dark:text-gray-300">Staff/Student ID:</label>
                        <input
                            class="focus:outline-none block w-full rounded-md border border-gray-200 dark:border-gray-600 bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 focus:ring-cyan-300"
                            type="id" name="id" id="id" autocomplete="id" required />
                    </div>
                @endif

                <div>
                    <div class="flex items-center justify-between">
                        <label for="pwd" class="text-gray-600 dark:text-gray-300">Password:</label>
                        @if (!$isConfirmPassword)
                            <a class="-mr-2 p-2">
                                <span class="text-sm text-blue-500">Forgot your password?</span>
                            </a>
                        @endif
                    </div>
                    <input
                        class="focus:outline-none block w-full rounded-md border border-gray-200 dark:border-gray-600 bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 focus:ring-cyan-300"
                        type="password" name="pwd" id="pwd" autocomplete="current-password" required />
                </div>

                @if ($isConfirmPassword)
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="pwd" class="text-gray-600 dark:text-gray-300">Confirm Password:</label>
                            <a class="-mr-2 p-2 ">
                                <span id="incorrect-pass" class="text-sm text-red-500"></span>
                            </a>
                        </div>
                        <input
                            class="focus:outline-none block w-full rounded-md border border-gray-200 dark:border-gray-600 bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 focus:ring-cyan-300"
                            type="password" name="confirm_pwd" id="confirm_pwd" required />
                    </div>
                @endif
                
                <div class="relative flex items-center justify-center">
                    <button type="submit"
                        class="btn overflow-hidden relative w-64 bg-blue-500 text-white py-4 px-4 rounded-xl font-bold uppercase -- before:block before:absolute before:h-full before:w-1/2 before:rounded-full before:bg-orange-400 before:top-0 before:left-1/4 before:transition-transform before:opacity-0 before:hover:opacity-100 hover:text-orange-200 hover:before:animate-ping transition-all duration-300">
                        @if ($isConfirmPassword)
                            <span class="relative text-base font-semibold text-white dark:text-dark">Set Password</span>
                        @else
                            <span class="relative text-base font-semibold text-white dark:text-dark">Connect</span>
                        @endif
                    </button>
                </div>

                @if (!$isConfirmPassword)
                    <p class="border-t border-gray-100 dark:border-gray-700 pt-6 text-sm text-gray-500 dark:text-gray-400">
                        Don't have an account ? <a href="#" class="text-blue-500">Request an account</a>
                    </p>
                @endif
            </form>
        </div>
    </div>
</div>