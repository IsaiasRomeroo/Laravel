<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un Premio') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('crearPremio') }}" method="post">
                        @isset($premio)

                        <form enctype="multipart/form-data" action="{{ url('modificar/'.$premio->id) }}" method="post">
                             @csrf
                            <x-label for="titulo">Título del comic:</x-label>
                            <x-input type="text" name="titulo" id="titulo" value="{{ $premio->comic}}"></x-input>
                            <br>  

                            <x-label for="anio">Año del premio:</x-label>
                            <x-input type="text" name="anio" id="anio" value="{{ $premio->anio}}"></x-input>
                            <br>


                            <x-label for="autor">Autor del comic:</x-label>
                            <x-input type="text" name="autor" id="autor" value="{{ $premio->autor}}"></x-input>
                            <br>

                            <x-button class="ml-4">
                                {{ __('Modificar premio') }}
                            </x-button>                                                    
                        </form>
                    @else
                        <form enctype="multipart/form-data" action="{{ url('crearPremio') }}" method="post">
                            @csrf
                            <x-label for="titulo">Título del comic:</x-label>
                            <x-input type="text" name="titulo" id="titulo"></x-input>
                            <br>                            

                            <x-label for="anio">Año del premio:</x-label>
                            <x-input type="text" name="anio" id="anio"></x-input>
                            <br>


                            <x-label for="autor">Autor del comic:</x-label>
                            <x-input type="text" name="autor" id="autor"></x-input>
                            <br>


                            <x-label for="portada">Portada del comic:</x-label>
                            <x-input type="file" name="portada" id="portada"></x-input>
                            <br>

                            <x-button class="ml-4">
                                {{ __('Modificar premio') }}
                            </x-button>
                        </form>                            
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>