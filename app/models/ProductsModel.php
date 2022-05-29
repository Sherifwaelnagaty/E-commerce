<?php
require_once 'UserModel.php';
class ProductsModel extends UserModel
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
    public function product()
    {
        $this->dbh->query("SELECT * FROM products");
        return $this->dbh->resultSet();
    }
    public function productcount()
    {
        $this->product();
        return $this->dbh->rowCount();
    }
}
?>
