<?php

class Book {

    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize the book properties

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }


    // Getter for title
    public function getTitle() {
        return $this->title;
    }


    // Getter for available copies

    public function getAvailableCopies() {
        return $this->availableCopies;
    }


    // Method to borrow a book

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    // Method to return a book

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {

    // Private property for name

    private $name;


    // Constructor to initialize the member's name

    public function __construct($name) {
        $this->name = $name;
    }

    // Getter for name

    public function getName() {
        return $this->name;
    }

    // Method for a member to borrow a book

    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo $this->name . " borrowed " . $book->getTitle() . "\n";
        } else {
            echo $book->getTitle() . " is not available for borrowing.\n";
        }
    }

    // Method for a member to return a book

    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " returned " . $book->getTitle() . "\n";
        
    }
}


// Usage

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


// Members borrow books
$member1->borrowBook($book1); // John Doe borrows The Great Gatsby
$member2->borrowBook($book2); // Jane Smith borrows To Kill a Mockingbird

// Print available copies after borrowing
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "<br>";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";



?>