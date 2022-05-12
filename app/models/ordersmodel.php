<?php
require_once 'UserModel.php';
class ordersmodel extends UserModel
{
    protected $orderID;
    protected $customerID;
    protected $dateoforder;
    protected $totalprice;

    public function __construct()
    {
        parent::__construct();
        $this->customerID = "";
        $this->dateoforder = "";
        $this->totalprice = "";
    }
    public function getcustomerID()
    {
        return $this->customerID;
    }
    public function setcustomerID($customerID)
    {
        $this->customerID = $customerID;
    }
    public function getdateoforder()
    {
        return $this->dateoforder;
    }
    public function setdateoforder($dateoforder)
    {
        $this->dateoforder = $dateoforder;
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
