<?php

class AddProductsModel extends model
{
	protected productID;
	protected product_name;
	protected product_type;
	protected product_price;
	protected product_image;

	public function__construct()
	{
		parent::__construct();
		$this->productID = "";
		$this->product_name = "";
		$this->product_type = "";
		$this->product_price = "";
		$this->product_image = "";
	}

	public function getproductID()
    {
        return $this->productID;
    }

    public function getproduct_name()
    {
        return $this->product_name;
    }

    public function getproduct_type()
    {
        return $this->product_type;
    }

    public function getproduct_price()
    {
        return $this->product_price;
    }

    public function getproduct_image()
    {
        return $this->product_image;
    }


    public function setproductID($productID)
    {
        $this->productID = $productID;
    }

    public function setproduct_name($product_name)
    {
        $this->product_name = $product_name;
    }
    public function setproduct_type($product_type)
    {
        $this->product_type = $product_type;
    }
    public function setproduct_price($product_price)
    {
        $this->product_price = $product_price;
    }
    public function setproduct_image($product_image)
    {
        $this->product_image = $product_image;
    }


     public function addProduct()
    {
        $this->dbh->query("INSERT INTO users (`productID`, `product_name` , `product_type`, `product_price`, `product_image `) 
            VALUES(:productID, :product_name, :product_type, :product_price, :product_image)");
        $this->dbh->bind(':productID', $this->productID);
        $this->dbh->bind(':product_name', $this->product_name);
        $this->dbh->bind(':product_type', $this->product_type);
        $this->dbh->bind(':product_price', $this->product_price);
        $this->dbh->bind(':product_image', $this->product_image);
        return $this->dbh->execute();
    }

}
?>