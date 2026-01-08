@extends('layouts.main')

@section('title', $customer->first_name . ' ' . $customer->last_name)

@section('content')
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="mb-6">
            <a href="{{ route('customers.index') }}" class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Customers
            </a>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8">
                <div class="flex items-center">
                    <div class="h-20 w-20 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center text-3xl font-bold text-blue-600">
                        {{ substr($customer->first_name, 0, 1) }}{{ substr($customer->last_name, 0, 1) }}
                    </div>
                    <div class="ml-6">
                        <h1 class="text-3xl font-bold text-white">{{ $customer->first_name }} {{ $customer->last_name }}</h1>
                        <p class="mt-1 text-blue-100">Customer ID: #{{ $customer->id }}</p>
                    </div>
                </div>
            </div>

            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Contact Information</h2>
                        <dl class="space-y-3">
                            <div>
                                <dt class="text-sm text-gray-600 dark:text-gray-400">Email</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900 dark:text-white">
                                    <a href="mailto:{{ $customer->email }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                                        {{ $customer->email }}
                                    </a>
                                </dd>
                            </div>
                            <div>
                                <dt class="text-sm text-gray-600 dark:text-gray-400">Phone</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900 dark:text-white">
                                    <a href="tel:{{ $customer->phone }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                                        {{ $customer->phone }}
                                    </a>
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Address</h2>
                        <address class="not-italic text-sm text-gray-700 dark:text-gray-300">
                            @if($customer->address)
                                {{ $customer->address }}<br>
                            @endif
                            @if($customer->city || $customer->state || $customer->zip_code)
                                {{ $customer->city }}{{ $customer->state ? ', ' . $customer->state : '' }} {{ $customer->zip_code }}
                            @else
                                <span class="text-gray-500 dark:text-gray-400">No address provided</span>
                            @endif
                        </address>
                    </div>
                </div>

                @if($customer->notes)
                    <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Notes</h2>
                        <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">{{ $customer->notes }}</p>
                    </div>
                @endif

                <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        <p>Created: {{ $customer->created_at->format('M d, Y \a\t g:i A') }}</p>
                        @if($customer->updated_at != $customer->created_at)
                            <p class="mt-1">Last Updated: {{ $customer->updated_at->format('M d, Y \a\t g:i A') }}</p>
                        @endif
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
                    <a href="{{ route('customers.edit', $customer) }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-md font-medium hover:bg-blue-700">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Edit Customer
                    </a>
                    <form action="{{ route('customers.destroy', $customer) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex items-center px-6 py-3 bg-red-600 text-white rounded-md font-medium hover:bg-red-700">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Delete Customer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
