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
                          <th class="p-2">Link</th>
                          <th class="p-2">Descripción</th>
                          <th class="p-2">Tipo</th>
                          <th class="p-2">Premio?</th>
                          <th class="p-2">Copiar Link</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="border p-2 border-blue-300">
                        <td><span> {{ route('promocion_desayunos') }} </span></td>
                        <td>Desayuno, se brinda despues de que un cliente ha comprado un desayuno (canje de una vez) </td>
                        <td>7</td>
                        <td>Entrada Gratis</td>
                        <td>Copiar</td>
                      </tr>
                      <tr class="border p-2 border-blue-300">
                        <td><span> {{ route('promocion_panamericana') }} </span></td>
                        <td>Descuento, se brinda el 10% de descuento en su compra (uso ilimitado) </td>
                        <td>6</td>
                        <td>10% de descuento</td>
                        <td>Copiar</td>
                      </tr>
                  </tbody>
              </table>
              
          </div>
          
      </div>
  </div>
</x-app-layout>
