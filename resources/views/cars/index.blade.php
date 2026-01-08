@extends('layouts.main')

@section('title', 'Browse Cars')

@section('content')
    <!-- Page Header -->
    <div class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Browse Our Cars</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                Explore our wide selection of quality vehicles
            </p>
        </div>
    </div>

    <!-- Filters Section -->
    <div class="bg-gray-50 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-wrap gap-4">
                <select class="rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white text-sm focus:ring-blue-500 focus:border-blue-500">
                    <option>All Makes</option>
                    <option>Toyota</option>
                    <option>Honda</option>
                    <option>Ford</option>
                    <option>BMW</option>
                </select>
                <select class="rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white text-sm focus:ring-blue-500 focus:border-blue-500">
                    <option>All Types</option>
                    <option>Sedan</option>
                    <option>SUV</option>
                    <option>Truck</option>
                    <option>Coupe</option>
                </select>
                <select class="rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white text-sm focus:ring-blue-500 focus:border-blue-500">
                    <option>Price Range</option>
                    <option>Under $20,000</option>
                    <option>$20,000 - $30,000</option>
                    <option>$30,000 - $50,000</option>
                    <option>Over $50,000</option>
                </select>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                    Apply Filters
                </button>
            </div>
        </div>
    </div>

    <!-- Cars Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Car Card 1 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white opacity-50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">2023 Toyota Camry</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Sedan • Automatic • 15K miles</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">$28,500</span>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            <!-- Car Card 2 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white opacity-50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">2022 Honda CR-V</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">SUV • Automatic • 22K miles</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">$32,900</span>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            <!-- Car Card 3 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white opacity-50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">2023 Ford F-150</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Truck • Automatic • 8K miles</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">$45,000</span>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            <!-- Car Card 4 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white opacity-50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">2021 BMW 3 Series</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Sedan • Automatic • 35K miles</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">$38,500</span>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            <!-- Car Card 5 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white opacity-50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">2023 Mazda CX-5</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">SUV • Automatic • 12K miles</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">$31,800</span>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            <!-- Car Card 6 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 bg-gradient-to-br from-indigo-400 to-indigo-600 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white opacity-50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">2022 Chevrolet Silverado</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Truck • Automatic • 28K miles</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">$42,900</span>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <nav class="inline-flex rounded-md shadow-sm">
                <button class="px-3 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                    Previous
                </button>
                <button class="px-4 py-2 border-t border-b border-gray-300 dark:border-gray-600 bg-blue-600 text-sm font-medium text-white">
                    1
                </button>
                <button class="px-4 py-2 border-t border-b border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                    2
                </button>
                <button class="px-4 py-2 border-t border-b border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                    3
                </button>
                <button class="px-3 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                    Next
                </button>
            </nav>
        </div>
    </div>
@endsection
