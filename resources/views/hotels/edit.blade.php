<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Hôtels') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-6 flex-col">
            <div class="">
                <form class="flex flex-col"  action="{{ route('hotels.update', $hotel->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label for="name">Nom</label>
                    <input required name="name" id="name" type="text" value="{{ $hotel->name }}">
                    <label for="address">Adresse</label>
                    <input required name="address" id="address" type="text" value="{{ $hotel->address }}">
                    <label for="stars">Etoiles</label>
                    <input required name="stars" id="stars" type="number" value="{{ $hotel->stars }}">
                    <label for="email">Email</label>
                    <input required name="email" id="email" type="email" value="{{ $hotel->email }}">
                    <label for="telephone">Téléphone</label>
                    <input required name="telephone" id="telephone" type="tel" value="{{ $hotel->telephone }}">
                    <button type="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
