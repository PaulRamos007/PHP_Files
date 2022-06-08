<?php

//Class
class Product
{
    //Properties
    public $product = array('Chocolate bars' => 1.25, 'Pop' => 1.50, 'Chips' => 1.75);

    //Constructor
    public function __construct($product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }
}
