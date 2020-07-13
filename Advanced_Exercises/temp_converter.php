<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="temp_design.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <title>Temp Converter</title>
</head>


<body>
   <?php 
   
   
   $F='';
   function convTemp($F) {
    
        $C = ($F-32) * 5/9;
       
        return $C;
    //    echo 'the result is:  '+ number_format($C,2);
   } 
   
/*    $e=input();
echo "<script>input=prompt('Enter Value: '); </script>"; */


$result = convTemp(55);
switch ($result) {
        case $result < 5;
        echo '<div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2017/02/13/11/45/ice-2062433_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Very cold.</p>
                    </div>
                </div>';
    break;
        case ($result >=  6 and $result <= 10);
        echo '<div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2017/02/19/15/28/italy-2080072_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Cold.</p>
                    </div>
                </div>';
    break;
        case ($result >= 10 and  $result <= 15);
        echo '<div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2017/10/10/07/48/beach-2836300_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Pleasant.</p>
                    </div>
                </div>';
    break;
        case ($result >= 15 and  $result <= 20);
        echo '<div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2018/11/11/02/32/nature-3807916_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Warm.</p>
                    </div>
                </div>';
    break;
        case ($result > 20);
        echo '<div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2015/12/23/06/23/wildfire-1105209_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Hot.</p>
                    </div>
                </div>';
    break;
    default:
    echo "Ready for some conversions, MASTER!";
}


   ?>




</body>





</html>