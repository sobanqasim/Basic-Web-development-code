<?php

// Book class
class Book {
    private $title;
    private $author;
    private $year;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getYear() {
        return $this->year;
    }
}

// Library class
class Library {
    private $books = array();
    private $maxBooks;

    public function __construct($maxBooks) {
        $this->maxBooks = $maxBooks;
    }

    public function addBook($book) {
        if (count($this->books) < $this->maxBooks) {
            $this->books[] = $book;
            echo "Book added successfully.\n";
        } else {
            echo "Library is full. Cannot add more books.\n";
        }
    }

    public function displayBooks() {
        if (empty($this->books)) {
            echo "No books in the library.\n";
        } else {
            echo "List of books in the library:\n";
            foreach ($this->books as $book) {
                echo "Title: " . $book->getTitle() . "\n";
                echo "Author: " . $book->getAuthor() . "\n";
                echo "Year: " . $book->getYear() . "\n";
                echo "--------------------------\n";
            }
        }
    }
}

// Member class
class Member {
    private $name;
    private $contact;
    private $borrowedBooks = array();

    public function __construct($name, $contact) {
        $this->name = $name;
        $this->contact = $contact;
    }

    // Additional methods for member management can be added here
}

// Catalog class
class Catalog {
    private $books = array();

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function searchByTitle($title) {
        $result = array();
        foreach ($this->books as $book) {
            if (strpos($book->getTitle(), $title) !== false) {
                $result[] = $book;
            }
        }
        return $result;
    }

    // Additional methods for catalog management can be added here
}

// Loan class
class Loan {
    private $book;
    private $member;
    private $dueDate;

    public function __construct($book, $member, $dueDate) {
        $this->book = $book;
        $this->member = $member;
        $this->dueDate = $dueDate;
    }

    // Additional methods for loan management can be added here
}

// Genre class
class Genre {
    private $name;
    private $books = array();

    public function __construct($name) {
        $this->name = $name;
    }

    public function addBook($book) {
        $this->books[] = $book;
    }

    // Additional methods for genre management can be added here
}

// Author class
class Author {
    private $name;
    private $books = array();

    public function __construct($name) {
        $this->name = $name;
    }

    public function addBook($book) {
        $this->books[] = $book;
    }

    // Additional methods for author management can be added here
}

// Sample usage:

// Create a library
$library = new Library(100);

// Create books
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);
$book3 = new Book("1984", "George Orwell", 1949);

// Add books to the library
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// Display all books in the library
$library->displayBooks();

// Create a catalog and add books
$catalog = new Catalog();
$catalog->addBook($book1);
$catalog->addBook($book2);
$catalog->addBook($book3);

// Search for books by title
$searchResults = $catalog->searchByTitle("Gatsby");
echo "Search results for 'Gatsby':\n";
foreach ($searchResults as $book) {
    echo "Title: " . $book->getTitle() . "\n";
    echo "Author: " . $book->getAuthor() . "\n";
    echo "Year: " . $book->getYear() . "\n";
    echo "--------------------------\n";
}

// Create a genre and add books
$genre = new Genre("Fiction");
$genre->addBook($book1);
$genre->addBook($book2);

// Create an author and associate books
$author = new Author("F. Scott Fitzgerald");
$author->addBook($book1);

// Create a member
$member = new Member("John Doe", "john@example.com");

?>
