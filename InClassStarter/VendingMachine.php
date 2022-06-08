<?php require_once 'Product.php';

//Class
class VendingMachine extends Product
{
    private $availableItems;
    private $credit = 0;

    public function addCoin($coin)
    {
        if (!in_array($coin, array(0.05, 0.1, 0.25, 1))) {
            return;
        }

        $this->credit += $coin;
    }

    public function getCurrentCredit()
    {
        return $this->credit;
    }

    public function sellItem($item)
    {
        $item = Product::getProduct();
        $this->credit = $this->credit - $this->availableItems[$item];
    }

    public function returnCredit()
    {
        $return = $this->credit;
        $this->credit = 0;
        return $return;
    }
}
