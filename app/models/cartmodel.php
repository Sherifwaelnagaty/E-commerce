<?php
require_once 'UserModel.php';
class cartmodel extends UserModel
{
    public  $title = 'User shopping cart Page';
    protected $username;
    protected $productname;
    protected $productid;
    protected $quantity;
    protected $totalprice;


    public function __construct()
    {
        parent::__construct();
        $this->username     = "";
        $this->productname = "";

        $this->productid = "";
        $this->quantity = "";
        $this->totalprice = "";
    }

    public function getusername()
    {
        return $this->username;
    }

    public function setusername($username)
    {
        $this->username = $username;
    }

    public function getuserID()
    {
        return $this->userID;
    }

    public function setuserID($userID)
    {
        $this->userID = $userID;
    }

    public function getproductname()
    {
        return $this->productname;
    }

    public function setproductname($productname)
    {
        $this->productname = $productname;
    }

    public function getproductid()
    {
        return $this->productid;
    }
    public function setproductid($productid)
    {
        $this->productid = $confirmPassword;
    }

    public function getquantity()
    {
        return $this->quantity;
    }
    public function setquantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function gettotalprice()
    {
        return $this->totalprice;
    }
    public function settotalprice($totalprice)
    {
        $this->totalprice = $totalprice;
    }

    public function cart()
    {
        $this->dbh->query("SELECT * FROM users VALUES(:userID, :productID, :productQuantity)");
        $this->dbh->bind(':userID', $this->userID);
        $this->dbh->bind(':productID', $this->productid);
        $this->dbh->bind(':productQuantity', $this->quantity);

        return $this->dbh->execute();
    }
}
