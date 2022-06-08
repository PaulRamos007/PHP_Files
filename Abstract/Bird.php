<?php require_once 'Animal.php';

//Child Class
class Bird extends Animal
{
    //Implementing the methods
    public function communicate()
    {
        echo "Squeaks";
    }

    public function move()
    {
        echo "fly";
    }
}
