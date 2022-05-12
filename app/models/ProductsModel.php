<?php
require_once 'UserModel.php';
class ProductsModel extends UserModel
{
	protected $productid;
    protected $name;
    protected $type;
    protected $quantity;
    protected $price;
    protected $image;

    public function __construct()
    {
        parent::__construct();
        $this->name = "";
        $this->productname = "";
        $this->image = "";
        $this->productid = "";
        $this->quantity = "";
        $this->price = "";
    }
    public function getproductid()
    {
        return $this->productid;
    }
    public function setproductid($productid)
    {
        $this->productid = $productid;
    }
    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name = $name;
    }
    public function getimage()
    {
        return $this->image;
    }
    public function setimage($image)
    {
        $this->productname = $productname;
    }
    public function getprice()
    {
        return $this->price;
    }
    public function setprice($price)
    {
        $this->price = $price;
    }
    public function getquantity()
    {
        return $this->quantity;
    }
    public function setquantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function gettype()
    {
        return $this->type;
    }
    public function settype($type)
    {
        $this->type = $type;
    }
    public function product()
    {
        $this->dbh->query("SELECT * FROM products VALUES(:userID, :productID, :productQuantity)");
        $this->dbh->bind(':userID', $this->userID);
        $this->dbh->bind(':productID', $this->productid);
        $this->dbh->bind(':productQuantity', $this->quantity);
        $this->dbh->bind(':name', $this->name);
        $this->dbh->bind(':type', $this->type);
        $this->dbh->bind(':image', $this->image);
        $this->dbh->bind(':price', $this->price);
        return $this->dbh->execute();
    }
}
?>