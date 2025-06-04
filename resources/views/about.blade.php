@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="relative bg-gradient-to-tr from-pink-100 via-purple-100 to-blue-100 rounded-xl p-10 shadow-xl">
    {{-- Dekorasi gelembung kecil --}}
    <div class="absolute top-4 left-4 w-6 h-6 bg-pink-300 rounded-full opacity-60 animate-ping"></div>
    <div class="absolute bottom-4 right-6 w-4 h-4 bg-blue-300 rounded-full opacity-60 animate-ping"></div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center relative z-10">
        {{-- Foto --}}
        <div class="flex justify-center">
            <div class="relative w-64 h-64">
                <img src="{{ asset('images/sho-profile.jpg') }}" alt="Profile Photo"
                     class="rounded-3xl shadow-lg w-full h-full object-cover border-4 border-white transform hover:rotate-3 transition duration-500">
                <span class="absolute -top-4 -left-4 bg-yellow-400 text-white px-3 py-1 text-sm font-bold rounded-full shadow-md">👋 Hello!</span>
            </div>
        </div>

        {{-- Info --}}
        <div>
            <h1 class="text-4xl font-extrabold mb-3 text-indigo-700">Hi there! I'm Ahmad Shohazar ✨</h1>
            <p class="text-gray-700 text-lg mb-4 leading-relaxed">
               I’m a PHP web developer with 1 year of experience specializing in Laravel and CodeIgniter 4. I build fast, secure, and scalable web applications using clean code practices and modern development tools.
            </p>

            <p class="text-gray-700 text-lg mb-4 leading-relaxed">
                Whether it's crafting a smooth user interface or building a powerful backend, I’m always ready to learn and have fun doing it!
            </p>
            <p class="text-gray-700 text-lg mb-4 leading-relaxed">
                I can help you develop or maintain your Laravel/CI4 project with efficient back-end logic, responsive design, and database optimization. Let’s bring your idea to life with reliable and maintainable code!
            </p>

            {{-- Skill badge --}}
            <div class="flex flex-wrap gap-2 mt-4">
                <span class="bg-pink-200 text-pink-800 px-3 py-1 rounded-full text-sm">Laravel</span>
                <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm">Tailwind CSS</span>
                <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-sm">PHP</span>
                <span class="bg-purple-200 text-purple-800 px-3 py-1 rounded-full text-sm">MySQL</span>
            </div>

            <div class="mt-6 space-x-4">
                <a href="/" class="bg-indigo-500 text-white px-5 py-2 rounded-full shadow hover:bg-indigo-600 transition">← Home</a>
                <a href="/projects" class="bg-white border border-indigo-500 text-indigo-600 px-5 py-2 rounded-full shadow hover:bg-indigo-50 transition">My Projects →</a>
            </div>
        </div>
    </div>
</div>
@endsection
