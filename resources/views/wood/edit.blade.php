<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('EDIT') }}
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
                <div class="p-6 text-gray-900 flex justify-center">
                    <form action="{{ route('wood.update',$wood->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $wood->name }}" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="type" :value="__('Type')" />
                        <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" value="{{ $wood->type }}" required autofocus autocomplete="type" />
                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="price" :value="__('Price')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{ $wood->price }}" required autofocus autocomplete="price" />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="quantity" :value="__('Quantity')" />
                        <x-text-input id="quantity" class="block mt-1 w-full" type="number" name="quantity" value="{{ $wood->quantity }}" required autofocus autocomplete="quantity" />
                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                    </div>
                    <x-primary-button class="mt-3">
                        Update Wood
                    </x-primary-button>
                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
