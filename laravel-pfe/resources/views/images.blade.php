

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('images') }}
        </h2>
    </x-slot>

    <div class="py-12" style="padding: 0;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                 <table class="table  table-striped">
                      <thead>
    <tr>
      <th scope="col">id</th> 
       
      <th scope="col">name</th>
      <th scope="col">
</th>
    </tr>
  </thead>
  <tbody>
        <tr>
        @foreach ($images as $image)
        <th scope="row">{{$image->id}}</th>
        <td>{{ $image->nom }} </td>
         <td><a class="btn btn-danger" href="#" role="button">delete</a>
</td>
    </tr>
        @endforeach
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
    </tr>
  </tbody>

                    </table> 
    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
