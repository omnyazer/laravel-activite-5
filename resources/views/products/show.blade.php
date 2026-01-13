<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détail du produit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-2">
                    <p><strong>Nom :</strong> {{ $product->name }}</p>
                    <p><strong>Prix :</strong> {{ $product->price }} €</p>
                    <p><strong>Visibilité :</strong> {{ $product->is_public ? 'Public' : 'Privé' }}</p>
                    <p><strong>Propriétaire :</strong> {{ $product->user->name }}</p>

                    <div class="mt-4">
                            <a href="{{ route('products.edit', $product) }}"
                               class="text-blue-600 underline">
                                Modifier le produit
                            </a>

                        <a href="{{ route('products.index') }}" class="ms-4 text-gray-600 underline">
                            ← Retour à la liste
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
