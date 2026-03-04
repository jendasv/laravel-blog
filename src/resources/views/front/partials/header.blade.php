<header class="bg-white shadow-md w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{route('home.index', ['locale' => app()->getLocale()])}}" class="text-xl font-bold text-gray-800">MyBlog</a>
            </div>

            <!-- Hamburger -->
            <div>
                <button id="menu-btn" class="text-gray-700 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar Menu zprava -->
<div id="sidebar" class="fixed top-16 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-40">
    <div class="p-6">
        <button id="close-btn" class="mb-4 text-gray-700 hover:text-gray-900 focus:outline-none">
            ✕ Close
        </button>

        <div class="mb-6 text-sm text-gray-700 flex gap-2">
            <a href="{{ url('cs/') }}" class="hover:text-gray-900">CS</a>
            <span>/</span>
            <a href="{{ url('en/') }}" class="hover:text-gray-900">EN</a>
            <span>/</span>
            <a href="{{ url('de/') }}" class="hover:text-gray-900">DE</a>
        </div>

        <nav class="flex flex-col space-y-4">
            <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">About</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Blog</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Contact</a>
        </nav>
    </div>
</div>

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black opacity-10 hidden z-30"></div>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    function openSidebar() {
        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
    }

    function closeSidebar() {
        sidebar.classList.add('translate-x-full');
        overlay.classList.add('hidden');
    }

    menuBtn.addEventListener('click', openSidebar);
    closeBtn.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);
</script>
