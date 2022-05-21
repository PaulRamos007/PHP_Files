<?php

class MyException extends Exception
{
    function test()
    {
        $errorMessage = "My exception message: " . $this->getMessage() . "<br/>" .
            "Error on line number: " . $this->getLine();

        return $errorMessage;
    }
}

function inverse($num)
{
    try {
        if (!$num) {
            throw new Exception("Enter a valid number.");
        }
        if ($num == 3) {
            throw new MyException("Number cannot be 3");
        }
        $value = 2 / $num;
        echo $value;
    } catch (Myexception $ex) {
        echo $ex->test();
    } catch (Exception $ex) {
        echo $ex->getMessage();
        echo "<br />";
        echo $ex->getLine();
        echo "<br />";
        echo $ex->getFile();
    } finally {
        echo "<br />";
        echo "This code will always be executed";
    }
}

inverse(3);
inverse(0);
