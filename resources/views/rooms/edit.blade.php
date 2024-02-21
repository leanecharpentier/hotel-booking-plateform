<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 ligth:text-gray-200 leading-tight">
            {{ __('Modifier une chambre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-6 flex-col">
            <div class="">
                <form class="flex flex-col"  action="{{ route('rooms.update', $room->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                            <label for="hotel_id" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">ID Chambre</label>
                            <p class="light:bg-slate-100 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">{{ $room->hotel->name }}</p>
                            <input required value="{{ $room->hotel_id }}" type="hidden" name="hotel_id" id="hotel_id">
                        </div>
                    <div class="mb-4">
                        <label for="numero" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">Numéro de chambre</label>
                        <input required value="{{ $room->numero }}" type="number" name="numero" id="numero" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">Prix à la nuit</label>
                        <input required value="{{ $room->price }}" type="number" name="price" id="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="capacity" class="block text-gray-700 light:text-gray-300 text-sm font-bold mb-2">Capacité</label>
                        <input required value="{{ $room->capacity }}" type="number" name="capacity" id="capacity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 light:text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <button type="submit" class="mt-4 light:text-gray-50">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
