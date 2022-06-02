<?php
require_once 'UserModel.php';
class ordersmodel extends UserModel
{
    protected $orderID;
    protected $dateoforder;
    protected $situation;

    public function __construct()
    {
        parent::__construct();
        $this->dateoforder = "";
        $this->orderID ="";
        $this->situation= "";

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
        $this->dbh->query("DELETE orders FROM orders WHERE orders.userID=:userID AND orders.orderID=:orderID");
        $this->dbh->bind(':userID', $_SESSION['userID']);
        $this->dbh->bind(':orderID', $this->orderID);
        return $this->dbh->execute();    
    }
    public function Myorder()
    {
        $this->dbh->query("SELECT orders.orderdate,orders.Situation FROM users,orders WHERE users.userID=orders.userID AND users.userID=:userID");
        $this->dbh->bind(':userID', $_SESSION['userID']);
        return $this->dbh->resultSet();
    }
}
