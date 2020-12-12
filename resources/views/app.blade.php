<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laracasts Assetss</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:400,700" rel="stylesheet">
</head>

<body class="font-sans">
    <div id="app">
        <div class="container mx-auto">
            <header class="py-6 mb-8">
                <h1>
                    <img src="/images/logo.svg" alt="Laracasts logo">
                </h1>
            </header>

            <main class="flex">
                <aside class="w-1/5">
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-4">The Brand</h5>

                        <ul class="list-reset">
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/">Logo</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/about">Logo Symbol</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/about">Colors</router-link></li>
                        </ul>

                    </section>
                    
                    <section>
                        <h5 class="uppercase font-bold mb-4">Doodles</h5>
                        <ul class="list-reset">
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/">Mascots</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/about">Illustrations</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/about">Loaders and Animations</router-link></li>
                            <li class="text-sm leading-loose"><router-link class="text-black" to="/about">Wallpapers</router-link></li>
                        </ul>
                    </section>

                </aside>
                <div class="primary">
                    <router-view></router-view>
                </div>
            </main>

            <hr>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>
