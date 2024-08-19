<?php
  echo "Привет программа ".date("Y-m-d H:i:s");
  $a = 5;
  $b = '05';
  var_dump($a == $b);
  var_dump((int)'012345');
  var_dump((float)123.0 === (int)123.0);
  var_dump(0 == 'hello, world');

  $x = 1;
  $y = 2;

  $x = $x + $y;
  var_dump($y = $x - $y);
  var_dump($x = $x - $y);

  echo "X = ". $x;
  echo " Y = ". $y;