@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ route('tasks.index') }}" class="text-sm text-gray-700 underline">Home</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-gray-700 underline">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif