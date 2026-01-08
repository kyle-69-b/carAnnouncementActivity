@extends('layouts.main')

@section('title', 'Welcome to CarShop')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 dark:from-blue-800 dark:to-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">
                    <span class="block">Find Your Perfect</span>
                    <span class="block text-blue-200">Dream Car Today</span>
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-blue-100">
                    Browse our extensive collection of quality vehicles. From sedans to SUVs, find the perfect ride that fits your lifestyle and budget.
                </p>
                <div class="mt-10 flex justify-center gap-4">
                    <a href="{{ route('cars.index') }}" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition-colors duration-200">
                        Browse Cars
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="{{ route('customers.index') }}" class="inline-flex items-center px-8 py-3 border-2 border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-blue-700 transition-colors duration-200">
                        Customer Portal
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                    Why Choose CarShop?
                </h2>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    We make car buying simple, transparent, and enjoyable.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Feature 1 -->
                <div class="text-center">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 mx-auto">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-lg font-medium text-gray-900 dark:text-white">Quality Assured</h3>
                    <p class="mt-2 text-base text-gray-600 dark:text-gray-400">
                        Every vehicle is thoroughly inspected and certified before sale.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 mx-auto">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-lg font-medium text-gray-900 dark:text-white">Best Prices</h3>
                    <p class="mt-2 text-base text-gray-600 dark:text-gray-400">
                        Competitive pricing with flexible financing options available.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 mx-auto">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-lg font-medium text-gray-900 dark:text-white">Expert Team</h3>
                    <p class="mt-2 text-base text-gray-600 dark:text-gray-400">
                        Knowledgeable staff ready to help you find your perfect match.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="text-center">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 mx-auto">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-lg font-medium text-gray-900 dark:text-white">Fast Process</h3>
                    <p class="mt-2 text-base text-gray-600 dark:text-gray-400">
                        Quick approval and drive away in your new car the same day.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-blue-700 dark:bg-blue-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                <div class="text-center">
                    <div class="text-4xl font-bold text-white">500+</div>
                    <div class="mt-2 text-sm text-blue-200">Cars in Stock</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white">10K+</div>
                    <div class="mt-2 text-sm text-blue-200">Happy Customers</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white">15+</div>
                    <div class="mt-2 text-sm text-blue-200">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white">98%</div>
                    <div class="mt-2 text-sm text-blue-200">Satisfaction Rate</div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="bg-blue-600 dark:bg-blue-700 rounded-2xl shadow-xl overflow-hidden">
                <div class="px-6 py-12 sm:px-12 sm:py-16 text-center">
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                        Ready to Find Your Next Car?
                    </h2>
                    <p class="mt-4 text-lg text-blue-100">
                        Start browsing our inventory or get in touch with our team today.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('cars.index') }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50">
                            View Inventory
                        </a>
                        <a href="#" class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-base font-medium rounded-md text-white hover:bg-blue-700">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
