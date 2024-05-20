<?php
class Product {
    // Properties
    private $name;
    private $engine;
    private $price;
    private $color;

    // Constructor
    public function __construct($name, $engine, $price, $color) {
        $this->name = $name;
        $this->engine = $engine;
        $this->price = $price;
        $this->color = $color;
        echo "Product \"$name\" created.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Product \"$this->name\" destroyed.<br>";
    }

    // Getter method for name
    public function getName() {
        return $this->name;
    }

    // Getter method for engine
    public function getEngine() {
        return $this->engine;
    }

    // Getter method for price
    public function getPrice() {
        return $this->price;
    }

    // Getter method for color
    public function getColor() {
        return $this->color;
    }
}

// Create a new instance of Product
$product1 = new Product("Honda", "V6", 20000, "Red");
echo "Product Name: " . $product1->getName() . "<br>";
echo "Engine: " . $product1->getEngine() . "<br>";
echo "Price: $" . $product1->getPrice() . "<br>";
echo "Color: " . $product1->getColor() . "<br>";

// Create another instance of Product
$product2 = new Product("Toyota", "V8", 25000, "Blue");
echo "Product Name: " . $product2->getName() . "<br>";
echo "Engine: " . $product2->getEngine() . "<br>";
echo "Price: $" . $product2->getPrice() . "<br>";
echo "Color: " . $product2->getColor() . "<br>";
?>
