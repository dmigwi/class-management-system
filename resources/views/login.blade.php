@extends("layouts.base")

@section("title", "Connect")

@section("content")
<div class="m-auto space-y-8 md:w-6/12 lg:w-4/12 xl:w-4/12 bg-gradient-to-tr">
    <div class="rounded-3xl border border-gray-100 bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 backdrop-blur-2xl">
        <div class="p-8 py-12 sm:p-16">
        <div class="relative flex items-center justify-center">
            <h2 class="mb-4 text-2xl font-bold text-gray-800 dark:text-white">Sign into your account</h2>
        </div>
        <form action="" class="space-y-8">
            <div class="space-y-2">
            <label for="id" class="text-gray-600 dark:text-gray-300">Staff/Student ID:</label>
            <input class="focus:outline-none block w-full rounded-md border border-gray-200 dark:border-gray-600 bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 focus:ring-cyan-300"
                type="id" name="id" id="id" autocomplete="id" required/>
            </div>

            <div>
            <div class="flex items-center justify-between">
                <label for="pwd" class="text-gray-600 dark:text-gray-300">Password:</label>
                <button class="-mr-2 p-2" type="reset">
                <span class="text-sm text-primary">Forgot your password?</span>
                </button>
            </div>
            <input class="focus:outline-none block w-full rounded-md border border-gray-200 dark:border-gray-600 bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 focus:ring-cyan-300"
            type="password" name="pwd" id="pwd" autocomplete="current-password" required/>
            </div>
            <div class="relative flex items-center justify-center">
            <button type="submit" class="relative flex h-11 w-96 items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                <span class="relative text-base font-semibold text-white dark:text-dark">Connect</span>
            </button>
            </div>

            <p class="border-t border-gray-100 dark:border-gray-700 pt-6 text-sm text-gray-500 dark:text-gray-400">
            Don't have an account ?
            <a href="#" class="text-primary">Request an account</a>
            </p>
        </form>
        </div>
    </div>
    
</div>
<div class="space-x-4 text-center text-cyan-400 pt-6">
    <span>Class Management System</span>
    <span class="text-sm hover:text-primary">&copy;2024</span>
    <a href="/contacts" class="text-sm hover:">Contact</a>
    <a href="/privacy" class="text-sm hover:text-primary">Privacy & Terms</a>
</div>
  @endsection