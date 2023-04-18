<?php

class Author{

        //Attributs

        private string $name;
		private string $surname;
        private string $year;
        private string $location;
        private array $book;

		//__constructor
		public function __construct(string $name, string $surname, string $year, string $location, array $book){
			
			$this->name = $name;
			$this->surname = $surname;
			$this->year = $year;
        	$this->location = $location;
        	$this->book = [];
			
	}
	
    //Methods

	public function getInfo(){
			$info = "Books of " . $this . ":<br>";
			foreach($this->book as $book){
			$info .= "-" . $book->getTitle() ." (" . $book->getDate() . ") ". ": " . $book->getPage() . " Pages /" . $book->getPrice ."€ <br>";
        }
        return $info;
	}

	public function addBook(Book $book){
		$this->book[] = $book;
	}
	
    //Getters and setters
	

	public function getName(): string {
		return $this->name;
	}

	public function setName(string $name): self {
		$this->name = $name;
		return $this;
	}
	
	
	public function getSurname()
	{
		return $this->surname;
	}
	
	public function setSurname($surname)
	{
		$this->surname = $surname;
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

    
	public function getBook(): array {
        return $this->book;
	}
    
	public function setBook(array $book): self {
        $this->book = $book;
		return $this;
	}


    //__toString

    public function __toString(){
		return $this->name . " " . $this->surname . " (" . $this->year . ")<br>";
	}

}

?>