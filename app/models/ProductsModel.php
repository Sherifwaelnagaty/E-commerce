<?php
require_once 'UserModel.php';
class ProductsModel extends UserModel
{
	protected $productid;
    protected $name;
    protected $type;
    protected $size;
    protected $price;
    protected $image;

    public function __construct()
    {
        parent::__construct();
        $this->name = "";
        $this->image = "";
        $this->productid = "";
        $this->size = "";
        $this->price = "";
        $this->type = "";
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
    public function getsize()
    {
        return $this->size;
    }
    public function setsize($size)
    {
        $this->size = $size;
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
     public function Remove()
    {
      $this->dbh->query("DELETE FROM `products` WHERE productID=:productid");
        $this->dbh->bind(':productid', $this->productid);
        return $this->dbh->resultSet();
    }
    public function Edit(){
    $this->dbh->query("UPDATE users SET name=:product_name,type=:product_type,price=:product_price,image=:product_image,size=:produuct_size where productID=:productID");
    $this->dbh->bind(':productID', $_SESSION['productID']);
    $this->dbh->bind(':name', $this->name);
    $this->dbh->bind(':type', $this->type);
    $this->dbh->bind(':price', $this->price);
    $this->dbh->bind(':image', $this->image);
    $this->dbh->bind(':size', $this->size);
    return $this->dbh->execute();
    }
}
?>
