<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clasificacion') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <table class="max-w-7xl whitespace-nowrap">
                    <thead class="text-center font-bold">
                      <tr class="text-center font-bold">
                    <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                    <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider">Puntos</th>
                    <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider">Goles a Favor</th>
                    <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider">Goles en Contra</th>
                   </tr>
                 </thead>
                <tbody class="bg-white">
                  @foreach($listaEquipos as $equipo)
                <tr class="text-center">
                  <td class="px-6 py-4 whitespace-nowrap">{{ $equipo->nombre}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{ $equipo->puntos}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{ $equipo->gf}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{ $equipo->gc}}</td>
                 </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
        </div>
    </div>
</x-app-layout>
