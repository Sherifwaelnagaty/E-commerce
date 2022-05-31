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
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
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
    public function getMobileNum()
    {
        return $this->mobileNum;
    }
    public function setMobileNum($mobileNum)
    {
        $this->mobileNum = $mobileNum;
    }
    public function getMobileNumErr()
    {
        return $this->mobileNumErr;
    }
    public function setMobileNumErr($mobileNumErr)
    {
        $this->mobileNumErr = $mobileNumErr;
    }
    public function Edit(){
    $this->dbh->query("UPDATE users SET FirstName=:firstname,LastName=:lastname,Address=:address,Email=:email,MobileNumber=:mobilenum where FirstName=:firstname1 AND LastName= :lastname1 AND Address=:address1 AND Email= :email1 AND MobileNumber=:mobilenum1 AND userID=:userID");
    $this->dbh->bind(':userID', $this->userid);
    $this->dbh->bind(':firstname', $this->firstName);
    $this->dbh->bind(':lastname', $this->lastName);
    $this->dbh->bind(':email', $this->email);
    $this->dbh->bind(':address', $this->address);
    $this->dbh->bind(':mobilenum', $this->mobilenum);
    $this->dbh->bind(':firstname1', $_SESSION['FirstName']);
    $this->dbh->bind(':lastname1', $_SESSION['LastName']);
    $this->dbh->bind(':email1', $_SESSION['Email']);
    $this->dbh->bind(':address1',$_SESSION['Address']);
    $this->dbh->bind(':mobilenum1', $_SESSION['MobileNumber']);
    return $this->dbh->execute();
    }
}
?>
