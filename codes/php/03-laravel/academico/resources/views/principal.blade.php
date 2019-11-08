<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Página principal do sistema</title>
  </head>
  <body>

    <!-- Links - menu lateral // -->
    <ul>
      <li> <a href="/">Home</a> </li>
      <li> <a href="/welcome">Sobre</a> </li>
      <li> <a href="/listar">Listar</a> </li>
    </ul>

    <!-- Conteúdo - parte central //-->
    <!-- Todos os comandos com @ é uma seção do Blade(Construtor de interfaces) -->
    @yield('conteudo')

  </body>
</html>
