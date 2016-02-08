<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;

    function __construct($carModel, $carPrice, $carMiles)
    {
      $this->make_model = $carModel;
      $this->price = $carPrice;
      $this->miles = $carMiles;
    }

}


$porsche = new Car("2014 Porsche 911", 114991, 7864);
$ford = new Car("2011 Ford F450", 55995, 14241);
$lexus = new Car("2013 Lexus RX 350", 44700, 20000);
$mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);
$toyota = new Car("2007 Toyota Highlander", 15700, 99000);
$bmw = new Car("2007 BMW 3 series", 25700, 59000);


$cars = array($porsche, $ford, $lexus, $mercedes, $toyota, $bmw);

$cars_matching_search = array();

foreach ($cars as $car) {
    if ($car->price < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
