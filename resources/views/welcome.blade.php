<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Workyt - La plate-forme d'apprentissage gratuite</title>
    <meta name="description" content=" Les ressources d'apprentissage gratuites sont au cœur de notre mission sociale, car nous pensons que les principaux obstacles au début de l'éducation sont l'accès, le manque de confiance et le coût." />
    <meta name="keywords" content="éducation,soutien scolaire, aide aux devoirs, cours, étudiant, bac" />
    <meta name="copyright" content="Workyt">
    <meta name="author" content="Nadir" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body>

@include('header/header')

    <div id="marketing-banner" tabindex="-1" class="fixed z-60 flex flex-col md:flex-row justify-between w-[calc(100%-2rem)] p-4 -translate-x-1/2 bg-white border border-gray-100 rounded-lg shadow-sm lg:max-w-7xl left-1/2 top-6 dark:bg-gray-700 dark:border-gray-600">
        <div class="flex flex-col items-start mb-3 me-4 md:items-center md:flex-row md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center mb-2 border-gray-200 md:pe-4 md:me-4 md:border-e md:mb-0 dark:border-gray-600">
                <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <h3 class="text-lg font-medium">Avertissement : Site en cours de développement</h3>
            </a>
            <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">Nous tenons à vous informer que notre site est actuellement en cours de développement. Nous travaillons dur pour vous offrir une expérience optimale, mais certaines fonctionnalités peuvent ne pas être disponibles pour le moment.</p>
        </div>
        <div class="flex items-center flex-shrink-0">
            <a href="#"  class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Lire le Changelog
            </a>
            <button data-dismiss-target="#marketing-banner" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close banner</span>
            </button>
        </div>
    </div>
</div>

<div class="headerAsso">
    <div id="presentationAsso" class="col-span-2">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Plongez et commencez à apprendre, <mark class="px-2 text-white bg-orange-500 rounded dark:bg-blue-500">Workyt</mark> la plate-forme d'apprentissage gratuite</h1>
        <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Les ressources d'apprentissage gratuites sont au cœur de notre mission sociale, car nous pensons que les principaux obstacles au début de l'éducation sont l'accès, le manque de confiance et le coût.</p>
        <div class="flex flex-wrap items-center justify-center mt-8">
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Lire nos cours
            </span>
        </button>
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Rejoindre notre Forum
            </span>
        </button>
            <button class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                <span class="text-center">Présentation de l'association</span>
            </button>
            </button>
        </div>
    </div>
    <figure class="max-w-lg grid-cols-2">
    <figure class="max-w-lg grid-cols-2">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/workytstudenthome.png') }}" alt="image description">
    </figure>
</div>

</body>
@include('footer/footer')
</html>
