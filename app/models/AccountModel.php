<?php
require_once 'UserModel.php';
class AccountModel extends UserModel
{
    protected $firstName;
    protected $firstNameErr;

    protected $lastName;
    protected $lastNameErr;

    protected $address;
    protected $addressErr;

    protected $mobileNum;
    protected $mobileNumErr;

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
    }
    public function getFirst_Name()
    {
        return $this->firstName;
    }
    public function setFirst_Name($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getFirst_NameErr()
    {
        return $this->firstNameErr;
    }
    public function setFirst_NameErr($firstNameErr)
    {
        $this->firstNameErr = $firstNameErr;
    }
    public function getLast_Name()
    {
        return $this->lastName;
    }
    public function setLast_Name($lastName)
    {
        $this->lastName = $lastName;
    }
    public function getLast_NameErr()
    {
        return $this->lastNameErr;
    }
    public function setLast_NameErr($lastNameErr)
    {
        $this->lastNameErr = $lastNameErr;
    }
    public function get_Address()
    {
        return $this->address;
    }
    public function set_Address($address)
    {
        $this->address = $address;
    }
    public function get_AddressErr()
    {
        return $this->addressErr;
    }
    public function set_AddressErr($addressErr)
    {
        $this->addressErr = $addressErr;
    }
    public function get_MobileNum()
    {
        return $this->mobileNum;
    }
    public function set_MobileNum($mobileNum)
    {
        $this->mobileNum = $mobileNum;
    }
    public function get_MobileNumErr()
    {
        return $this->mobileNumErr;
    }
    public function set_MobileNumErr($mobileNumErr)
    {
        $this->mobileNumErr = $mobileNumErr;
    }
    public function get_Email()
    {
        return $this->email;
    }
    public function set_Email($email)
    {
        $this->email = $email;
    }
    public function get_EmailErr()
    {
        return $this->emailErr;
    }
    public function set_EmailErr($emailErr)
    {
        $this->emailErr = $emailErr;
    }
    public function email_Exist($email)
    {
        return $this->findUserByEmail($email) > 0;
    }
    public function Edit(){
    $this->dbh->query("UPDATE users SET FirstName=:firstname,LastName=:lastname,Address=:address,Email=:email,MobileNumber=:mobilenum where userID=:userID");
    $this->dbh->bind(':userID', $_SESSION['userID']);
    $this->dbh->bind(':firstname', $this->firstName);
    $this->dbh->bind(':lastname', $this->lastName);
    $this->dbh->bind(':email', $this->email);
    $this->dbh->bind(':address', $this->address);
    $this->dbh->bind(':mobilenum', $this->mobileNum);
    return $this->dbh->execute();
    }
}
?>
