<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
<style type="text/css">
</style>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <table width="80%" class="flex-container">
  <tbody>
    <tr>
      <td colspan="2"><div class="header"> <a href="index.php"><?php include 'logo.inc.php' ?></a>  <?php include 'menu.inc.php' ?></div></td>
    </tr>
    <tr>
      <td width="326" height="498" class="left"><?php include 'left.menu.inc.php' ?></td>
      <td ><div class="about_me">
         
          <h1>  <?php  echo $p ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/3otv.gif" width="550" height="350">'; ?>                    
                </div>

               

            <div class="article">
                <p class="text">
                    Извините но Вы уже нажали ссылку, а это значит, уже что то произошло!. У Вас несколько вариантов, проверить компьютер на вирусы, или ожидать... а чего ожидать, уже сам не знаю...
                </p>
            </div>
        </div></td>
    </tr>
    <tr>
      <td colspan="2"> <?php include 'footer.inc.php' ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>
