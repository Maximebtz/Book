<?php

class Book{

    //Attibuts

    private string $title;
    private int $page;
    private float $price;
    private Author $author;


    //__constructor

    public function __constructor(string $title, int $page, float $price, Author $author){

            $this->title = $title;
            $this->page = $page;
            $this->price = $price;
            $this->author = $author;

    }

    
    //Getters and setters

	public function getTitle(): string {
		return $this->title;
	}

	public function setTitle(string $title): self {
		$this->title = $title;
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

    
}

?>