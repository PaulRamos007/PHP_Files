<?php

class ErrorClass
{
    //Properties
    public $int;
    public $str;

    //Methods
    public function setString($st)
    {
        if (is_string($st)) {
            $this->str = $st;
        } else {
            $this->displayError($st, "Only String values are allowed");
        }
    }

    public function setInteger($it)
    {
        if (is_int($it)) {
            $this->int = $it;
        } else {
            $this->displayError($it, "Only integer values are allowed");
        }
    }

    public function displayError($val, $msg)
    {
        echo "$val, $msg </br>";
    }
}
