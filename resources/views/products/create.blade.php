<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un produit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('products.store') }}" class="space-y-4">
                        @csrf

                        <div>
                            <label for="name" class="block font-medium text-sm text-gray-700">Nom</label>
                            <input type="text" name="name" id="name"
                                   value="{{ old('name') }}"
                                   class="border-gray-300 rounded-md shadow-sm w-full">
                            @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="price" class="block font-medium text-sm text-gray-700">Prix</label>
                            <input type="number" step="0.01" name="price" id="price"
                                   value="{{ old('price') }}"
                                   class="border-gray-300 rounded-md shadow-sm w-full">
                            @error('price') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" name="is_public" id="is_public" value="1"
                                   class="border-gray-300 rounded"
                                   {{ old('is_public') ? 'checked' : '' }}>
                            <label for="is_public" class="ms-2 text-sm text-gray-700">
                                Produit public ?
                            </label>
                        </div>

                        <div>
                            <button type="submit"
                                    class="px-4 py-2 bg-gray-500 text-white rounded-md">
                                Créer
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
