@extends('layouts.template')
@section('mon_contenu')

<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 text-center text-sky-700">Liste de tous les évenements</h1>
        </div>
    </header>

    <div class="mt-6 grid grid-cols-1">
        @foreach ($evenements as $evenement)
          <div class="flex m-8">
            <!-- Image à gauche -->
            <div class="aspect-h-1 aspect-w-1 w-1/3 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
              <img src="{{ asset('images/' . $evenement->image) }}" alt="Image de couverture de l'évènement." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            
            <!-- Contenu à droite -->
            <div class="ml-4 w-2/3 py-3">
              <h3 class="text-sm text-gray-700">
                  <span aria-hidden="true" class="  py-3 absolute inset-0"></span>
                  Titre de l'évènement: {{ $evenement->libelle }}
              </h3>
              <div class="py-1 text-sm font-medium text-gray-900">Statut: {{ $evenement->statut }} </div>
              <div class="py-1 text-sm font-medium text-gray-900">Date limite des réservations: {{ $evenement->date_limite }} </div>
            
              <div class="block py-6 mt-8 ">
                <a href="/evenement/{{ $evenement->id }}" class="text-xl text-white p-4 bg-sky-700 ">
                Détails 
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      
  </div>
</div>


@endsection