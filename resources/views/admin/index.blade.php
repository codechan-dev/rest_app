<x-guest-layout>
    <div class="container flex center ">

        <h1 class="text-green-600 px-2 py-2  bg-gray-600 mx-auto ">hello world</h1>
        @if (Route::has('login'))
        <div class=" text-white-600 overflow fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <li>
                <h1 class="text-white">demo bahai ya e haollo thing done by mne</h1>
            </li>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>


</x-guest-layout>