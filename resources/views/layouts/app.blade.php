<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150398169-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150398169-10');
</script>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Vegan Activism - Become an animal rights activist by searching through our comprehensive list of organizations!</title>


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @yield('scripts')
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bee9ee57c3c810011b38b75&product=inline-share-buttons' async='async'></script>
    @livewireStyles
    @livewireScripts

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-zrnmn8R8KkWl12rAZFt4yKjxplaDaT7/EUkKm7AovijfrQItFWR7O/JJn4DAa/gx" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
      <main class="py-4">
        <div class=”sharethis-inline-share-buttons”></div>

        <div class="container mb-30">
            @include('inc.navbar')
          <div class="row">

            @yield('content')
          </div>
        </div>
      </main>
  </body>
</html>
