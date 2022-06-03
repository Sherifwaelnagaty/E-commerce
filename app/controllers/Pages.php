<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
    public function Products(){
        $viewPath = VIEWS_PATH . 'pages/Products.php';
        require_once $viewPath;
        $productView = new Products($this->getModel(), $this);
        $productView->output();
    }
    public function Account(){
        $viewPath = VIEWS_PATH . 'pages/Account.php';
        require_once $viewPath;
        $AccountView = new Account($this->getModel(), $this);
        $AccountView->output();
    }
    public function AddProducts()
    {
        
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $addproducts->setproductID(trim($_POST['productID']));
            $addproducts->setproduct_name(trim($_POST['product_name']));
            $addproducts->setproduct_type(trim($_POST['product_type']));
            $addproducts->setproduct_price(trim($_POST['product_price']));
            $addproducts->setproduct_image(trim($_POST['product_image']));

            
        }
         $viewPath = VIEWS_PATH . 'pages/AddProducts.php';
        require_once $viewPath;
        $addproducts = new AddProducts($this->getModel(), $this);
        $addproducts->output();
    }
    public function cart()
    {
        $viewPath = VIEWS_PATH . 'pages/cart.php';
        require_once $viewPath;
        $cartView = new cart($this->getModel(), $this);
        $cartView->output();
    }
    public function orders()
    {
        $viewPath = VIEWS_PATH . 'pages/orders.php';
        require_once $viewPath;
        $cartView = new orders($this->getModel(), $this);
        $cartView->output();
    }

}
