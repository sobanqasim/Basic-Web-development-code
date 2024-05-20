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

// Function to get input from user
function getInput($prompt) {
    echo $prompt . ": ";
    return readline();
}

// Prompt user to input product name
$name = getInput("Enter product name (Options: honda, toyota, BMW, mercedes, volvo, fortuner)");

// Validate user input
$options = ['honda', 'toyota', 'BMW', 'mercedes', 'volvo', 'fortuner'];
if (!in_array(strtolower($name), $options)) {
    echo "Invalid product name. Please choose from the given options.";
    exit;
}

// Create a new instance of Product
$product = new Product($name);

// Get and display the properties of the product
echo "Product Name: " . $product->getName() . "\n";
echo "Engine: " . $product->getEngine() . "\n";
echo "Price: $" . $product->getPrice() . "\n";
echo "Color: " . $product->getColor() . "\n";
?>
