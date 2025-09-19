<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>
<body>
   <p>
      <?php

      $user_name = ['侍太郎', '侍一郎', '二郎', '三郎', '四郎'];
      print_r($user_name);

      echo'<br>';

      $user_name[1] = '侍花子';
      $user_name[] = '侍五郎';
      print_r($user_name);

      echo '<br>';

      echo $user_name[2];
      ?>

   </p>
</body>
</html>
