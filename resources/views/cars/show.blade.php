@extends('layouts.main')

@section('title', $car->year . ' ' . $car->make . ' ' . $car->model)

@section('content')
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="mb-6">
            <a href="{{ route('cars.index') }}" class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Cars
            </a>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
            <!-- Image Section -->
            <div class="h-96 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                <svg class="w-48 h-48 text-white opacity-50" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                </svg>
            </div>

            <div class="p-8">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ $car->year }} {{ $car->make }} {{ $car->model }}</h1>
                        <p class="mt-2 text-xl text-gray-600 dark:text-gray-400">{{ $car->type }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="px-3 py-1 text-sm rounded-full
                            {{ $car->status === 'available' ? 'bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-400' : '' }}
                            {{ $car->status === 'sold' ? 'bg-red-100 text-red-800 dark:bg-red-900/20 dark:text-red-400' : '' }}
                            {{ $car->status === 'pending' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/20 dark:text-yellow-400' : '' }}">
                            {{ ucfirst($car->status) }}
                        </span>
                    </div>
                </div>

                <div class="border-t border-gray-200 dark:border-gray-700 pt-6">
                    <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-6">
                        ${{ number_format($car->price, 2) }}
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-8">
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Mileage</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ number_format($car->mileage) }} miles</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Color</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $car->color }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Transmission</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $car->transmission }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Fuel Type</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $car->fuel_type }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Body Type</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $car->type }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Year</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $car->year }}</p>
                        </div>
                    </div>

                    @if($car->description)
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Description</h2>
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">{{ $car->description }}</p>
                        </div>
                    @endif

                    <div class="flex flex-wrap gap-4 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <a href="{{ route('cars.edit', $car) }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-md font-medium hover:bg-blue-700">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit Car
                        </a>
                        <form action="{{ route('cars.destroy', $car) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-6 py-3 bg-red-600 text-white rounded-md font-medium hover:bg-red-700">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Delete Car
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
