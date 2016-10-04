<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{URL::asset('css/foundation.min.css')}}" media="screen" title="no title">
        <link rel="stylesheet" href="{{URL::asset('css/tfs-master.css')}}" media="screen" title="no title">
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

  </head>
  <body>

    <div class="top-menu">

        <ul class='menu'>
          <li><a href="/user/1">Dashboard</a></li>
        </ul>
    </div>

    <div class="main-container row">
      <div class="row">
        @yield('content')
      </div>
    </div>

      <!-- Scripts -->
      <script type="text/javascript" src='{{URL::asset('js/jquery.min.js')}}'></script>
      <script type="text/javascript" src='{{URL::asset('js/foundation.min.js')}}'></script>
      <script src="/js/app.js"></script>
  </body>
</html>
