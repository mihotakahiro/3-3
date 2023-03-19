<?php
  $my_name = $_GET['my_name'];
  $my_number = $_GET['my_number'];
  $randomNumber =  $my_number * mt_rand(1, 6);

  if ($randomNumber <= 10) {
    $omikuji = "凶";
  } else if($randomNumber >= 11 && $randomNumber <= 15) {
    $omikuji = "小吉";
  } else if($randomNumber >= 16 && $randomNumber <= 20) {
    $omikuji = "中吉";
  } else if($randomNumber >= 21 && $randomNumber <= 25) {
    $omikuji = "吉";
  } else if($randomNumber >= 26 && $randomNumber <= 36) {
    $omikuji = "大吉";
  } else{
    $omikuji = "残念";
  }
  echo date("Y-m-d H:i:s", time());
  echo '<br>';
?>

<p>私の名前は<?php echo $my_name; ?>です。</p>
<p>番号は<?php echo $randomNumber; ?>です。</p>
<p>結果は<?php echo $omikuji ?>です。</p>




