<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // if(3 < 10){
        //     print('sup bro');
        // } elseif (10 > 3) {
        //     print('yoyo');
        // } else {
        //     print('heyyy');
        // }

        // $num = 3;

        // switch($num) {
        //     case 1:
        //         print('one');
        //         break;
        //     case 2:
        //         print('two');
        //         break;
        //     case 3:
        //         print('three');
        //         break;
        //     default:
        //         print('default');
        // }
        //     $i = 0;
        // while($i < 3) {
        //     print(' something' . " " . $i);
        //     $i++;
        // }

        // for($i = 0; $i < 5; $i++) {
        //     echo $i . "<br>";
        // }

        // $numbers = ["one"=>1,"two"=>2,"three"=>3];

        // foreach($numbers as $number) {
        //     echo $number . '<br>';
        // }

        // function getName($name) {
        //     return $name;
        // }

        // function sayHello ($name) {
        //     echo "hellos " . $name;
        // }

        // function greet() {
        //     $name = getName('Justin');
        //     sayHello($name);
        // }

        // greet();

        // $x = 'outside';

        // function convert() {
        //     global $x;
        //     $x = 'inside';
        // }

        // define('NAME', 'Justin'); // defines a constant
        // const OTHERNAME = 'Roxy'; // Newer way to define constant
        // echo NAME;

       echo pow(2,3) . '<br>';

       echo rand(1,1000) . "<br>";

       $string = "Hello student do you like the class?";

       echo strlen($string);

       echo '<br>';

       echo strtoupper($string);

       echo '<br>';

       $list = ['apple', 'orange', 'banana'];

       echo max($list);
    ?>
</body>
</html>