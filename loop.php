<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //while -->
     $tab = 11 ;
     while($a <10){
      echo"<table>";
      $a++;
      
      ?>  <tr>
        <td><?php echo $tab;?></td>
        <td>*</td>
        <td><?php echo $a;?></td>
        <td>=</td>
        <td><?php echo$tab* $a;?></td>
      </tr>
      <?php
      echo"</table>";

     }
     ?>
     
</body>
</html>