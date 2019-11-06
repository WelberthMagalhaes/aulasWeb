<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de Estados</title>
  </head>
  <body>

    <ol>
    <?php
      while ($e = $estados->fetch()) {
        //indexado pela coluna nome do banco de dados
        echo "<li>";
        echo $e["nome"];
        echo "</li>";
      }
     ?>
   </ol> <!--Order List -->

  </body>
</html>
