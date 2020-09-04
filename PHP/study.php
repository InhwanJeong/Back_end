<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Study PHP</title>
  </head>
  <body>
    <?php
      // 주석 방법 1
      # 주석 방법 2
      /* 주석 방법 3 */
      echo "string<br>";
      echo 123*456;

      // 변수 선언
      $var = "<br>hello<br>";
      echo $var;

      // 배열 사용
      $arr1 = array();
      $arr1[0] = 'hello inan0<br>';
      $arr1[1] = 'hello inan1<br>';
      $arr1[2] = 'hello inan2<br>';
      $arr1[3] = 'hello inan3<br>';
      echo $arr1[0];

      // foreach 사용
      foreach ($arr1 as $key) {
        echo $key;
      }


      // 다차원 배열, 2차원배
      $arr2 = array(array(),array(),array()); // 1차원 배열을 3개 갖는 2차원 배열 선언

      // 연관배열
      $arr3 = array();
      $arr3["apple"] = 1000; // 연관배열 요소
      $arr3["banana"] = 2000;
      $arr3["orange"] = 1500;
      $arr3 = array(
        "apple" => 1000,
        "banana" => 2000,
        "orange" => 1500
      );

      // 연관배열 foreach
      foreach ($arr3 as $key => $value) {
        printf("%s는 %d원<br>", $key, $value);
      }

      // 함수
      function sayHello($name){
        printf("hello %s!", $name);
      }

      sayHello("inan");






     ?>
  </body>
</html>
