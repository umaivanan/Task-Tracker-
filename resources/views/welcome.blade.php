@extends('layouts.app')

@section('content')
<main class="min-h-screen bg-gray-100 flex items-center justify-center py-12">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">
                <section class="bg-white shadow-lg rounded-lg">
                    <header class="bg-blue-600 text-white py-6 rounded-t-lg text-center">
                        <h1 class="text-2xl font-bold">{{ __('Welcome to Our Platform') }}</h1>
                    </header>

                    <section class="p-6 space-y-6">
                        @if (Route::has('login'))
                            <div class="flex justify-center space-x-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" 
                                       class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                                        {{ __('Go to Dashboard') }}
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" 
                                       class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                                        {{ __('Login') }}
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" 
                                           class="px-4 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition">
                                            {{ __('Register') }}
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                        <div class="text-center space-y-3">
                            <h2 class="text-xl font-semibold text-gray-800">{{ __('Welcome to Our Platform!') }}</h2>
                            <p class="text-gray-600">{{ __('Here you can manage your account, submit forms, and more.') }}</p>
                        </div>
                    </section>

                    <footer class="bg-gray-100 py-4 rounded-b-lg text-center">
                        <p class="text-gray-600">{{ __('Thank you for visiting!') }}</p>
                    </footer>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
