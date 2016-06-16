<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <title>@yield( 'title' ) | Kidzania México</title>
  <meta name="description" content="@yield( 'description' )">
  <meta content="@yield( 'keywords' )" name="keywords" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <meta http-equiv="Cache-Control" content="no-store" />
  <meta http-equiv="Cache-Control" content="no-cache" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta content="Kidzania" name="author" />
  <meta content="https://www.kidzaniapromociones.com/" property="og:url" />
  <meta content="web" property="og:type" />
  <meta content="Noches de kidzania por kidzania Monterrey" property="og:title" />
  <meta content="Noches de kidzania por kidzania Monterrey" property="og:description" />
  <meta content="assets/img/footer_mobile.png" property="og:image" />

  <link href="assets/css/lib/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/lib/checkbox/bootstrap-checkbox.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/main.css" rel="stylesheet" type="text/css" />

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-65281981-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      @section ( 'header' )
      <header class="col-md-12" id="header">
        <img alt="momentos de kidzania" class="img-responsive img-desktop" src="assets/img/head.jpg" /> <img alt="momentos de kidzania" class="img-responsive img-mobile" src="assets/img/head_m.jpg" />
      </header>
      @show

      @yield( 'content' )

    </div>
  </div>

  @section( 'scripts' )

  @show
</body>
</html>