<html>
<body>

    

<?php 

    $amountsOrdered = $_POST;
    // echo count($amountsOrdered);
    // echo $amountsOrdered["quantityOrderedPens"];

    class product {
		function __construct($id, $item, $cost) {
			$this->id = $id;
			$this->item = $item;
			$this->cost = $cost;
		}
	}


    $products = array(
		new product(20, "Pen", 2),
		new product(55, "Pencil", 1),
		new product(57, "Paper", 30),
		new product(60, "Stapler", 50)
	);


    $str = "<table>";
    $totalCost = 0;
    for ($i = 0; $i < count($_POST); $i++) {

//FIXME
        if(!amountsOrdered[$i] == 0) {
        $str = $str . '<tr><td>' . $products[$i]->item .
			 '</td><td>' . $amountsOrdered[$products[$i]->item] .
			 '</td><td>' . ($amountsOrdered[$products[$i]->item] * $products[$i]->cost) .
			 '</td></tr>';
        }


        $totalCost += ($amountsOrdered[$products[$i]->item]) * ($products[$i]->cost);
    }

    $str =  $str .'</table>';

    echo $str;
    echo 'Total costs is $' .$totalCost;




?>

</body>
</html>