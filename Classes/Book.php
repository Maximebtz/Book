<?php

class Book{

    //Attibuts

    private string $title;
	private string $date;
    private int $page;
    private float $price;
    private Author $author;


    //__constructor

    public function __construct(string $title, string $date, int $page, float $price, Author $author){

            $this->title = $title;
			$this->date = $date;
            $this->page = $page;
            $this->price = $price;
            $this->author = $author;
			$this->author->addBook($this);
    }

    
    //Getters and setters

	public function getTitle(): string {
		return $this->title;
	}

	public function setTitle(string $title): self {
		$this->title = $title;
		return $this;
	}


	public function getDate()
	{
		return $this->date;
	}

	public function setDate($date)
	{
		$this->date = $date;
		return $this;
	}

	
	public function getPage(): int {
		return $this->page;
	}

	public function setPage(int $page): self {
		$this->page = $page;
		return $this;
	}

	
	public function getPrice(): float {
		return $this->price;
	}

	public function setPrice(float $price): self {
		$this->price = $price;
		return $this;
	}

	
	public function getAuthor(): Author {
		return $this->author;
	}

	public function setAuthor(Author $author): self {
		$this->author = $author;
		return $this;
	}


    //__toString
	public function __toString(){
		return  $this->title . " écrit par " . $this->author . "<br>" ;
	}

}

?>