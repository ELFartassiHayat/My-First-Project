<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('reservation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("reservation") }}
                </div>
                 <table class="table  table-striped">
                      <thead>
    <tr>
      <th scope="col">id</th> 
       
      <th scope="col">nom chambre</th>
      <th scope="col">desciption</th>
      <th scope="col">prix</th>
      <th scope="col">etat</th>
      <th scope="col">date de entre</th>
      <th scope="col">date de sortie</th>
    <th scope="col">nombre de personne</th>
    <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

     @foreach ($reservations as $reservation)
        <tr>
        <th scope="row">{{$reservation->id}}</th>
        <td>{{ $reservation->chambre->nom }} </td>
        <td>{{ $reservation->chambre->description }} </td>
        <td>{{ $reservation->chambre->prix }} </td>
        <td>

    @if ($reservation->validate)
<button type="button" class="btn btn-success">valide</button>
    @else
<button type="button" class="btn btn-danger">pas en cors</button>
    @endif



    </td>
        <td>{{ $reservation->date_sortie }} </td>
        <td>{{ $reservation->date_entre }} </td>
        <td>{{ $reservation->nombre_preson }} </td>

         <td><a class="btn btn-danger" href="/ReserVationdelete/{{$reservation->id}}" role="button">delete</a>
</td>

    </tr>
        @endforeach
        <tr>
        <form action="/ReserVationAdd" method="get">
        <th scope="row"></th>
        
        <td>       
            <select id="options" name="chambre_id">
         @foreach ($chambres as $chambre)

            <option value="{{$chambre->id}}">{{$chambre->nom}}</option>
        @endforeach
  

          </select> </td>
        
        <td></td>
        <td></td>
        <td> </td>
        <td><input type="date" name="date_entre"></td>
        <td><input type="date" name="date_sortie"></td>

        <td><input type="number" name="nombre_preson"></td>
        <td><input type="submit" class="btn btn-primary" value="add"></td>
    </form>
    </tr>
  </tbody>

                    </table> 
    
            </div>
        </div>
    </div>
</x-app-layout>
