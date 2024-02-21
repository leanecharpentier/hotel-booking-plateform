<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 ligth:text-gray-200 leading-tight">
            {{ __('Ajouter une chambre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-6 flex-col">
            <div class="">
                <form class="flex flex-col"  action="{{ route('rooms.store') }}" method="POST">
                    @csrf
                    <label for="hotel_id">Hotel</label>
                    <select name="hotel_id" id="hotel_id">
                        <option value="">-- Choisissez un hotel --</option>
                        @foreach ($hotels as $hotel)
                            <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                        @endforeach
                    </select>
                    <label for="numero">Numéro de chambre</label>
                    <input required name="numero" id="numero" type="number">
                    <label for="price">Prix</label>
                    <input required name="price" id="price" type="number">
                    <label for="capacity">Capacité</label>
                    <input required name="capacity" id="capacity" type="number">
                    <button type="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
