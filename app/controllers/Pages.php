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
         $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $registerModel->setFirstName(trim($_POST['firstname']));
            $registerModel->setLastName(trim($_POST['lastname']));
            $registerModel->setEmail(trim($_POST['email']));
            $registerModel->setAddress(trim($_POST['address']));
            $registerModel->setMobileNum(trim($_POST['mobile_number']));

            //validation
            if (empty($registerModel->getFirstName())) {
                $registerModel->setFirstNameErr('Please enter a First name');
            }
            if (empty($registerModel->getLastName())) {
                $registerModel->setLastNameErr('Please enter a Last name');
            }
            if (empty($registerModel->getEmail())) {
                $registerModel->setEmailErr('Please enter an email');
            }elseif ($registerModel->emailExist($_POST['email'])) {
                $registerModel->setEmailErr('Email is already registered');
            }
            if (empty($registerModel->getAddress())) {
                $registerModel->setAddressErr('Please enter an address');
            }
            if (
                empty($registerModel->getFirstNameErr()) &&
                empty($registerModel->getLastNameErr()) &&
                empty($registerModel->getEmailErr()) &&
                empty($registerModel->getAddressErr())
            ) {
                if ($registerModel->Edit()) {
                    //header('location: ' . URLROOT . 'users/login');
                    flash('register_success', 'You have registered successfully');
                    redirect('public');
                } else {
                    die('Error in sign up');
                }
            }
        }
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
