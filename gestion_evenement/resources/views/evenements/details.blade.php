@extends('layouts.template')
@section('mon_contenu')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 text-center text-sky-700">Evènement N°:
                        {{ $evenement->id }}</h1>
                </div>
            </header>

            <div class="mt-6 grid grid-cols-1">
                <div class="flex m-8">
                    <!-- Image à gauche -->
                    <div
                        class="aspect-h-1 aspect-w-1 w-1/3 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="{{ asset('images/' . $evenement->image) }}" alt="Image de couverture de l'évènement."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>

                    <!-- Contenu à droite -->
                    <div class="ml-4 w-2/3 py-3">
                        <h3 class="text-sm text-gray-700">
                            {{-- <a href="#"> --}}
                            <span aria-hidden="true" class="  py-3 absolute inset-0"></span>
                            Titre de l'évènement: {{ $evenement->libelle }}
                            {{-- </a> --}}
                        </h3>
                        <div class="py-1 mt-1 text-sm text-gray-500">Description de l'évènement:
                            {{ $evenement->description }}</div>
                        <div class=" py-1 text-sm font-medium text-gray-900">A la date: {{ $evenement->date_evenement }}
                        </div>
                        <div class="py-1 text-sm font-medium text-gray-900">Statut: {{ $evenement->statut }} </div>
                        <div class="py-1 text-sm font-medium text-gray-900">Date limite des réservations:
                            {{ $evenement->date_limite }} </div>

                        <div class="block py-6 mt-8 ">
                            <a href="{{ '/evenement/editer/' . $evenement->id }}" class="text-xl text-white p-4 bg-sky-700 ">
                                Modifier
                            </a>
                            <a href={{ "/evenement/$evenement->id/supprimer" }}
                                class="text-xl m-3 text-white p-4 bg-red-600">
                                Supprimer
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @if (Auth::guard('web'))
        <div class="flex items-center justify-center h-screen">
            <form class=" max-w-screen-md mx-auto border-solid border-2 rounded-mdpx-7 shadow-lg my-8"
                action="/reservation/ajouter" method="POST" novalidate>
                @csrf
                <header class="bg-white shadow">
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 text-center text-sky-700">
                            Faire une réservation
                        </h1>
                    </div>
                </header>
                <div class=" space-x-8 border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900 text-center pt-2.5">Saisir les informations
                        requises </h2>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-8">
                        <div class="sm:col-span-8">
                            {{-- <label for="reference" class="block text-sm font-medium leading-6 text-gray-900">Référence de la réservation </label>
                  <div class="mt-2">
                      <input type="text" name="reference" id="reference" autocomplete="reference" required
                          class="form-input px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      value="{{old('prenom')}}"
                      <span>@error('prenom')
                            {{$message}}
                        @enderror</span>
                  </div> --}}
                            <div class="sm:col-span-4">
                                <label for="nombre_place" class="block text-sm font-medium leading-6 text-gray-900">Nombre
                                    de places</label>
                                <div class="mt-2">
                                    <input id="nombre_place" name="nombre_place" type="number" required
                                        class="form-input px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            {{-- <div class="sm:col-span-3">
                                <label for="date_reservation" class="block text-sm font-medium leading-6 text-gray-900">
                                    Date de réservation </label>
                                <div class="mt-2">
                                    <input type="date" name="date_reservation" id="date_reservation" required
                                        class="form-input px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div> --}}
                            <input type="hidden" name="evenement_id" value="{{ $evenement->id }}">
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-center gap-x-8">
                        <button type="submit"
                            class="rounded-md bg-blue-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Réserver
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endsection
