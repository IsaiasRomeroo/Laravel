<x-app-layout>  
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un equipo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <form action="{{url('guardarEquipo')}}" method="get">
                    <x-label for="nombre">Nombre del Equipo:</x-label>
                    <x-input type="text" name="nombre" id="nombre"></x-input>
                    <br>

                    <x-label for="puntos">Puntos:</x-label>
                    <x-input type="text" name="puntos" id="puntos"></x-input>
                    <br>

                    <x-label for="gf">Goles a favor:</x-label>
                    <x-input type="text" name="gf" id="gf"></x-input>
                    <br>

                    <x-label for="gc">Goles en contra:</x-label>
                    <x-input type="text" name="gc" id="gc"></x-input>
                    <br>

                    <x-button class=" px6 ml-4">{{__('Registrar')}}</x-button>

                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
