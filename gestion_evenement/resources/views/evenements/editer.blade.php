@extends('layouts.template')
@section('mon_contenu')
    <div class="flex items-center justify-center h-screen">
        <form class=" max-w-screen-md mx-auto border-solid border-2 rounded-md py-3 px-7 shadow-lg my-8" action="/evenement/{{$evenement->id}}/modifier" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 text-center text-sky-700">Publier un nouvel
                        evenement </h1>
                </div>
            </header>
            <div class=" space-x-8 border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900 text-center pt-2.5">Saisir les informations de
                    votre evenement </h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-8">
                    <div class="sm:col-span-8">
                        <label for="libelle" class="block text-sm font-medium leading-6 text-gray-900">Titre
                            evenement</label>
                        <div class="mt-2">
                            <input type="text" name="libelle" id="libelle" autocomplete="libelle" required value="{{ $evenement->libelle }}"
                                class="form-input px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            {{-- value="{{old('prenom')}}" --}}
                            {{-- <span>@error('prenom')
                                  {{$message}}
                              @enderror</span> --}}
                        </div>


                        <div class="sm:col-span-4">
                            <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Image de
                                couverture</label>
                            <div class="mt-2">
                                <input id="image" name="image" type="file" autocomplete="image" required 
                                    class="form-input px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="description"
                                class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                            <div class="mt-2">
                                <textarea id="description" name="description" rows="2" 
                                    class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    {{ $evenement->description }}
                                </textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="date_evenement" class="block text-sm font-medium leading-6 text-gray-900">Date de
                                l'évènement</label>
                            <div class="mt-2">
                                <input type="date" name="date_evenement" id="date_evenement"
                                    autocomplete="date_evenement" required value="{{ $evenement->date_evenement }}"
                                    class="form-input px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="statut" class="block text-sm font-medium leading-6 text-gray-900">Statut de
                                l'évènement</label>
                            <div class="mt-2">
                                <select name="statut" id="statut" required
                                    class="form-input  px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected value="{{ $evenement->statut }}" >Statut</option>
                                    <option value="ouvert">Ouvert</option>
                                    <option value="cloture">Clôturé</option>
                                </select>

                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="date_limite" class="block text-sm font-medium leading-6 text-gray-900">Date limite
                                d'inscription</label>
                            <div class="mt-2">
                                <input type="date" name="date_limite" id="date_limite" required value="{{ $evenement->date_limite }}"
                                    class="form-input px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-center gap-x-8">
                    <button type="submit"
                        class="rounded-md bg-blue-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Modifier 
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
