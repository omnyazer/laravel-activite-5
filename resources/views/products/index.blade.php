<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des produits') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('products.create') }}" class="text-blue-600 underline">
                        Créer un produit
                    </a>

                    <ul class="mt-4 space-y-2">
                        @foreach ($products as $product)
                            <li class="border-b pb-2">
                                <strong>{{ $product->name }}</strong>
                                — {{ $product->price }} €
                                — {{ $product->is_public ? 'Public' : 'Privé' }}
                                <br />
                                <a href="{{ route('products.show', $product) }}" class="ml-2 text-blue-600 underline">
                                    Voir
                                </a>
                                <br />
                                {{-- Modifier --}}
                                <a href="{{ route('products.edit', $product) }}" class="ml-2 text-green-600 underline">
                                    Modifier
                                </a>

                                {{-- Supprimer --}}
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-2 text-red-600 underline"
                                        onclick="return confirm('Supprimer ce produit ?')">
                                        Supprimer
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>