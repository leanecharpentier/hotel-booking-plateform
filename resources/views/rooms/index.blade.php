<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Listes des chambres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-6 flex-col">
            <div class ="flex justify-end">
                <a href="{{ route('rooms.create') }}" class="rounded-lg p-4 bg-white light:bg-gray-800">Ajouter +</a>
            </div>
            <div class="bg-white light:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 light:text-gray-100">
                    <h1 class="text-2xl font-semibold mb-6">Liste des chambres</h1>
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="border-b-2 p-2 light:border-gray-700">Id</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Hotel</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Numéro de chambre</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Prix</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Capacité</th>
                                <th class="border-b-2 p-2 light:border-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($rooms as $room)
                                <tr>
                                    <td class="border-b p-2 light:border-gray-700">{{ $room->id }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $room->hotel_name }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $room->numero }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $room->price }}</td>
                                    <td class="border-b p-2 light:border-gray-700">{{ $room->capacity }}</td>
                                    <td class="flex flex-row justify-center gap-4 border-b p-2 light:border-gray-700">
                                        <a href="{{ route('rooms.edit', $room->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <form action="{{ route('rooms.destroy') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input required type="hidden" value="{{ $room->id }}" name="id">
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
