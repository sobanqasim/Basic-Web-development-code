<?php
class Product {
    // Properties with visibility modifiers
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

    // Getter methods with public visibility
    public function getName() {
        return $this->name;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getColor() {
        return $this->color;
    }

    // Setter methods with public visibility
    public function setName($name) {
        $this->name = $name;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setColor($color) {
        $this->color = $color;
    }
}

// Create a new instance of Product
$product = new Product("Honda", "V6", 20000, "Red");

// Accessing properties and methods outside the class
echo "Product Name: " . $product->getName() . "<br>";
echo "Engine: " . $product->getEngine() . "<br>";
echo "Price: $" . $product->getPrice() . "<br>";
echo "Color: " . $product->getColor() . "<br>";

// Modifying properties using setter methods
$product->setName("Toyota");
$product->setEngine("V8");
$product->setPrice(25000);
$product->setColor("Blue");

// Displaying updated properties
echo "Updated Product Name: " . $product->getName() . "<br>";
echo "Updated Engine: " . $product->getEngine() . "<br>";
echo "Updated Price: $" . $product->getPrice() . "<br>";
echo "Updated Color: " . $product->getColor() . "<br>";
?>
