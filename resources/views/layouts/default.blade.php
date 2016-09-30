<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.css" media="screen" title="no title">
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

  </head>
  <body>

<div class="row">
      @yield('content')
    </div>

      <!-- Scripts -->
      <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.js'></script>
      <script src="/js/app.js"></script>
  </body>
</html>
