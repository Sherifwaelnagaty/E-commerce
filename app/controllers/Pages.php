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
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $registerModel->setproductid(trim($_GET['ID']));
            if($registerModel->Addcart($_GET['ID'])){
                redirect('pages/cart');
            }
        }      
        $viewPath = VIEWS_PATH . 'pages/Products.php';
        require_once $viewPath;
        $productView = new Products($this->getModel(), $this);
        $productView->output();
    }
    public function Account(){
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $registerModel->setFirst_Name(trim($_POST['firstname']));
            $registerModel->setLast_Name(trim($_POST['lastname']));
            $registerModel->set_Email(trim($_POST['email']));
            $registerModel->set_Address(trim($_POST['address']));
            $registerModel->set_MobileNum(trim($_POST['mobile_number']));

            //validation
            if (empty($registerModel->getFirst_Name())) {
                $registerModel->setFirst_NameErr('Please enter a First name');
            }
            if (empty($registerModel->getLast_Name())) {
                $registerModel->setLast_NameErr('Please enter a Last name');
            }
            if (empty($registerModel->get_Email())) {
                $registerModel->set_EmailErr('Please enter an email');
            }
            elseif ($registerModel->email_Exist($_POST['email'])) {
                $registerModel->set_EmailErr('Email is already registered');
            }
            if (empty($registerModel->get_Address())) {
                $registerModel->set_AddressErr('Please enter an address');
            }
            if (
                empty($registerModel->getFirst_NameErr()) &&
                empty($registerModel->getLast_NameErr()) &&
                empty($registerModel->get_EmailErr()) &&
                empty($registerModel->get_AddressErr())
            ) {
                if ($registerModel->Edit()) {
                    redirect('Index');
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
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $dir="images/";
            $Profile_Picture=$dir.$_FILES['product_image']['name'];
            move_uploaded_file($_FILES['Pic']['tmp_name'],$Profile_Picture);   
            $registerModel->setproduct_name(trim($_POST['productname']));
            $registerModel->setproduct_image($Profile_Picture);
            $registerModel->setproduct_price(trim($_POST['productprice']));
            $registerModel->setproduct_type(trim($_POST['producttype']));
            $registerModel->setproductID(trim($_POST['productID']));
            
            if ($registerModel->AddProduct()) {
                redirect('public/Index');
                } else {
                    die('Error');
                }
        }
        $viewPath = VIEWS_PATH . 'pages/AddProducts.php';
        require_once $viewPath;
        $AddProductsView = new AddProducts($this->getModel(), $this);
        $AddProductsView->output();
    }
    public function cart()
    {
        $registerModel = $this->getModel();
        if (isset($_GET['id'])){    
            $registerModel->setcartid(trim($_GET['id']));
            if ($registerModel->Remove()) {
                    redirect('users/login');
                }
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){    
            $registerModel->setcartid(trim($_GET['id']));
            if ($registerModel->Order()) {
                    redirect('Index');
                }
        }
        $viewPath = VIEWS_PATH . 'pages/cart.php';
        require_once $viewPath;
        $cartView = new cart($this->getModel(), $this);
        $cartView->output();
    }
    public function orders()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){    
            $registerModel->setorderID(trim($_GET['id']));            
            if ($registerModel->Cancel()) {
                    redirect('Index');
                } else {
                    die('Error in sign up');
                }
        }
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
?>
