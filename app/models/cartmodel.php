<?php
require_once 'UserModel.php';
class cartmodel extends UserModel
{
    protected $userid;
    protected $productid;
    protected $quantity;

    public function __construct()
    {
        parent::__construct();
        $this->productid = "";
        $this->quantity = "";
        $this->userid = "";
    }
    public function getuserid()
    {
        return $this->userid;
    }
    public function setuserid($userid)
    {
        $this->userid = $userid;
    }
    public function getproductid()
    {
        return $this->productid;
    }
    public function setproductid($productid)
    {
        $this->productid = $productid;
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
    public function cart()
    {
        $this->dbh->query("SELECT * FROM products VALUES(:userID, :productID, :productQuantity)");
        $this->dbh->bind(':userID', $this->userid);
        $this->dbh->bind(':productID', $this->productid);
        $this->dbh->bind(':productQuantity', $this->quantity);
        return $this->dbh->execute();
    }
}
?>
