<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Hôtels') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-6 flex-col">
            <div class="">
                <form class="flex flex-col"  action="{{ route('hotels.store') }}" method="POST">
                    @csrf
                    <label for="name">Nom</label>
                    <input required name="name" id="name" type="text">
                    <label for="address">Adresse</label>
                    <input required name="address" id="address" type="text">
                    <label for="stars">Etoiles</label>
                    <input required name="stars" id="stars" type="text">
                    <label for="email">Email</label>
                    <input required name="email" id="email" type="text">
                    <label for="telephone">Téléphone</label>
                    <input required name="telephone" id="telephone" type="text">
                    <button type="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
