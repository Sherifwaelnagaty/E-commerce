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
    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }

}
