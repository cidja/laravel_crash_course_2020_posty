<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Posty</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"><!--on insère le lien css de la feuille de style avec le asset https://youtu.be/MFh0Fd7BsjE?t=893 !-->
  </head>
  <body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
      <ul class="flex items-center">
        <li>
          <a href="#" class="p-3">Home</a>
        </li>
        <li>
          <a href="#" class="p-3">Dashboard</a>
        </li>
        <li>
          <a href="#" class="p-3">Post</a>
        </li>
      </ul>

      <ul class="flex items-center">
        <li>
          <a href="#" class="p-3">Christian GEORGES</a>
        </li>
        <li>
          <a href="#" class="p-3">Login</a>
        </li>
        <li>
          <a href="#" class="p-3">Register</a>
        </li>
        <li>
          <a href="#" class="p-3">Logout</a>
        </li>
      </ul>
    </nav>
    @yield('content')
  </body>
</html>
