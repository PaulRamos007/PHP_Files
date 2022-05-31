<?php

class Book
{
    //properties

    public $title;
    public $price;
    public $author;
    public $available;

    //Magic Methods
    public function __construct($title, $price, $author, $available)
    {
        $this->title = $title;
        $this->price = $price;
        $this->author = $author;
        $this->available = $available;
    }


    //Methods or functions

    public function getCopy()
    {
        if ($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }
}
