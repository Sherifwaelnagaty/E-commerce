<?php
require_once 'UserModel.php';
class RegisterModel extends UserModel
{
    protected $firstName;
    protected $firstNameErr;

    protected $lastName;
    protected $lastNameErr;

    protected $address;
    protected $addressErr;

    protected $mobileNum;
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

        $this->gender = "";
        $this->genderErr = "";

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
    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getGenderErr()
    {
        return $this->genderErr;
    }
    public function setGenderErr($genderErr)
    {
        $this->genderErr = $genderErr;
    }
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }
    public function getBirthdateErr()
    {
        return $this->birthdateErr;
    }
    public function setBirthdateErr($birthdateErr)
    {
        $this->birthdateErr = $birthdateErr;
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
        $this->dbh->query("INSERT INTO users (`FirstName`, `LastName` , `Address`, `Email`, `MobileNumber`, 
            `Password`,`Birthdate`,`Type`) VALUES(:firstname, :lastname, :address, :email , :mobilenum, :pass, :birthdate, :type)");
        $this->dbh->bind(':firstname', $this->firstName);
        $this->dbh->bind(':lastname', $this->lastName);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':address', $this->address);
        $this->dbh->bind(':mobilenum', $this->mobileNum);
        $this->dbh->bind(':pass', $this->password);
        $this->dbh->bind(':birthdate', $this->birthdate);
        $this->dbh->bind(':type', 'Customer');
        return $this->dbh->execute();
    }
    public function Edit(){
    $this->dbh->query('UPDATE `users` SET `userID`=:userID,`FirstName`=:firstname,`LastName`=:lastname,`Address`=:address,`Email`=:email');
    $this->dbh->bind(':userID', $this->userid);
    $this->dbh->bind(':firstname', $this->firstName);
    $this->dbh->bind(':lastname', $this->lastName);
    $this->dbh->bind(':email', $this->email);
    $this->dbh->bind(':address', $this->address);
    return $this->dbh->execute();
    }
}
