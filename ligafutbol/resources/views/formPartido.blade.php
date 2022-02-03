<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar un Partido') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('guardarEquipo') }}" method="get">
                        
                        <x-label for="equipo1">Equipo de Casa</x-label>
                        <select id="equipo1" name="equipo1">
                            @foreach ($listaEquipos as $equipo)
                            <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                            @endforeach
                        </select>
                        <x-label for="ge1">Goles</x-label>
                        <x-input type="text" name="ge1" id="ge1"></x-input>

                        <br>

                        <x-label for="equipo2">Equipo de fuera</x-label>
                        <select id="equipo2" name="equipo2">
                            @foreach ($listaEquipos as $equipo)
                            <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                            @endforeach
                        </select>
                        <x-label for="ge2">Goles</x-label>
                        <x-input type="text" name="ge2" id="ge2"></x-input>

                        <x-button class="ml-4">Registrar Partido</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>