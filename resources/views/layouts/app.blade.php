<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    {{-- Navbar --}}
    <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-700 hover:text-purple-600 transition duration-300 transform hover:scale-105">
                🚀 My Portfolio
            </a>

            {{-- Toggle button (Mobile) --}}
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-700 focus:outline-none focus:text-indigo-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            {{-- Menu Items --}}
            <div id="menu" class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="{{ route('home') }}" class="relative text-gray-700 hover:text-indigo-700 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-indigo-600 hover:after:w-full after:transition-all after:duration-300">Home</a>
                <a href="{{ route('about') }}" class="relative text-gray-700 hover:text-indigo-700 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-indigo-600 hover:after:w-full after:transition-all after:duration-300">About</a>
                <a href="{{ route('projects') }}" class="relative text-gray-700 hover:text-indigo-700 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-indigo-600 hover:after:w-full after:transition-all after:duration-300">Projects</a>
                <a href="{{ route('contact') }}" class="relative text-gray-700 hover:text-indigo-700 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-indigo-600 hover:after:w-full after:transition-all after:duration-300">Contact</a>
            </div>

        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
        <a href="{{ route('home') }}" class="block py-2 nav-link">Home</a>
        <a href="{{ route('about') }}" class="block py-2 nav-link">About</a>
        <a href="{{ route('projects') }}" class="block py-2 nav-link">Projects</a>
        <a href="{{ route('contact') }}" class="block py-2 nav-link">Contact</a>
    </div>
</nav>


    {{-- Halaman Konten --}}
    <main class="px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>
    <footer class="text-center text-gray-500 text-sm py-6">
    &copy; {{ date('Y') }} My Portfolio. Made with ❤️ by Me.
    </footer>
    <script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>
