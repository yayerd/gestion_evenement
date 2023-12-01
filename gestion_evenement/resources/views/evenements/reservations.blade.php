@extends('layouts.template')
@section('mon_contenu')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 text-center text-sky-700">Liste des
                        réservations
                    </h1>
                </div>
            </header>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="border-b px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Réfèrence
                            </th>
                            <th scope="col"
                                class="border-b px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre de place 
                            </th>
                            <th scope="col"
                                class="border-b px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date réservation
                            </th>
                            <th scope="col"
                                class="border-b px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Options
                            </th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($reservations as $reservation)
                        <tr class="border-b">
                            <th scope="row" class="border-t px-6 py-4 whitespace-nowrap">
                                {{$reservation->reference}}
                            </th>
                            <td class="border-t px-6 py-4 whitespace-nowrap">
                                {{$reservation->nombre_place}}
                            </td>
                            <td class="border-t px-6 py-4 whitespace-nowrap">
                                {{$reservation->created_at}}
                            </td>
                            {{-- <td class="border-t px-6 py-4 whitespace-nowrap">
                                <a href={{ "/reservation/$reservation->id/decliner" }}
                                    class="text-xl m-3 text-white p-4 bg-yellow-600">
                                    Décliner
                                </a>
                            </td> --}}
                            <td class="border-t px-6 py-4 whitespace-nowrap">
                                @if($reservation->statut == 'accepte')
                                    <a href="{{ "/reservation/$reservation->id/decliner" }}" class="text-xl m-3 text-white p-4 bg-yellow-600">
                                        Décliner
                                    </a>
                                @else
                                    <span class="text-gray-500">Réservation déclinée</span>
                                @endif
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
@endsection
