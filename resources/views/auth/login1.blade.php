<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="./output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
    </script>
</head>

<body>
    <section class="bg-grey-50 dark:bg-blue-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <svg height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
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
            </a>
            <div class="w-full bg-white-200 rounded-lg dark:border md:mt-0 sm:max-w-md xl:p-0"
                style="box-shadow: 0 4px 8px 0 rgba(255, 165, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div id="login-form">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Sign in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="/login" method="POST" id="form">
                            @csrf
                            @error('error')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-orange-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-oarnge-600 dark:placeholder-red-400 dark:text-black dark:focus:ring-orange-500 dark:focus:border-gray-500"
                                    placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-orange-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-orange-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-orange-300 dark:bg-orange-700 dark:border-gray-600 dark:focus:ring-orange-600 dark:ring-offset-gray-800"
                                            required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember
                                            me</label>
                                    </div>
                                </div>
                                <a href="#"
                                    class="text-sm font-medium text-black-600 hover:underline dark:text-gray-500"
                                    onclick="showForgotPassword()">Forgot password?</a>
                            </div>
                            <button form="form" type="submit"
                                class="w-full text-white bg-orange-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                                in</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don’t have an account yet? <a href="registerform.html"
                                    class="font-medium text-gray-600 hover:underline dark:text-gray-500">Sign up</a>
                            </p>
                        </form>
                    </div>

                    <div id="forgot-password-form" class="hidden">
                        <h2 class="mb-4 text-2xl font-bold">Reset your password</h2>
                        <form>
                            <div class="mb-4">
                                <label for="reset-email"
                                    class="block text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" id="reset-email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com">
                            </div>
                            <button type="submit" class="w-full px-4 py-2 text-white bg-orange-600 rounded-md">Send
                                reset link</button>
                        </form>
                        <div class="mt-4">
                            <p class="text-sm"><a href="#"
                                    class="text-gray-600 hover:underline dark:text-primary-500"
                                    onclick="showLoginForm()">Back to login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
