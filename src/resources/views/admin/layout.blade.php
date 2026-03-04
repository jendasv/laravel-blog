@extends('admin.base-admin')

@section('layout')
    @include('admin.partial.menu-dashboard')

    <!-- Main layout -->
    <div class="min-h-screen pl-16 flex flex-col">
        <!-- Top dark bar -->
        <div class="bg-gray-600 text-gray-200 h-10 flex items-center justify-end px-8 text-sm">

            <!-- LOGIN BLOCK (nepřihlášený) -->
{{--            <div id="login-block" class="hidden flex items-center gap-4">--}}
{{--                <a href="#" class="hover:text-white transition-colors">Login</a>--}}
{{--                <a href="#" class="hover:text-white transition-colors">Register</a>--}}
{{--            </div>--}}

            <!-- USER BLOCK (přihlášený) -->
            <div id="user-block" class="flex items-center gap-4">

                <!-- Profile -->
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12 12c2.761 0 5-2.239 5-5S14.761 2 12 2 7 4.239 7 7s2.239 5 5 5zm0 2c-3.866 0-7 3.134-7 7a1 1 0 001 1h12a1 1 0 001-1c0-3.866-3.134-7-7-7z"/>
                        </svg>
                    </div>
                    <span class="text-gray-100">{{auth()->user()->name .' '. auth()->user()->second_name}}</span>
                </div>

                <!-- Logout -->
                {{--<a href="#" class="hover:text-white transition-colors">
                    Logout
                </a>--}}
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="hover:text-white transition-colors">
                        Logout
                    </button>
                </form>

            </div>

        </div>
        <header class="h-16 bg-white border-b border-gray-200 flex items-center px-8">
            <h1 class="text-xl font-semibold text-gray-800">@yield('header', 'Admin Panel')</h1>
        </header>

        <main class="flex-1 p-8 bg-gray-50">
            <x-alerts />
            @yield('content')
        </main>

        <footer class="h-12 bg-white border-t border-gray-200 flex items-center justify-center text-sm text-gray-500">
            © 2026 MyBlog Admin
        </footer>

    </div>
    <script>
        const sidebar = document.getElementById('sidebar');
        const btn = document.getElementById('menu-btn');
        const texts = document.querySelectorAll('.menu-text');

        btn.addEventListener('click', () => {
            sidebar.classList.toggle('w-16');
            sidebar.classList.toggle('w-60');

            texts.forEach(text => {
                text.classList.toggle('hidden');
            });
        });
    </script>
@endsection
