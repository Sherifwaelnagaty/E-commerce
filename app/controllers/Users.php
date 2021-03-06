<?php
class Users extends Controller
{
    public function register()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $registerModel->setFirstName(trim($_POST['firstname']));
            $registerModel->setLastName(trim($_POST['lastname']));
            $registerModel->setGender(trim($_POST['gender']));
            $registerModel->setBirthdate(trim($_POST['birth_date']));
            $registerModel->setEmail(trim($_POST['email']));
            $registerModel->setAddress(trim($_POST['address']));
            $registerModel->setMobileNum(trim($_POST['mobile_number']));
            $registerModel->setPassword(trim($_POST['password']));
            $registerModel->setConfirmPassword(trim($_POST['confirm_password']));

            //validation
            if (empty($registerModel->getFirstName())) {
                $registerModel->setFirstNameErr('Please enter a  First name');
            }
            if (empty($registerModel->getLastName())) {
                $registerModel->setLastNameErr('Please enter a Last name');
            }
            if (empty($registerModel->getBirthdate())) {
                $registerModel->setBirthdateErr('Please enter a birthdate');
            }
            if (empty($registerModel->getEmail())) {
                $registerModel->setEmailErr('Please enter an email');
            } elseif ($registerModel->emailExist($_POST['email'])) {
                $registerModel->setEmailErr('Email is already registered');
            }
            if (empty($registerModel->getAddress())) {
                $registerModel->setAddressErr('Please enter an address');
            }
            if (empty($registerModel->getPassword())) {
                $registerModel->setPasswordErr('Please enter a password');
            } 
            if (empty($registerModel->getConfirmPassword())) {
                $registerModel->setConfirmPasswordErr('Please enter the password again');
            }
            if (empty($registerModel->getGender())) {
                $registerModel->setGenderErr('Please choose a gender');
            }
            if (empty($registerModel->getMobileNum())) {
                $registerModel->setMobileNumErr('Please enter an Mobile number');
            } elseif (is_numeric($registerModel->getMobileNum()) == false){
                $registerModel->setMobileNumErr('Mobile number must only contain numbers');
            }
            if (empty($registerModel->getPassword())) {
                $registerModel->setPasswordErr('Please enter a password');
            } elseif (strlen($registerModel->getPassword()) < 4) {
                $registerModel->setPasswordErr('Password must contain at least 4 characters');
            }

            if ($registerModel->getPassword() != $registerModel->getConfirmPassword()) {
                $registerModel->setConfirmPasswordErr('Passwords do not match');
            }

            if (
                empty($registerModel->getFirstNameErr()) &&
                empty($registerModel->getLastNameErr()) &&
                empty($registerModel->getBirthdateErr()) &&
                empty($registerModel->getEmailErr()) &&
                empty($registerModel->getAddressErr()) &&
                empty($registerModel->getMobileNumErr()) &&
                empty($registerModel->getPasswordErr()) &&
                empty($registerModel->getConfirmPasswordErr())
            ) {
                //Hash Password
                $registerModel->setPassword(password_hash($registerModel->getPassword(), PASSWORD_DEFAULT));

                if ($registerModel->signup()) {
                    //header('location: ' . URLROOT . 'users/login');
                    flash('register_success', 'You have registered successfully');
                    redirect('users/login');
                } else {
                    die('Error in sign up');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/Register.php';
        require_once $viewPath;
        $view = new Register($this->getModel(), $this);
        $view->output();
    }
    public function login()
    {
        $userModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $userModel->setEmail(trim($_POST['email']));
            $userModel->setPassword(trim($_POST['password']));

            //validate login form
            if (empty($userModel->getEmail())) {
                $userModel->setEmailErr('Please enter an email');
            } elseif (!($userModel->emailExist($_POST['email']))) {
                $userModel->setEmailErr('No user found');
            }

            if (empty($userModel->getPassword())) {
                $userModel->setPasswordErr('Please enter a password');
            } elseif (strlen($userModel->getPassword()) < 4) {
                $userModel->setPasswordErr('Password must contain at least 4 characters');
            }

            // If no errors
            if (
                empty($userModel->getEmailErr()) &&
                empty($userModel->getPasswordErr())
            ) {
                //Check login is correct
                $loggedUser = $userModel->login();
                if ($loggedUser) {
                    //create related session variables
                    $this->createUserSession($loggedUser);
                    die('Success log in User');
                } else {
                    $userModel->setPasswordErr('Password is not correct');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/Login.php';
        require_once $viewPath;
        $view = new Login($userModel, $this);
        $view->output();
    }

    public function createUserSession($user)
    {
        $_SESSION['userID'] = $user->userID;
        $_SESSION['FirstName'] = $user->FirstName;
        $_SESSION['LastName'] = $user->LastName;
        $_SESSION['Address'] = $user->Address;
        $_SESSION['Email'] = $user->Email;
        $_SESSION['MobileNumber'] = $user->MobileNumber;
        $_SESSION['Type']= $user->Type;
        //header('location: ' . URLROOT . 'pages');
        redirect('pages');
    }

    public function logout()
    {
        echo 'logout called';
        unset($_SESSION['userID']);
        unset($_SESSION['FirstName']);
        unset($_SESSION['LastName']);
        unset($_SESSION['Address']);
        unset($_SESSION['Email']);
        unset($_SESSION['MobileNumber']);
        unset($_SESSION['Type']);
        session_destroy();
        redirect('users/login');
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['userID']);
    }
}
