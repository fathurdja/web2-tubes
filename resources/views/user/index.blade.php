<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FNB</title>
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        input:checked~.dropdown-menu {
            display: block;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full h-full">


    <nav class="bg-transparent  border-gray-200 fixed pt-2 left-0 w-full z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                    <g transform="translate(1 1)">
                        <path style="fill:#FD9808;" d="M408.6,109.933c0-33.28-26.453-59.733-59.733-59.733c-12.8,0-24.747,4.267-34.133,11.093
           C311.32,31.427,285.72,7.533,255,7.533s-56.32,23.893-59.733,53.76C185.88,54.467,173.933,50.2,161.133,50.2
           c-33.28,0-59.733,26.453-59.733,59.733c0,20.48,10.24,38.4,25.6,48.64v53.76h256v-53.76
           C398.36,148.333,408.6,130.413,408.6,109.933" />
                        <path style="fill:#FFDD09;" d="M383,109.933c0-33.28-23.893-59.733-52.907-59.733c-11.947,0-6.827,4.267-15.36,11.093
           c-2.56-29.867-25.6-53.76-52.907-53.76c-27.307,0-65.707,23.893-68.267,53.76c-8.533-6.827-18.773-11.093-30.72-11.093
           c-29.013,0-52.907,26.453-52.907,59.733c0,20.48,9.387,38.4,23.04,48.64v53.76h227.84v-53.76
           C373.613,148.333,383,130.413,383,109.933" />
                        <path style="fill:#FFFFFF;"
                            d="M161.133,50.2c3.413,0,6.827,0,10.24,0.853c-25.6,5.12-44.373,29.013-44.373,58.88
           c0,20.48,9.387,38.4,23.04,48.64v53.76H127v-53.76c-15.36-11.093-25.6-29.013-25.6-48.64C101.4,76.653,127.853,50.2,161.133,50.2" />
                        <path style="fill:#FD9808;"
                            d="M127,229.4c0,75.093,57.173,153.6,128,153.6s128-78.507,128-153.6v-17.067H127V229.4z" />
                        <path style="fill:#FFDD09;" d="M135.533,229.4c0,75.093,49.493,153.6,110.933,153.6S357.4,304.493,357.4,229.4v-17.067H135.533
           V229.4z" />
                        <path style="fill:#FFFFFF;" d="M152.6,212.333V229.4c0,73.387,47.787,150.187,106.667,153.6c-1.707,0-3.413,0-4.267,0
           c-70.827,0-128-78.507-128-153.6v-17.067H152.6z" />
                        <path style="fill:#FD9808;" d="M481.987,431.64c-46.933-24.747-92.16-43.52-133.12-48.64H344.6l-55.467,76.8L255,383l-34.133,76.8
           L165.4,383h-4.267c-40.96,5.12,4.267,23.893-42.667,48.64c-12.8,6.827-20.48,19.627-20.48,34.133v36.693h404.48v-36.693
           C502.467,451.267,494.787,438.467,481.987,431.64" />
                        <path style="fill:#FFDD09;" d="M456.387,431.64c-46.933-24.747-74.24-43.52-116.053-48.64h-4.267L280.6,459.8L246.467,383
           l-34.133,76.8L156.867,383H152.6c-40.96,5.12-52.053,23.893-98.987,48.64c-12.8,6.827-20.48,19.627-20.48,34.133v36.693h443.733
           v-36.693C476.867,451.267,469.187,438.467,456.387,431.64" />
                        <g>
                            <path style="fill:#FD9808;" d="M163.693,332.653l-2.56-0.853l-8.533,34.133l68.267,93.867L255,383
               C219.16,383,186.733,362.52,163.693,332.653" />
                            <path style="fill:#FD9808;" d="M346.307,332.653C323.267,362.52,290.84,383,255,383l34.133,76.8l68.267-93.867l-8.533-34.133
               L346.307,332.653z" />
                        </g>
                        <path style="fill:#FFFFFF;" d="M28.013,431.64c46.933-24.747,92.16-43.52,133.12-48.64h4.267l0.853,0.853
           c-38.4,5.973-66.56,23.893-111.787,47.787c-13.653,6.827-21.333,19.627-21.333,34.133v36.693h-25.6v-36.693
           C7.533,451.267,15.213,438.467,28.013,431.64" />
                        <path d="M220.867,468.333c-2.56,0-5.12-1.707-6.827-3.413l-68.267-93.867c-1.707-2.56-1.707-5.12-1.707-6.827l8.533-34.133
           c0.853-2.56,2.56-4.267,5.12-5.973c2.56-0.853,5.12-0.853,7.68,0l2.56,0.853c0.853,0.853,1.707,1.707,2.56,2.56
           c23.893,29.867,53.76,46.933,84.48,46.933c2.56,0,5.973,1.707,6.827,4.267c0.853,2.56,1.707,5.12,0.853,8.533l-34.133,76.8
           c-0.853,2.56-4.267,5.12-6.827,5.12C221.72,468.333,220.867,468.333,220.867,468.333z M161.987,364.227l57.173,78.507l23.04-52.053
           c-27.307-3.413-54.613-17.92-76.8-41.813L161.987,364.227z" />
                        <path d="M289.133,468.333h-0.853c-3.413,0-5.973-2.56-6.827-5.12l-34.133-76.8c-0.853-2.56-0.853-5.973,0.853-8.533
           c1.707-2.56,4.267-3.413,6.827-3.413c31.573,0,61.44-16.213,84.48-46.933c0.853-0.853,1.707-1.707,2.56-2.56l2.56-0.853
           c2.56-0.853,5.12-1.707,7.68,0c2.56,0.853,4.267,3.413,5.12,5.973l8.533,34.133c0.853,2.56,0,5.12-1.707,6.827L295.96,464.92
           C294.253,466.627,291.693,468.333,289.133,468.333z M267.8,390.68l23.04,52.053l57.173-78.507l-3.413-15.36
           C322.413,372.76,295.107,387.267,267.8,390.68z" />
                        <path d="M502.467,511H7.533C2.413,511-1,507.587-1,502.467v-36.693c0-17.92,9.387-34.133,25.6-41.813
           c56.32-29.867,98.133-45.227,135.68-49.493h0.853h4.267c2.56,0,5.12,1.707,6.827,3.413l46.933,64.853l28.16-63.147
           c1.707-3.413,4.267-5.12,7.68-5.12s6.827,1.707,7.68,5.12l28.16,63.147l46.933-64.853c1.707-2.56,4.267-3.413,6.827-3.413h4.267
           h0.853c37.547,4.267,79.36,19.627,135.68,49.493l0,0c15.36,8.533,25.6,24.747,25.6,41.813v36.693
           C511,507.587,507.587,511,502.467,511z M16.067,493.933h477.867v-28.16c0-11.093-5.973-21.333-16.213-27.307
           c-53.76-28.16-93.867-42.667-128.853-47.787l-52.907,73.387c-1.707,2.56-5.12,3.413-7.68,3.413c-3.413,0-5.973-2.56-6.827-5.12
           L255,404.333l-26.453,58.88c-0.853,2.56-4.267,5.12-6.827,5.12c-3.413,0-5.973-0.853-7.68-3.413l-52.907-73.387
           c-34.987,4.267-74.24,18.773-128.853,47.787c-10.24,5.12-16.213,15.36-16.213,26.453V493.933z" />
                        <path d="M383,220.867H127c-5.12,0-8.533-3.413-8.533-8.533V162.84c-16.213-12.8-25.6-32.427-25.6-52.907
           c0-37.547,30.72-68.267,68.267-68.267c10.24,0,19.627,1.707,28.16,5.973C197.827,19.48,224.28-1,255-1s57.173,20.48,65.707,48.64
           c8.533-4.267,17.92-5.973,28.16-5.973c37.547,0,68.267,30.72,68.267,68.267c0,20.48-9.387,40.107-25.6,52.907v49.493
           C391.533,217.453,388.12,220.867,383,220.867z M135.533,203.8h238.933v-45.227c0-2.56,1.707-5.12,3.413-6.827
           c13.653-9.387,22.187-24.747,22.187-41.813c0-28.16-23.04-51.2-51.2-51.2c-10.24,0-20.48,3.413-29.867,9.387
           c-2.56,1.707-5.973,1.707-8.533,0.853c-2.56-1.707-4.267-4.267-4.267-6.827c-2.56-26.453-24.747-46.08-51.2-46.08
           s-48.64,19.627-51.2,46.08c0,3.413-2.56,5.973-5.12,6.827c-2.56,0.853-5.973,0.853-8.533-0.853
           c-8.533-5.973-18.773-9.387-29.013-9.387c-28.16,0-51.2,23.04-51.2,51.2c0,17.067,8.533,32.427,22.187,41.813
           c2.56,1.707,3.413,4.267,3.413,6.827V203.8z" />
                        <path d="M255,391.533c-78.507,0-136.533-85.333-136.533-162.133v-17.067c0-5.12,3.413-8.533,8.533-8.533h256
           c5.12,0,8.533,3.413,8.533,8.533V229.4C391.533,306.2,333.507,391.533,255,391.533z M135.533,220.867v8.533
           c0,82.773,63.147,145.067,119.467,145.067S374.467,312.173,374.467,229.4v-8.533H135.533z" />
                    </g>
                </svg>
                <h1 class="font-cursive-merie text-amber-400 text-center leading-normal text-2xl">FN<span
                        class="text-red-600">B</span></h1>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#home"
                            class="block py-2 px-3  rounded text-red-600  md:hover:text-red-600 md:p-0 dark:text-white md:dark:text-red-600"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#menu"
                            class="block py-2 px-3 text-amber-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-amber-400 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Menu</a>
                    </li>
                    <li>
                        <a href="#reservasi"
                            class="block py-2 px-3 text-red-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Reservasi</a>
                    </li>
                    <li>
                        <a href="#kontak"
                            class="block py-2 px-3 text-amber-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-amber-400 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section id="home" class="bg-center bg-no-repeat bg-cover bg-gray-700 bg-blend-multiply h-screen w-full"
        style="background-image: url('{{ asset('images/bgfoodhd.jpg') }}');">
        <div class="px-5 mx-auto max-w-screen-xl text-center py-36 lg:py-28 ">
            <h1 class="font-cursive-merie text-red-600 text-center leading-normal text-6xl py-10">
                Discover the <span class="text-amber-400">flavors</span><br />
                of <span class="text-amber-400">FN</span>B
            </h1>
            <!--  -->
            <!-- <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0"> -->
            <a href="#"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-600 hover:bg-amber-400 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Our Menu
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
            <a href="/home"
                class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Order Now
            </a>
        </div>
        </div>
    </section>
    <section id="menu" class="bg-gray-50 py-3
 antialiased dark:bg-gray-900 md:py-10">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <h2 class="mb-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl text-center">Menu</h2>
        </div>
        <!-- Gambar Menu -->
        <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
            <!-- Cotto Makasar -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="h-56 w-full">
                    <a href="#">
                        <img class="mx-auto  h-full dark:hidden" src="{{ 'images/menu/coto.jpg' }}" alt="Gambar Coto" />
                    </a>
                </div>
                <div class="pt-6">
                    <div class="mb-4 flex items-center justify-between gap-4">

                        <div class="flex items-center justify-end gap-1">

                            <div id="tooltip-quick-look" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Quick look
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>

                            <div id="tooltip-add-to-favorites" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">

                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Coto
                        Makassar</a>
                    <!-- kartu   per menu -->
                    <div class="mt-2 flex items-center gap-2">
                        <!-- Bintang -->
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>
                        </div>
                        <!-- Rating dan total pembeli -->
                        <p class="text-sm font-medium text-gray-900 dark:text-white">5.0</p>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(455)</p>
                    </div>
                    <div class="mt-4 flex items-center justify-between gap-4">
                        <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">50.000</p>
                    </div>
                </div>
            </div>
            <!-- Sate  -->
            <div
                class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="h-56 w-full">
                    <a href="#">
                        <img class="mx-auto h-full dark:hidden" src="{{ 'images/menu/sate.jpg' }}"
                            alt=" Gambar Sate" />
                    </a>
                </div>

                <div class="pt-6">
                    <div class="mb-4 flex items-center justify-between gap-4">
                        <div class="flex items-center justify-end gap-1">
                        </div>
                    </div>

                    <a href="#"
                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Sate
                        Lilit</a>

                    <div class="mt-2 flex items-center gap-2">
                        <!-- Bintang  -->
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>
                        </div>
                        <!-- Rating -->
                        <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                        <!-- Jumlah Pembeli -->
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(1,233)</p>
                    </div>
                    <div class="mt-4 flex items-center justify-between gap-4">
                        <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">45.000</p>
                    </div>
                </div>
            </div>

            <!-- Opor  -->
            <div
                class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="h-56 w-full">
                    <a href="#">
                        <img class="mx-auto h-full dark:hidden" src="{{ 'images/menu/opor.jpg' }}" alt="" />
                    </a>
                </div>

                <div class="pt-6">
                    <div class="mb-4 flex items-center justify-between gap-4">
                        <div class="flex items-center justify-end gap-1">
                            <div id="tooltip-quick-look-3" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Quick look
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                            <div id="tooltip-add-to-favorites-3" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Add to favorites
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Opor
                        Ayam</a>

                    <div class="mt-2 flex items-center gap-2">
                        <!-- Bintang -->
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>
                        </div>
                        <!-- RATING -->
                        <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                        <!--Total terjual -->
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(879)</p>
                    </div>

                    <div class="mt-4 flex items-center justify-between gap-4">
                        <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">40.000</p>
                    </div>
                </div>
            </div>

            <!-- Ikan bakar -->
            <div
                class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="h-56 w-full">
                    <a href="#">
                        <img class="mx-auto h-full dark:hidden" src="{{ 'images/menu/ikanbkr.jpg' }}"
                            alt=" Ikan Bakar" />
                    </a>
                </div>

                <div class="pt-6">
                    <div class="mb-4 flex items-center justify-between gap-4">
                        <div class="flex items-center justify-end gap-1">

                            <div id="tooltip-quick-look-4" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Quick look
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                            <div id="tooltip-add-to-favorites-4" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Add to favorites
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                        </div>
                    </div>
                    <!-- Nama Menu -->
                    <a href="#"
                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ikan
                        Bakar</a>

                    <div class="mt-2 flex items-center gap-2">
                        <!-- Bintang -->
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>
                        </div>
                        <!-- Rating -->
                        <p class="text-sm font-medium text-gray-900 dark:text-white">4,8</p>
                        <!-- Total Pemebli -->
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(2,957)</p>
                    </div>
                    <!-- Harga -->
                    <div class="mt-4 flex items-center justify-between gap-4">
                        <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">80.000</p>
                    </div>
                </div>
            </div>

            <!-- MINUMAN -->
            <!-- ice tea -->
            <div
                class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="h-56 w-full">
                    <a href="#">
                        <img class="mx-auto h-full dark:hidden" src="{{ 'images/menu/tea.jpg' }}" alt=" tea" />
                    </a>
                </div>

                <div class="pt-6">
                    <div class="mb-4 flex items-center justify-between gap-4">
                        <div class="flex items-center justify-end gap-1">
                            <div id="tooltip-quick-look-5" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Quick look
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                            <div id="tooltip-add-to-favorites-5" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Add to favorites
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                        </div>
                    </div>
                    <a href="#"
                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ice
                        Tea</a>

                    <div class="mt-2 flex items-center gap-2">
                        <!-- Bintang -->
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>
                        </div>
                        <!-- Rating dan total pembeli -->
                        <p class="text-sm font-medium text-gray-900 dark:text-white">4.8</p>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(4,263)</p>
                    </div>
                    <div class="mt-4 flex items-center justify-between gap-4">
                        <!-- Harga -->
                        <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">10.000</p>
                    </div>
                </div>
            </div>
            <!-- lemon -->
            <div
                class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="h-56 w-full">
                    <a href="#">
                        <img class="mx-auto h-full dark:hidden" src="{{ 'images/menu/lemon.jpg' }}" alt=" Lemon" />
                    </a>
                </div>

                <div class="pt-6">
                    <div class="mb-4 flex items-center justify-between gap-4">
                        <div class="flex items-center justify-end gap-1">

                            <div id="tooltip-quick-look-6" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Quick look
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                            <div id="tooltip-add-to-favorites-6" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Add to favorites
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Lemonade</a>
                    <!-- Bintang -->
                    <div class="mt-2 flex items-center gap-2">
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>
                        </div>
                        <!-- Rating dan Total Pembeli -->
                        <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(1,076)</p>
                    </div>

                    <!-- <ul class="mt-2 flex items-center gap-4">
              <li class="flex items-center gap-2">
                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                </svg>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Fast Delivery</p>
              </li>
  
              <li class="flex items-center gap-2">
                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Best Price</p>
              </li>
            </ul> -->

                    <div class="mt-4 flex items-center justify-between gap-4">
                        <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">17.000</p>
                    </div>
                </div>
            </div>
            <!-- Soda -->
            <div
                class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="h-56 w-full">
                    <a href="#">
                        <img class="mx-auto h-full dark:hidden" src="{{ 'images/menu/soda.jpg' }}" alt=" soda" />
                        </b>
                </div>

                <div class="pt-6">
                    <div class="mb-4 flex items-center justify-between gap-4">
                        <div class="flex items-center justify-end gap-1">

                            <div id="tooltip-quick-look-6" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Quick look
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                            <div id="tooltip-add-to-favorites-6" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Add to favorites
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Soda</a>
                    <!-- Bintang -->
                    <div class="mt-2 flex items-center gap-2">
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>
                        </div>
                        <!-- Rating dan Total Pembeli -->
                        <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(1,076)</p>
                    </div>
                    <div class="mt-4 flex items-center justify-between gap-4">
                        <!-- Harga -->
                        <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">20.000</p>
                    </div>
                </div>
            </div>
            <!-- Mojito -->
            <div
                class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="h-56 w-full">
                    <a href="#">
                        <img class="mx-auto h-full dark:hidden" src="{{ 'images/menu/mojito.jpg' }}"
                            alt=" Soda" />
                    </a>
                </div>
                <div class="pt-6">
                    <div class="mb-4 flex items-center justify-between gap-4">
                        <div class="flex items-center justify-end gap-1">
                            <div id="tooltip-quick-look-8" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Quick look
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                            <div id="tooltip-add-to-favorites-8" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Add to favorites
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Mojito</a>

                    <div class="mt-2 flex items-center gap-2">
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                            </svg>
                        </div>

                        <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(4,775)</p>
                    </div>


                    <div class="mt-4 flex items-center justify-between gap-4">
                        <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">30.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- RESERVATION -->

    <form id="reservasi" action="{{ route('reservasi.store') }}" method="POST" class="max-w-md mx-auto py-2 mb-5 grid gap-4 md:mb-8 mt-2 border border-[#EB5B00] rounded-lg p-4 bg-white">
            @csrf
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h2 class="mb-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl text-center">Reservasi</h2>
        </div>
        <!-- Email -->
        <div class="relative z-0 w-full mb-5 group">
            <input type="email" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border--600 reddark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
        </div>
        <!-- Nama -->
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
            </div>
        </div>
        <!-- Nomor Telpon -->
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="tel" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" name="phone" id="floating_phone" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
            </div>
    
            <!--pilih tanggal  -->
            <div class="w-full max-w-xs">
                <input type="date" id="date" name="date" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            </div>
        </div>
        <!-- PILIH MEJA -->
        <div class="relative inline-block text-left">
            <input type="checkbox" id="toggle" class="hidden">
            <label for="toggle" id="toggle_label" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 cursor-pointer">
                Jenis Meja
                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </label>
            <ul class="dropdown-menu absolute right-0 mt-2 w-full rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="selectTableType(event, 'Indoor')">Indoor</a></li>
                <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="selectTableType(event, 'Outdoor')">Outdoor</a></li>
                <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="selectTableType(event, 'VIP')">VIP</a></li>
            </ul>
            <input type="hidden" id="table_type" name="table_type">
        </div>
        <div class="py-2.5">
            <button type="submit" class="text-white bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </div>
    </form>
    

    <!-- Footer -->
    <footer id="kontak" class="p-4 bg-[#EB5B00] sm:p-6 ">
        <div class="mx-auto max-w-screen-xl h-44">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com" class="flex items-center">
                        <svg height="40px" width="40px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <g transform="translate(1 1)">
                                <path style="fill:#FD9808;" d="M408.6,109.933c0-33.28-26.453-59.733-59.733-59.733c-12.8,0-24.747,4.267-34.133,11.093
                   C311.32,31.427,285.72,7.533,255,7.533s-56.32,23.893-59.733,53.76C185.88,54.467,173.933,50.2,161.133,50.2
                   c-33.28,0-59.733,26.453-59.733,59.733c0,20.48,10.24,38.4,25.6,48.64v53.76h256v-53.76
                   C398.36,148.333,408.6,130.413,408.6,109.933" />
                                <path style="fill:#FFDD09;" d="M383,109.933c0-33.28-23.893-59.733-52.907-59.733c-11.947,0-6.827,4.267-15.36,11.093
                   c-2.56-29.867-25.6-53.76-52.907-53.76c-27.307,0-65.707,23.893-68.267,53.76c-8.533-6.827-18.773-11.093-30.72-11.093
                   c-29.013,0-52.907,26.453-52.907,59.733c0,20.48,9.387,38.4,23.04,48.64v53.76h227.84v-53.76
                   C373.613,148.333,383,130.413,383,109.933" />
                                <path style="fill:#FFFFFF;"
                                    d="M161.133,50.2c3.413,0,6.827,0,10.24,0.853c-25.6,5.12-44.373,29.013-44.373,58.88
                   c0,20.48,9.387,38.4,23.04,48.64v53.76H127v-53.76c-15.36-11.093-25.6-29.013-25.6-48.64C101.4,76.653,127.853,50.2,161.133,50.2" />
                                <path style="fill:#FD9808;"
                                    d="M127,229.4c0,75.093,57.173,153.6,128,153.6s128-78.507,128-153.6v-17.067H127V229.4z" />
                                <path style="fill:#FFDD09;" d="M135.533,229.4c0,75.093,49.493,153.6,110.933,153.6S357.4,304.493,357.4,229.4v-17.067H135.533
                   V229.4z" />
                                <path style="fill:#FFFFFF;" d="M152.6,212.333V229.4c0,73.387,47.787,150.187,106.667,153.6c-1.707,0-3.413,0-4.267,0
                   c-70.827,0-128-78.507-128-153.6v-17.067H152.6z" />
                                <path style="fill:#FD9808;" d="M481.987,431.64c-46.933-24.747-92.16-43.52-133.12-48.64H344.6l-55.467,76.8L255,383l-34.133,76.8
                   L165.4,383h-4.267c-40.96,5.12,4.267,23.893-42.667,48.64c-12.8,6.827-20.48,19.627-20.48,34.133v36.693h404.48v-36.693
                   C502.467,451.267,494.787,438.467,481.987,431.64" />
                                <path style="fill:#FFDD09;" d="M456.387,431.64c-46.933-24.747-74.24-43.52-116.053-48.64h-4.267L280.6,459.8L246.467,383
                   l-34.133,76.8L156.867,383H152.6c-40.96,5.12-52.053,23.893-98.987,48.64c-12.8,6.827-20.48,19.627-20.48,34.133v36.693h443.733
                   v-36.693C476.867,451.267,469.187,438.467,456.387,431.64" />
                                <g>
                                    <path style="fill:#FD9808;" d="M163.693,332.653l-2.56-0.853l-8.533,34.133l68.267,93.867L255,383
                       C219.16,383,186.733,362.52,163.693,332.653" />
                                    <path style="fill:#FD9808;" d="M346.307,332.653C323.267,362.52,290.84,383,255,383l34.133,76.8l68.267-93.867l-8.533-34.133
                       L346.307,332.653z" />
                                </g>
                                <path style="fill:#FFFFFF;" d="M28.013,431.64c46.933-24.747,92.16-43.52,133.12-48.64h4.267l0.853,0.853
                   c-38.4,5.973-66.56,23.893-111.787,47.787c-13.653,6.827-21.333,19.627-21.333,34.133v36.693h-25.6v-36.693
                   C7.533,451.267,15.213,438.467,28.013,431.64" />
                                <path d="M220.867,468.333c-2.56,0-5.12-1.707-6.827-3.413l-68.267-93.867c-1.707-2.56-1.707-5.12-1.707-6.827l8.533-34.133
                   c0.853-2.56,2.56-4.267,5.12-5.973c2.56-0.853,5.12-0.853,7.68,0l2.56,0.853c0.853,0.853,1.707,1.707,2.56,2.56
                   c23.893,29.867,53.76,46.933,84.48,46.933c2.56,0,5.973,1.707,6.827,4.267c0.853,2.56,1.707,5.12,0.853,8.533l-34.133,76.8
                   c-0.853,2.56-4.267,5.12-6.827,5.12C221.72,468.333,220.867,468.333,220.867,468.333z M161.987,364.227l57.173,78.507l23.04-52.053
                   c-27.307-3.413-54.613-17.92-76.8-41.813L161.987,364.227z" />
                                <path d="M289.133,468.333h-0.853c-3.413,0-5.973-2.56-6.827-5.12l-34.133-76.8c-0.853-2.56-0.853-5.973,0.853-8.533
                   c1.707-2.56,4.267-3.413,6.827-3.413c31.573,0,61.44-16.213,84.48-46.933c0.853-0.853,1.707-1.707,2.56-2.56l2.56-0.853
                   c2.56-0.853,5.12-1.707,7.68,0c2.56,0.853,4.267,3.413,5.12,5.973l8.533,34.133c0.853,2.56,0,5.12-1.707,6.827L295.96,464.92
                   C294.253,466.627,291.693,468.333,289.133,468.333z M267.8,390.68l23.04,52.053l57.173-78.507l-3.413-15.36
                   C322.413,372.76,295.107,387.267,267.8,390.68z" />
                                <path d="M502.467,511H7.533C2.413,511-1,507.587-1,502.467v-36.693c0-17.92,9.387-34.133,25.6-41.813
                   c56.32-29.867,98.133-45.227,135.68-49.493h0.853h4.267c2.56,0,5.12,1.707,6.827,3.413l46.933,64.853l28.16-63.147
                   c1.707-3.413,4.267-5.12,7.68-5.12s6.827,1.707,7.68,5.12l28.16,63.147l46.933-64.853c1.707-2.56,4.267-3.413,6.827-3.413h4.267
                   h0.853c37.547,4.267,79.36,19.627,135.68,49.493l0,0c15.36,8.533,25.6,24.747,25.6,41.813v36.693
                   C511,507.587,507.587,511,502.467,511z M16.067,493.933h477.867v-28.16c0-11.093-5.973-21.333-16.213-27.307
                   c-53.76-28.16-93.867-42.667-128.853-47.787l-52.907,73.387c-1.707,2.56-5.12,3.413-7.68,3.413c-3.413,0-5.973-2.56-6.827-5.12
                   L255,404.333l-26.453,58.88c-0.853,2.56-4.267,5.12-6.827,5.12c-3.413,0-5.973-0.853-7.68-3.413l-52.907-73.387
                   c-34.987,4.267-74.24,18.773-128.853,47.787c-10.24,5.12-16.213,15.36-16.213,26.453V493.933z" />
                                <path d="M383,220.867H127c-5.12,0-8.533-3.413-8.533-8.533V162.84c-16.213-12.8-25.6-32.427-25.6-52.907
                   c0-37.547,30.72-68.267,68.267-68.267c10.24,0,19.627,1.707,28.16,5.973C197.827,19.48,224.28-1,255-1s57.173,20.48,65.707,48.64
                   c8.533-4.267,17.92-5.973,28.16-5.973c37.547,0,68.267,30.72,68.267,68.267c0,20.48-9.387,40.107-25.6,52.907v49.493
                   C391.533,217.453,388.12,220.867,383,220.867z M135.533,203.8h238.933v-45.227c0-2.56,1.707-5.12,3.413-6.827
                   c13.653-9.387,22.187-24.747,22.187-41.813c0-28.16-23.04-51.2-51.2-51.2c-10.24,0-20.48,3.413-29.867,9.387
                   c-2.56,1.707-5.973,1.707-8.533,0.853c-2.56-1.707-4.267-4.267-4.267-6.827c-2.56-26.453-24.747-46.08-51.2-46.08
                   s-48.64,19.627-51.2,46.08c0,3.413-2.56,5.973-5.12,6.827c-2.56,0.853-5.973,0.853-8.533-0.853
                   c-8.533-5.973-18.773-9.387-29.013-9.387c-28.16,0-51.2,23.04-51.2,51.2c0,17.067,8.533,32.427,22.187,41.813
                   c2.56,1.707,3.413,4.267,3.413,6.827V203.8z" />
                                <path d="M255,391.533c-78.507,0-136.533-85.333-136.533-162.133v-17.067c0-5.12,3.413-8.533,8.533-8.533h256
                   c5.12,0,8.533,3.413,8.533,8.533V229.4C391.533,306.2,333.507,391.533,255,391.533z M135.533,220.867v8.533
                   c0,82.773,63.147,145.067,119.467,145.067S374.467,312.173,374.467,229.4v-8.533H135.533z" />
                            </g>
                        </svg>
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">FNB
                            Restaurant</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <!-- <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-600 dark:text-gray-400">
                      <li class="mb-4">
                          <a href="https://flowbite.com" class="hover:underline">Flowbite</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div> -->
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Alamat</h2>
                        <ul class="text-gray-900 dark:text-gray-900">
                            <li class="mb-4">
                                <a href=" " class="hover:underline ">Jl.Sultan Alauddin</a>
                            </li>
                            <li>
                                <a href=" " class="hover:underline">Samata, Gowa</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Contact</h2>
                        <ul class="text-gray-900 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">+6212345678</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">fnbreastaurant@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blue-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-900 sm:text-center dark:text-gray-400">© 2022 <a
                        href="https://flowbite.com" class="hover:underline">FNB™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('toggle').addEventListener('change', function() {
            const dropdown = document.querySelector('.dropdown-menu');
            if (this.checked) {
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.add('hidden');
            }
        });

       
    function selectTableType(event, type) {
        event.preventDefault();
        document.getElementById('table_type').value = type;
        document.getElementById('toggle').checked = false;
        document.querySelector('.dropdown-menu').classList.add('hidden');
        document.getElementById('toggle_label').innerHTML = `Jenis Meja: ${type}`;
    }
    </script>
     @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
</body>

</html>
