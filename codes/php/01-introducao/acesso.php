<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fomulário de acesso</title>

  </head>
  <body>
    <form method="post" action="validar.php">
      <p>Nome: <input type="text" name="usuario">  </p>

      <p>Senha: <input type="password" name="senha"> </p>

      <p> <input type="submit" value="Acessar"> </p>
    </form>
  </body>
</html>
<!-- php -S localhost:8000  para iniciar servidor para ouvir somente localhost
      fazer isso na pasta que está os arquivos-->
