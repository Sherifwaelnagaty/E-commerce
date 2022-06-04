<?php
require_once 'UserModel.php';
class Products_DetailedModel extends model
{
	protected $productid;
    protected $product_name;
    protected $product_type;
    protected $product_price;
    protected $product_image;

    public function __construct()
    {
        parent::__construct();
        $this->productid = "";
        $this->product_name = "";
        $this->product_image = "";
        $this->product_price = "";
        $this->product_type= "";
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
        return $this->product_name;
    }
    public function setname($product_name)
    {
        $this->product_name = $product_name;
    }
    public function getimage()
    {
        return $this->product_image;
    }
    public function setimage($product_image)
    {
        $this->productname = $product_image;
    }
    public function getprice()
    {
        return $this->product_price;
    }
    public function setprice($product_price)
    {
        $this->product_price = $product_price;
    }
    public function gettype()
    {
        return $this->product_type;
    }
    public function settype($product_type)
    {
        $this->product_type = $product_type;
    }
    public function product($productid)
    {
        $this->dbh->query("SELECT * FROM products where productid=:productid");
        $this->dbh->bind(':productid', $productid);    
        return $this->dbh->resultSet();
    }
    public function Sizes($productid)
    {
        $this->dbh->query("SELECT Size FROM products,size where products.productID=size.productID AND products.productID=:productid");
        $this->dbh->bind(':productid', $productid);    
        return $this->dbh->resultSet();
    }
    public function deleteproduct()
    {
        $this->dbh->query("DELETE FROM products WHERE productID =:productid");
        $this->dbh->bind(':productid', $this->productid);
        return $this->dbh->execute();    
    }
    public function Addcart($productid){
        $this->dbh->query("INSERT INTO `cart`(`productID`, `userID`, `productQuantity`) VALUES ($productid,:userID,1)");
        $this->dbh->bind(':userID', $_SESSION['userID']);
        return $this->dbh->resultSet();
    }
}
?>
