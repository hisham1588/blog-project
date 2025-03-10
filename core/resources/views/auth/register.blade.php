@extends('auth.layouts.auth')

@section('pageTitle', 'Login')

@section('content')
<div class="flex items-center justify-center h-screen bg-gradient-to-r from-indigo-500 to-purple-500">
    <div class="bg-white p-8 rounded-md shadow-md lg:w-[40%] md:w-[50%] sm:w-[90%] w-[90%]">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="text-3xl font-bold text-center">Sign Up</h1>
            <div class="mt-8">
                <label for="name" class="block text-lg font-semibold">Name</label>
                <input type="text" name="name" id="name" class="block w-full px-4 py-3 mt-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-300" required>
            </div>
            <div class="mt-8">
                <label for="email" class="block text-lg font-semibold">Email</label>
                <input type="email" name="email" id="email" class="block w-full px-4 py-3 mt-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-300" required>
            </div>
            <div class="mt-8">
                <label for="password" class="block text-lg font-semibold">Password</label>
                <input type="password" name="password" id="password" class="block w-full px-4 py-3 mt-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-300" required>
            </div>
            <div class="mt-8">
                <label for="password_confirmation" class="block text-lg font-semibold">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="block w-full px-4 py-3 mt-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-300" required>
            </div>
            <div class="mt-8">
                <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-6 rounded-md">
                    Sign Up
                </button>
            </div>
        </form>

        <div class="text-sm text-gray-700 text-center">
            {{ __('Already registered?') }} <a class="text-indigo-600" href="{{ route('login') }}">Login Here</a>
        </div>

    </div>
</div>
@endsection
