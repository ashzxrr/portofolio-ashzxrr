@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
<div class="text-center mb-10">
    <h1 class="text-4xl font-bold text-indigo-700 mb-2">🚀 My Projects</h1>
    <p class="text-gray-600 text-lg">Here are some of the cool things I’ve built recently.</p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    {{-- Project Card --}}
    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition p-6">
        <h2 class="text-xl font-bold text-indigo-700 mb-2">SPP Payment System (Native PHP)</h2>
        <p class="text-gray-600 text-sm mb-3">A school tuition (SPP) payment system built with native PHP, designed to manage student data and handle monthly tuition payment tracking and reporting.</p>
        <div class="flex flex-wrap gap-2 text-sm mb-3">
            <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full">Native PHP</span>
            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">MySQL</span>
            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Bootstrap</span>
        </div>
        <a href="https://github.com/ashzxrr/pembayaran_spp" target="_blank" class="text-indigo-600 hover:underline text-sm">🔗 View on GitHub</a>
    </div>

    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition p-6">
        <h2 class="text-xl font-bold text-indigo-700 mb-2">To-Do List App</h2>
        <p class="text-gray-600 text-sm mb-3">A minimal task management app using Laravel and Vue.js.</p>
        <div class="flex flex-wrap gap-2 text-sm mb-3">
            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Laravel</span>
            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full">Vue.js</span>
            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Tailwind</span>
        </div>
        <a href="https://github.com/ashzxrr/todo-app" target="_blank" class="text-indigo-600 hover:underline text-sm">🔗 View on GitHub</a>
    </div>

    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition p-6">
        <h2 class="text-xl font-bold text-indigo-700 mb-2">Store System</h2>
        <p class="text-gray-600 text-sm mb-3">A Laravel-based warehouse management system built for testing RESTful API authentication and CRUD operations for items and inventory.</p>
        <div class="flex flex-wrap gap-2 text-sm mb-3">
            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Laravel</span>
            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Mysql</span>

        </div>
        <a href="https://github.com/ashzxrr/sistem-gudang" target="_blank" class="text-indigo-600 hover:underline text-sm">🔗 View on GitHub</a>
    </div>

    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition p-6">
        <h2 class="text-xl font-bold text-indigo-700 mb-2">Pondok Pesantren Information System</h2>
        <p class="text-gray-600 text-sm mb-3">A web-based information system built with native PHP to manage student, teacher, schedule, and financial data in a Pondok Pesantren.</p>
        <div class="flex flex-wrap gap-2 text-sm mb-3">
            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Native PHP</span>
            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">MySQL</span>
            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Bootstrap</span>
        </div>
        <a href="https://github.com/ashzxrr/store-si_ponpes" target="_blank" class="text-indigo-600 hover:underline text-sm">🔗 View on GitHub</a>
    </div>

    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition p-6">
        <h2 class="text-xl font-bold text-indigo-700 mb-2">Apple Market – Simple Online Shop(CI4 Project)</h2>
        <p class="text-gray-600 text-sm mb-3">A college project built with CodeIgniter 4, this is an online store website focused on selling Apple products, featuring basic product listings, cart functionality, and order processing.</p>
    
         <div class="flex flex-wrap gap-2 text-sm mb-3">
            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Native PHP</span>
            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">MySQL</span>
            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Bootstrap</span>
        </div>
        <a href="https://github.com/ashzxrr/store-apple-market" target="_blank" class="text-indigo-600 hover:underline text-sm">🔗 View on GitHub</a>
    </div>

    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition p-6">
        <h2 class="text-xl font-bold text-indigo-700 mb-2">Laravel Portfolio Website</h2>
        <p class="text-gray-600 text-sm mb-3">A personal portfolio website built with Laravel to showcase projects, skills, and contact information in a clean and responsive design.</p>
    
         <div class="flex flex-wrap gap-2 text-sm mb-3">
            <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full">Laravel</span>
            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">Tailwind</span>
            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Vue.js</span>
        </div>
        <a href="https://github.com/ashzxrr/portofolio-ashzxrr" target="_blank" class="text-indigo-600 hover:underline text-sm">🔗 View on GitHub</a>
    </div>
</div>

<div class="text-center mt-10">
    <a href="/" class="text-indigo-600 hover:underline text-lg">← Back to Home</a>
</div>
@endsection
