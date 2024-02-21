<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Liste des réservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-6 flex-col">
            <div class="bg-white light:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 light:text-gray-100">
                    <h1 class="text-2xl font-semibold mb-6">Liste des réservations</h1>
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="border-b-2 p-2 light:border-gray-700">Id</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Hotel</th>
                                <th class="border-b-2 p-2 light:border-gray-700">N° chambre</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Nom</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Email</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Téléphone</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Date d'arrivée</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Date de départ</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Nombre de personnes</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Options</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td class="border-b p-2 light:border-gray-700">{{ $reservation->id }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $reservation->room->hotel->name }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $reservation->room->numero }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $reservation->name }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $reservation->email }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $reservation->telephone }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $reservation->start_date }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $reservation->end_date }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $reservation->nb_person }}</td>
                                    <td class="flex flex-row justify-center gap-4 border-b p-2 light:border-gray-700">
                                        <a href="{{ route('reservations.edit', $reservation->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <form action="{{ route('reservations.destroy') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input required type="hidden" value="{{ $reservation->id }}" name="id">
                                            <button type="submit"><i class="fa-solid fa-trash text-red-600"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
