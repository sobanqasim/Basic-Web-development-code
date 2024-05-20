<?php

// Include classes
include = 'LMS.php';
// class definitions

// Create a library with a capacity of 100 books
$library = new Library(100);

// Create a catalog
$catalog = new Catalog();

// Sample books
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);
$book3 = new Book("1984", "George Orwell", 1949);

// Add books to the library and catalog
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

$catalog->addBook($book1);
$catalog->addBook($book2);
$catalog->addBook($book3);

// Function to display available books
function displayAvailableBooks($library) {
    echo "Available books in the library:\n";
    $library->displayBooks();
}

// Function to search for books by title
function searchByTitle($catalog, $title) {
    $searchResults = $catalog->searchByTitle($title);
    if (empty($searchResults)) {
        echo "No books found with the title '$title'.\n";
    } else {
        echo "Search results for '$title':\n";
        foreach ($searchResults as $book) {
            echo "Title: " . $book->getTitle() . "\n";
            echo "Author: " . $book->getAuthor() . "\n";
            echo "Year: " . $book->getYear() . "\n";
            echo "--------------------------\n";
        }
    }
}

// Main program loop
while (true) {
    echo "\nMenu:\n";
    echo "1. Display available books\n";
    echo "2. Search for books by title\n";
    echo "3. Exit\n";
    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case '1':
            displayAvailableBooks($library);
            break;
        case '2':
            $searchTitle = readline("Enter the title to search: ");
            searchByTitle($catalog, $searchTitle);
            break;
        case '3':
            echo "Exiting program. Goodbye!\n";
            exit;
        default:
            echo "Invalid choice. Please try again.\n";
            break;
    }
}

?>
