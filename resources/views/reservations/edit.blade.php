<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-6 flex-col">
            <div class="">
                <form class="flex flex-col"  action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                            <label for="room_id" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">ID Chambre</label>
                            <p class="light:bg-slate-100 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">{{ $reservation->room_id }}</p>
                            <input required value="{{ $reservation->room_id }}" type="hidden" name="room_id" id="room_id">
                        </div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">Nom</label>
                        <input required value="{{ $reservation->name }}" type="string" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">Email</label>
                        <input required value="{{ $reservation->email }}" type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="telephone" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">Numéro de téléphone</label>
                        <input required value="{{ $reservation->telephone }}" type="string" name="telephone" id="telephone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="start_date" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">Date d'arrivée</label>
                        <input required value="{{ $reservation->start_date }}" type="date" name="start_date" id="start_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="end_date" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">Date de départ</label>
                        <input required value="{{ $reservation->end_date }}" type="date" name="end_date" id="end_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="nb_person" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">Nombre de personnes</label>
                        <input required value="{{ $reservation->nb_person }}" type="number" name="nb_person" id="nb_person" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <button type="submit" class="mt-4 light:text-gray-50">Modifier</button>
                    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
