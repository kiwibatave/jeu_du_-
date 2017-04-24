<!DOCTYPEhtml>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <form action="action.php" method="post">
      <p>Choisissez un chiffre : <input type="text" name="chiffre" /></p>
      <p><input type="submit" value="OK"></p>
    </form>
    <?php
    $num = rand(1, 100);
    echo $num;


    ?>
  </body>
</html>
