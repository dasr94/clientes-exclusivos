<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2 overflow-x-auto mb-5">
                {{-- <x-jet-welcome /> --}}
                <table class="table-auto border-collapse border border-blue-100 ">
                    <thead>
                        <tr>
                            <th class="p-2">Nombre</th>
                            <th class="p-2">DUI</th>
                            <th class="p-2">Slug</th>
                            <th class="p-2">Correo</th>
                            <th class="p-2">Caducidad</th>
                            <th class="p-2">Descuento</th>
                            <th class="p-2">Card</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                        <tr>
                            <td class="border p-2 border-blue-300">{{ $cliente->nombre }}</td>
                            <td class="border p-2 border-blue-300">{{ $cliente->dui }}</td>
                            <td class="border p-2 border-blue-300">{{ $cliente->slug }}</td>
                            <td class="border p-2 border-blue-300">{{ $cliente->correo }}</td>
                            <td class="border p-2 border-blue-300">{{ $cliente->caducidad }}</td>
                            <td class="border p-2 border-blue-300">{{ $cliente->descuento }}%</td>
                            <td class="border p-2 border-blue-300"> <a href="{{ route('card', [$cliente->id, $cliente->slug])  }}">Ver</a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2 overflow-x-auto">
                <table class="table-auto border-collapse border border-blue-100">
                    <thead>
                        <tr>
                            <th class="p-2">Total</th>
                            <th class="p-2">Cliente</th>
                            <th class="p-2">Descuento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                        <tr>
                            <td class="border p-2 border-blue-300">{{ $log->total }}</td>
                            <td class="border p-2 border-blue-300">{{ $log->cliente_id }}</td>
                            <td class="border p-2 border-blue-300">{{ $log->descuento }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
