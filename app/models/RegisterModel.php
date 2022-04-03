<?php
require_once 'UserModel.php';
class RegisterModel extends UserModel
{
    public  $title = 'Register';
    protected $firstName;
    protected $firstNameErr;
    protected $lastName;
    protected $lastNameErr;
    protected $address;
    protected $addressErr;
    protected $moblieNum;
    protected $mobileNumErr;
    protected $birthdate;
    protected $birthdateErr;
    protected $gender;
    protected $genderErr;
    protected $confirmPassword;
    protected $confirmPasswordErr;


    public function __construct()
    {
        parent::__construct();
        $this->firstName = "";
        $this->firstNameErr = "";

        $this->lastName = "";
        $this->lastNameErr = "";

        $this->address = "";
        $this->addressErr = "";

        $this->mobileNum = "";
        $this->mobileNumErr = "";

        $this->birthdate = "";
        $this->birthdateErr = "";

        #$this->gender = male;

        $this->confirmPassword = "";
        $this->confirmPasswordErr = "";
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firsttName;
    }

    public function getFirstNameErr()
    {
        return $this->firstNameErr;
    }

    public function setFirstNameErr($firstNameErr)
    {
        $this->firstNameErr = $firstNameErr;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastNameErr()
    {
        return $this->lastNameErr;
    }

    public function setLastNameErr($lastNameErr)
    {
        $this->lastNameErr = $lastNameErr;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddressErr()
    {
        return $this->addressErr;
    }

    public function setAddressErr($addressErr)
    {
        $this->addressErr = $addressErr;
    }


    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }

    public function getConfirmPasswordErr()
    {
        return $this->confirmPasswordErr;
    }
    public function setConfirmPasswordErr($confirmPasswordErr)
    {
        $this->confirmPasswordErr = $confirmPasswordErr;
    }

    public function signup()
    {
        $this->dbh->query("INSERT INTO users (`name`, `email`, `address` `password`) VALUES(:uname, :email, :address, :pass)");
        $this->dbh->bind(':uname', $this->name);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':address', $this->address);
        $this->dbh->bind(':pass', $this->password);

        return $this->dbh->execute();
    }
}
