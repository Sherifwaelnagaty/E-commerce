<?php
require_once 'UserModel.php';
class cartmodel extends UserModel
{
    protected $productid;
    protected $quantity;
    protected $image;
    protected $price;
    protected $name;
    public function __construct()
    {
        parent::__construct();
        $this->productid = "";
        $this->quantity = "";
        $this->price= "";
        $this->image= "";
        $this->name= "";
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
    public function getquantity()
    {
        return $this->quantity;
    }
    public function setquantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name = $name;
    }
    public function getprice()
    {
        return $this->price;
    }
    public function setprice($price)
    {
        $this->price = $price;
    }
    public function getimage()
    {
        return $this->image;
    }
    public function setimage($image)
    {
        $this->image = $image;
    }
    public function cart()
    {
        $this->dbh->query("SELECT cart.productQuantity,products.product_name,products.product_price FROM products,cart,users where products.productID=cart.productID AND users.userID=cart.userID AND users.userID=:userID");
        $this->dbh->bind(':userID', $this->getuserid());
        return $this->dbh->resultSet();
    }
    public function Addcart($productid){
        $this->dbh->query("INSERT INTO `cart`(`productID`, `userID`, `productQuantity`) VALUES ($productid,:userID,1)");
        $this->dbh->bind(':userID', $this->userid);
        return $this->dbh->resultSet();
    }
}
?>
