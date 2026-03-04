<!-- Sidebar -->
<aside id="sidebar"
       class="fixed top-0 left-0 h-full bg-white border-r border-gray-200
           w-16 transition-all duration-300 z-50 flex flex-col">

    <!-- Hamburger -->
    <div class="h-16 p-5 border-b border-gray-200">
        <button id="menu-btn"
                class="text-gray-600 hover:text-gray-900 cursor-pointer">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Menu -->
    <nav class="flex-1 p-4 space-y-4 text-gray-700">
        <a href="{{route('admin.dashboard')}}" class="block hover:text-black">
            <span class="menu-text hidden">Dashboard</span>
        </a>
        <a href="{{route('admin.posts.index')}}" class="block hover:text-black">
            <span class="menu-text hidden">Posts</span>
        </a>
        <a href="{{route('admin.users.index')}}" class="block hover:text-black">
            <span class="menu-text hidden">Users</span>
        </a>
        <a href="#" class="block hover:text-black">
            <span class="menu-text hidden">Settings</span>
        </a>
    </nav>

</aside>
