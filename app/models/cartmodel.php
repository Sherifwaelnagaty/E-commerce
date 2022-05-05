<?php
require_once 'UserModel.php';
class cartmodel extends UserModel
{
    protected $userid;
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
        $this->userid = "";
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
        $this->dbh->query("SELECT cart.productQuantity,products.product_name,products.product_price,products.product_image FROM products, cart where products.productID=cart.productID AND products.productID=:userID VALUES(:productQuantity, :productname, :price,:image)");
        $this->dbh->bind(':userID', $this->userid);
        $this->dbh->bind(':productQuantity', $this->quantity);
        $this->dbh->bind(':productname', $this->name);
        $this->dbh->bind(':price', $this->price);
        $this->dbh->bind(':image', $this->image);
        return $this->dbh->single();
    }
}
?>