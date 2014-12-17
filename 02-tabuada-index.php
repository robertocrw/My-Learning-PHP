<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="index.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="02-tabuada.php">
        <select name="num">
            <?php
                for ($c=1; $c<=10; $c++) {
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada" class="botao"/>
    </form>
</div>
</body>
</html>
 