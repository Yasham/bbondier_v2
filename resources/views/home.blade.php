<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Benjamin Bondier</title>

        <link rel="stylesheet" href="css/app.css">
    </head>
    <body class="font-sans text-gray-800 bg-gray-100">
        <div class="p-6 md:p-20">
            <div class="flex items-center mb-6">
                <img src="img/pp.jpeg" alt="Benjamin Bondier" class="h-12 w-12 md:h-20 md:w-20 rounded-full">
                <h1 class="text-2xl md:text-4xl font-medium md:font-semibold pl-6 md:pl-12">
                    Benjamin Bondier
                </h1>
            </div>
            <div class="md:pl-32 max-w-2xl">
                <h2 class="text-xl font-semibold mb-6">Qui suis-je ?</h2>
                <p>
                    Je suis un développeur fullstack basé à Bordeaux. Je travaille actuellement pour
                    <a target="_blank" href="https://www.strateos.io/" class="underline text-blue-600">Strateos</a>,
                    un cabinet de recrutement spécialisé dans le recrutement d'ingénieurs.
                </p>
                <br />
                <p>
                    Je travaille principalement avec PHP et React. Je partage mon temps libre entre sports et éducaction
                    financière.
                </p>
                <br />
                <p>
                    Suivez moi
                    <a target="_blank" href="https://twitter.com/BBondier" class="underline text-blue-600">
                        @BBondier.
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>
