<html lang="{{config('app.locale')}}">
<head>
<style>
.bgimage {
  width:100%;
  height:70%;
  background: url('/images/head.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size:cover;
  background-attachment: fixed;
  padding-top: 10%;
  opacity: 1.5;
}
.bgimage h5 {
  color:white;
  text-shadow:2px 2px #333;
}
a.nav-link{
    font-weight: bold;
    font-size: 1rem;
}
.marquee:hover span {
  animation-play-state: paused;
}
</style>
<title>{{config('app.name', 'rgukt')}}</title>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="RGUKT WEBSITE" />
    <meta name="author" content="Ajay Panthagani" />
    <link rel="shortcut icon" href={{ asset("images/logo.png") }} />
    <!-- Bootstrap core CSS -->
    <link href ="{{ asset("css/app.css") }}" rel="stylesheet" />
    <script src="{{asset("js/app.js")}}"></script>
</head>
@include('inc.navbar')
<hr>
<body>
<div class='container'>
@include('inc.messages')
</div>
@yield('content')
</body>
</html>