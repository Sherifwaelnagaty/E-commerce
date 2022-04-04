<?php
require_once 'UserModel.php';
class ordersmodel extends UserModel
{
    public  $title = 'User shopping cart Page';
    protected $customername;
    protected $customerID;
    protected $productname;
    protected $productID;
    protected $quantity;
    protected $dateoforder;
    protected $priceperproduct;
    protected $totalprice;

    public function __construct()
    {
        parent::__construct();
        $this->customername     = "";
        $this->customerID = "";

        $this->productname = "";
        $this->productID = "";
        $this->quantity = "";
        $this->dateoforder = "";
        $this->priceperproduct = "";
        $this->totalprice = "";
    }

    public function getcustomername()
    {
        return $this->customername;
    }

    public function setcustomername($customername)
    {
        $this->customername = $customername;
    }

    public function getcustomerID()
    {
        return $this->customerID;
    }

    public function setcustomerID($customerID)
    {
        $this->customerID = $customerID;
    }

    public function getproductname()
    {
        return $this->productname;
    }

    public function setproductname($productname)
    {
        $this->productname = $productname;
    }

    public function getproductID()
    {
        return $this->productID;
    }
    public function setproductID($productID)
    {
        $this->productID = $productID;
    }

    public function getquantity()
    {
        return $this->quantity;
    }
    public function setquantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getdateoforder()
    {
        return $this->dateoforder;
    }
    public function setdateoforder($dateoforder)
    {
        $this->dateoforder = $dateoforder;
    }
    public function getpriceperproduct()
    {
        return $this->priceperproduct;
    }
    public function setpriceperproduct($priceperproduct)
    {
        $this->priceperproduct = $priceperproduct;
    }
    public function gettotalprice()
    {
        return $this->totalprice;
    }
    public function settotalprice($totalprice)
    {
        $this->totalprice = $totalprice;
    }
}
