<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead>
                        <tr><th>Nombre</th><th>Descripcion</th><th>Cantidad</<th><th>Monitor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listaGrupos as $gpr)
                        <tr>
                            <td>{{$gpr->nombre}}</td>
                            <td>{{$gpr->descripcion}}</td>
                            <td>{{$gpr->cantidad}}</td>
                            <td><a href="{{url('borra').'/'.$gpr->id}}">Borrar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

