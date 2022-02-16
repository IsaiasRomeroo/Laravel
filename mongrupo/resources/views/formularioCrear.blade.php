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
                      <form enctype="multipart/form-data" action="{{ url('crear') }}" method="post">
                        @csrf
                        <x-label for="nombre">Nombre:</x-label>
                        <x-input type="text" name="nombre" id="nombre"></x-input>
                        <br><br>

                        <x-label for="desc">Descripcion:</x-label>
                        <x-input type="text" name="desc" id="desc"></x-input>
                        <br><br>

                        <x-label for="cant">Cantidad</x-label>
                        <x-input type="text" name="cant" id="cant"></x-input>
                        <br><br>

                        <x-label for="user_id">Selecciona Monitor:</x-label>
                        <select name="user_id">
                            @foreach ($listaMonitores as $monit)
                                <option value="{{ $monit->id }}">{{ $monit->name }}</option>
                            @endforeach
                        </select>
                        <br><br>

                        <x-button class="ml-4">
                            {{ __('Crear grupo') }}
                        </x-button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>