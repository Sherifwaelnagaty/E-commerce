<?php
class Account extends View
{
  public function output()
  { 
    require APPROOT . '/views/inc/header.php';
    $this->PrintInfo();
    require APPROOT . '/views/inc/footer.php';
  }
  public function PrintInfo(){
    $action=URLROOT.'pages/Index';
    $text=<<<EOT
            <form action=$action method="post"> 
            <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
            <div class="col-md-3 border-right">
            </div>
            <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
        EOT;
    echo $text;
    $this->PrintFirstName();
    $this->printLastName();
    $this->printMobileNumber();
    $this->printAddress();
    $this->printButton();
    $this->printEmailAddress();
}
    public function printFirstName(){
        $val=$_SESSION['FirstName'];
        $text=<<<EOT
                    <div class="col-md-6"><label class="labels">FirstName</label><input type="text" class="form-control" value=$val></div>
            EOT;
            echo $text;
    }
    public function printLastName(){
        $val=$_SESSION['LastName'];
        $text=<<<EOT
            <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value=$val placeholder="surname"></div>
                </div>
            EOT;
            echo $text;
    }
    public function printMobileNumber(){
        $val=$_SESSION['MobileNumber'];
        $text=<<<EOT
            <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" value=$val><br></div>
            EOT;
            echo $text;
    }
    public function printAddress(){
        $val=$_SESSION['Address'];
        $text=<<<EOT
             <div class="col-md-12"><label class="labels">Address</label><textarea type="text" class="form-control" value=$val></textarea></div>
                </div>
            EOT;
            echo $text;
    }
    public function printButton(){
        $text=<<<EOT
            <div class="row mt-3">
                </div>
                <div class="mt-5 text-center"><input type="submit" class="btn btn-primary profile-button" type="button"></div>
            </div>
            </div>
            EOT;
            echo $text;
    }
    public function printEmailAddress(){
        $val=$_SESSION['Email'];
        $text=<<<EOT
            <div class="col-md-4">
            <div class="p-3 py-5"><br><br>
                <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" placeholder="Enter Your Email Address" value=$val></div> <br>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            EOT;
            echo $text;
    }
}
?>
