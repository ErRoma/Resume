<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
   /*
   echo "<pre>";
    $colors =array("Red","Green","Blue");
    var_dump($colors);
    echo "<br>";

    $color_codes = array(
        "Red" =>"#ff0000",
        "Green"=>"#00ff00",
        "Blue"=>"#0000ff",

    );
    var_dump($color_codes);
    echo "</pre>";

    */
    //leap year program
     $year=2014;
     if(($year % 400 ==0) || (($year % 4 ==0) && ($year % 100 !=0))){
         echo "leap year";
     }
     else{
         echo "not a leap year";
     }
     

    ?>

</body>
</html>



