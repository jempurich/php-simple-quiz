<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $one = "".$_POST['one']."";
      $two = "".$_POST['two']."";
      $three = "".$_POST['three']."";
      $four = "".$_POST['four']."";
      $five = "".$_POST['five']."";
      $sum = $one + $two + $three + $four + $five;
      echo "คะแนนของคุณคือ $sum <br>";
      if ($sum > 20) {
        echo "ตะกวด";
      }elseif ($sum > 15) {
        echo "เห็บ";
      }elseif ($sum > 10) {
        echo "หมี";
      }elseif ($sum > 5) {
        echo "ลิง";
      }else {
        echo "เทพบุตร/เทพธิดา";
      }
      ?>
  </body>
</html>
