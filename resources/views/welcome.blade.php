<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Expense Splitter - Split Expenses with Friends</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Navigation -->
            <nav class="flex items-center justify-between py-6">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">Expense Splitter</span>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </nav>

            <!-- Hero Section -->
            <div class="py-20">
                <div class="text-center">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                        Split Expenses with Friends
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                        Easily track and split expenses with your friends, roommates, or travel companions. No more awkward conversations about money.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-indigo-700 transition-colors">
                            Get Started
                        </a>
                        <a href="#features" class="bg-white dark:bg-gray-800 text-gray-900 dark:text-white px-8 py-3 rounded-lg text-lg font-semibold border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div id="features" class="py-20">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Track Expenses</h3>
                        <p class="text-gray-600 dark:text-gray-300">Easily add and categorize expenses with your group members.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Automatic Splitting</h3>
                        <p class="text-gray-600 dark:text-gray-300">Let the app automatically calculate who owes what to whom.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
                        <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Payment History</h3>
                        <p class="text-gray-600 dark:text-gray-300">Keep track of all payments and settle up with your friends.</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="py-20 text-center">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Ready to Start Splitting?</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">Join thousands of users who are already using Expense Splitter to manage their shared expenses.</p>
                <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-indigo-700 transition-colors">
                    Create Free Account
                </a>
            </div>
        </div>
    </body>
</html>
