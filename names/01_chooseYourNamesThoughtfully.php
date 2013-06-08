<?php
# Bad
## A
$fp = $x * $p; // calculates the final price
## B
class DataManager { // what data?, what kind of management?
    // do everything
}

# Better
## A
$finalPrice = $numberOfItems * $priceOfTheItem;
## B
class Page {

}
class Client {

}
