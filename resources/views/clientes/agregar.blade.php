<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12 ">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
              {{-- <x-jet-welcome /> --}}
              <form action="{{ route('cliente.guardar_VIP') }}" method="post">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                  <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="block mt-1 w-full">
                  </div>
                  <div>
                    <label for="dui">Dui</label>
                    <input type="text" name="dui" id="dui" class="block mt-1 w-full">
                  </div>
                  <div>
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="block mt-1 w-full">
                  </div>
                  <div>
                    <label for="descuento">% Descuento</label>
                    <input type="text" name="descuento" id="descuento" class="block mt-1 w-full">
                  </div>
                  <div>
                    <button class="mt-4 p-4 bg-red-500 text-white">Registrar</button> 
                  </div> 
                </div>
              </form>
          </div>
      </div>
  </div>
</x-app-layout>