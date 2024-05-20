<?php
class Product {
    // Properties
    private $name;
    private $engine;
    private $price;
    private $color;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
        // Set engine, price, and color based on product name
        switch ($name) {
            case 'honda':
                $this->engine = 'V6';
                $this->price = 20000;
                $this->color = 'Red';
                break;
            case 'toyota':
                $this->engine = 'V8';
                $this->price = 25000;
                $this->color = 'Blue';
                break;
            case 'BMW':
                $this->engine = 'V12';
                $this->price = 50000;
                $this->color = 'Black';
                break;
            case 'mercedes':
                $this->engine = 'V8';
                $this->price = 60000;
                $this->color = 'Silver';
                break;
            case 'volvo':
                $this->engine = 'V6';
                $this->price = 35000;
                $this->color = 'White';
                break;
            case 'fortuner':
                $this->engine = 'V6';
                $this->price = 45000;
                $this->color = 'Grey';
                break;
            default:
                echo "Invalid product name.";
                exit;
        }
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

// Get selected product from form submission
if(isset($_POST['product'])) {
    $productName = $_POST['product'];

    // Create a new instance of Product
    $product = new Product($productName);

    // Display the selected product details
    echo "<h2>Selected Product Details:</h2>";
    echo "<p><strong>Product Name:</strong> " . $product->getName() . "</p>";
    echo "<p><strong>Engine:</strong> " . $product->getEngine() . "</p>";
    echo "<p><strong>Price:</strong> $" . $product->getPrice() . "</p>";
    echo "<p><strong>Color:</strong> " . $product->getColor() . "</p>";
} else {
    echo "No product selected.";
}
?>
