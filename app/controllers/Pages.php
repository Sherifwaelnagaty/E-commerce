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
        $viewPath = VIEWS_PATH . 'pages/AddProducts.php';
        require_once $viewPath;
        $AddProductsView = new AddProducts($this->getModel(), $this);
        $AddProductsView->output();
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
        $ordersView = new orders($this->getModel(), $this);
        $ordersView->output();
    }
    public function Products_Detailed()
    {
        $viewPath = VIEWS_PATH . 'pages/Products_Detailed.php';
        require_once $viewPath;
        $Products_DetailedView = new Products_Detailed($this->getModel(), $this);
        $Products_DetailedView->output();
    }

}
