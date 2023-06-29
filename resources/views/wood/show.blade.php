<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Wood id: #{{ $wood->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="m-7">
                    <a href="{{ route('wood.index') }}">
                        <x-primary-button class="flex justify-center">
                            Back to Woods
                        </x-primary-button>
                    </a>
                </div>
                <div class="p-6 text-gray-900">
                    <x-card class="ms-64 items-center text-center">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $wood->name }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Size: {{ $wood->size }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Price: {{ $wood->price }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Quantity: {{ $wood->quantity }}</p>
                        <a href="{{ route('wood.edit',$wood->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Edit
                        </a>
                    </x-card>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
