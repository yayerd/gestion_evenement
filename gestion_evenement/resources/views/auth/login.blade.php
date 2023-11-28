<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connexion sur Gestion Evenement</title>
</head>

<body>

    <div class="flex items-center justify-center h-screen">

        @if (session('statut'))
            <div class="row d-flex justify-content-center align-items-center">
                <div class="alert alert-success col-lg-4">
                    {{ session('statut') }}
                </div>
            </div>
        @endif

        <form class=" border-solid border-2 rounded-md p-6 shadow-lg" action="/login/user" method="POST" novalidate>
            @csrf

            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 text-center text-sky-700">
                        Se connecter sur Gestion Evenement
                    </h1>
                </div>
            </header>
            <div class=" space-x-5 border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900 text-center pt-2.5">Renseigner vos
                    informations pour vous connecter</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Adresse
                            mail</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="form-input px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="motdepasse" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe
                        </label>
                        <div class="mt-2">
                            <input type="password" name="motdepasse" id="motdepasse" required
                                class="form-input  px-2 block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>


                </div>
            </div>
            <div class="mt-6 flex items-center justify-center gap-x-6">

                <button type="submit"
                    class="rounded-md bg-blue-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Se Connecter
                </button>
            </div>
        </form>
    </div>
</body>

</html>
