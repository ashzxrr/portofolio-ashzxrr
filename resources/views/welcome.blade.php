<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome - Ahmad Shohazar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-indigo-600 to-blue-400 text-white min-h-screen flex items-center justify-center">

    <div class="text-center px-6">

        <img src="{{ asset('images/sho-profile.jpg') }}" alt="Profile Photo" class="w-32 h-32 rounded-full mx-auto mb-6 shadow-lg">

        <h1 class="text-5xl font-extrabold mb-4">Hi, I'm Ahmad Shohazar</h1>
        <p class="text-xl mb-6 max-w-xl mx-auto">A passionate Web Developer focused on Laravel & Frontend Design. Let's build something great together.</p>
        
        <div class="space-x-4">
            <a href="/about" class="bg-white text-indigo-700 font-semibold px-6 py-2 rounded-full shadow hover:bg-indigo-100 transition">About Me</a>
            <a href="/projects" class="bg-transparent border border-white px-6 py-2 rounded-full hover:bg-white hover:text-indigo-700 transition">View Projects</a>
        </div>
    </div>

</body>
</html>
