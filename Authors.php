<?php

class Author{

        //Attributs

        private string $name;
        private string $year;
        private string $location;
        private Book $book;

    //__constructor
    public function __constructor(string $name, string $year, string $location, Book $book){

        $this->name = $name;
        $this->year = $year;
        $this->location = $location;
        $this->book = $book;

}

    //Methods


    //Getters and setters

	public function getName(): string {
		return $this->name;
	}

	public function setName(string $name): self {
		$this->name = $name;
		return $this;
	}

	
	public function getYear(): string {
		return $this->year;
	}

	public function setYear(string $year): self {
		$this->year = $year;
		return $this;
	}

	
	public function getLocation(): string {
		return $this->location;
	}

	public function setLocation(string $location): self {
		$this->location = $location;
		return $this;
	}

    
	public function getBook(): Book {
        return $this->book;
	}
    
	public function setBook(Book $book): self {
        $this->book = $book;
		return $this;
	}
    //__toString

    

}
?>