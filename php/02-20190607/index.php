<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <style>
    table,th,td{
        border: 1px solid;
        border-collapse:collapse;
        text-align:center;
    }
    </style>
</head>
<body>
   
    <table class="table table-striped">
    <?php
    $products = [["iphone",2000],["Note9",500],["Redmi",100],["HTC",1000]];
    ?>
    <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>After Tax</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $total = 0;
    $tax = 0;
    $totaltax=0;
     ?>
        
                <?php for($i=0;$i<count($products);$i++){
                     echo "<tr>";
                     echo "<th>".($i+1)."</th>" ;
                        for($j=0;$j<count($products[$i]);$j++){           
                            echo "<td>".$products[$i][$j];
                            if($j===1){
                                $total = $total + $products[$i][$j];
                                echo "$"."</td>";
                                if($products[$i][1]>500){
                                    $tax = $products[$i][1] + ($products[$i][1]/10);                  echo "<td>".$tax."$"."</td>";     
                                }
                                else{
                                    $tax = $products[$i][1] + ($products[$i][1]/20);                  echo "<td>".$tax."$"."</td>"; 
                                }
                                $totaltax = $totaltax+$tax;
                            } else {
                                echo "</td>";
                            }
                            
                        }
                    echo "</tr>";
                } ?>
                <tr>
                <th>Total
                </th>
                <td></td>
                <td><?php echo $total ."$" ?></td>
                <td><?php echo $totaltax."$"?></td>
                </tr>
     
    </tbody>
    </table>
   
</body>
</html>

