<?php

class Book
{
    //properties

    public $title;
    public $price;
    public $author;
    public $available;

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
