<?php
require_once 'UserModel.php';
class ordersmodel extends UserModel
{
    protected $orderID;
    protected $customerID;
    protected $dateoforder;
    protected $situation;

    public function __construct()
    {
        parent::__construct();
        $this->customerID = "";
        $this->dateoforder = "";
        $this->orderID ="";
        $this->situation= "";

    }
    public function getcustomerID()
    {
        return $this->customerID;
    }
    public function setcustomerID($customerID)
    {
        $this->customerID = $customerID;
    }
    public function getdateoforder()
    {
        return $this->dateoforder;
    }
    public function setdateoforder($dateoforder)
    {
        $this->dateoforder = $dateoforder;
    }
    public function getorderID()
    {
        return $this->orderID;
    }
    public function setorderID($orderID)
    {
        $this->orderID = $orderID;
    }
    public function getsituation()
    {
        return $this->situation;
    }
    public function setsituation($situation)
    {
        $this->situation = $situation;
    }
    public function Cancel()
    {
        $this->dbh->query("DELETE orders.orderID FROM users,orders WHERE users.userID=orders.userID AND users.userID=:userID");
        $this->dbh->bind(':userID', $this->customerID);    
    }
    public function Myorder()
    {
        $this->dbh->query("SELECT orders.orderdate,orders.Situation FROM users,orders WHERE users.userID=orders.userID AND users.userID=:userID VALUES(:datee, :orderID,:Situation)");
        $this->dbh->bind(':userID', $this->customerID);
        $this->dbh->bind(':datee', $this->dateoforder);
        $this->dbh->bind(':situation', $this->situation);
        return $this->dbh->single();
    }

}
