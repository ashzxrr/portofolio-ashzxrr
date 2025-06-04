@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<div class="relative bg-gradient-to-tr from-pink-100 via-purple-100 to-blue-100 rounded-xl p-10 shadow-xl">
    {{-- Dekorasi gelembung --}}
    <div class="absolute top-4 left-4 w-6 h-6 bg-pink-300 rounded-full opacity-60 animate-ping"></div>
    <div class="absolute bottom-4 right-6 w-4 h-4 bg-blue-300 rounded-full opacity-60 animate-ping"></div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center relative z-10">
        {{-- Foto --}}
        <div class="flex justify-center">
            <div class="relative w-64 h-64">
                <img src="{{ asset('images/sho-profile.jpg') }}" alt="Profile Photo"
                     class="rounded-3xl shadow-lg w-full h-full object-cover border-4 border-white transform hover:rotate-3 transition duration-500">
                <span class="absolute -top-4 -left-4 bg-yellow-400 text-white px-3 py-1 text-sm font-bold rounded-full shadow-md">📞 Let's Talk!</span>
            </div>
        </div>

        {{-- Informasi Kontak --}}
        <div>
            <h1 class="text-4xl font-extrabold mb-3 text-indigo-700">Contact Me ☎️</h1>
            <p class="text-gray-700 text-lg mb-4 leading-relaxed">
               Need to chat or collaborate? You can reach out to me through the platforms below:
            </p>

                <ul class="text-lg text-gray-700 space-y-4">
                    <li class="flex items-center space-x-3 group">
                        <span class="text-2xl">📧</span>
                        <span>
                            <strong>Email:</strong>
                            <a href="mailto:ahmadshohazar2911@gmail.com"
                            class="relative text-indigo-600 font-medium transition duration-300 group-hover:text-indigo-800 after:block after:h-0.5 after:bg-indigo-600 after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-left">
                                ahmadshohazar2911@gmail.com
                            </a>
                        </span>
                    </li>
                    <li class="flex items-center space-x-3 group">
                        <span class="text-2xl">📱</span>
                        <span>
                            <strong>WhatsApp:</strong>
                            <a href="https://wa.me/6283854337646" target="_blank"
                            class="relative text-green-600 font-medium transition duration-300 group-hover:text-green-800 after:block after:h-0.5 after:bg-green-600 after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-left">
                                +62 838-5433-7646
                            </a>
                        </span>
                    </li>
                    <li class="flex items-center space-x-3 group">
                        <span class="text-2xl">📷</span>
                        <span>
                            <strong>Instagram:</strong>
                            <a href="https://instagram.com/ashzxrr" target="_blank"
                            class="relative text-pink-600 font-medium transition duration-300 group-hover:text-pink-800 after:block after:h-0.5 after:bg-pink-600 after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-left">
                                @ashzxrr
                            </a>
                        </span>
                    </li>
                    <li class="flex items-center space-x-3 group">
                        <span class="text-2xl">💻</span>
                        <span>
                            <strong>GitHub:</strong>
                            <a href="https://github.com/ashzxrr" target="_blank"
                            class="relative text-gray-800 font-medium transition duration-300 group-hover:text-black after:block after:h-0.5 after:bg-gray-800 after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-left">
                                github.com/ashzxrr
                            </a>
                        </span>
                    </li>
                </ul>



            <div class="mt-6 space-x-4">
                <a href="/" class="bg-indigo-500 text-white px-5 py-2 rounded-full shadow hover:bg-indigo-600 transition">← Home</a>
                <a href="/about" class="bg-white border border-indigo-500 text-indigo-600 px-5 py-2 rounded-full shadow hover:bg-indigo-50 transition">About Me →</a>
            </div>
        </div>
    </div>
</div>
@endsection
