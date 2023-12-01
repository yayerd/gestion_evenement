<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Gestion Evenement</title>
</head>
<body >

<div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
            <h1 class="text-gray-50 text-3xl bg-gray-900 text-white rounded-md px-3 py-2 font-medium" aria-current="page">Gestion Evenement et Reservation</h1>
               </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <a href="/evenement/lister" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Evenement</a>
                <a href="/evenement/form" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Ajouter </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

  </div>
  
    {{-- Yield Content  --}}
    @yield('mon_contenu')

    {{-- Footer --}}
</body>
</html>