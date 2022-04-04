<?php
class Register extends view
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> $title</h1>
    </div>
  </div>

  </div>
  </div>
  </div>
EOT;
    echo $text;
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'users/register';
    $loginUrl = URLROOT . 'users/login';

    $text = <<<EOT
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
    <h2>Sign Up</h2>
    <form action="$action" method="post">
EOT;
    echo $text;
    $this->printFirstName();
    $this->printLastName();
    $this->printGender();
    $this->printBirthdate();
    $this->printEmail();
    $this->printAddress();
    $this->printMoblieNum();
    $this->printPassword();
    $this->printConfirmPassword();
    $text = <<<EOT
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Register" class="form-control btn btn-lg btn-primary btn-block">
        </div>
        <div class="col">
          <a href="$loginUrl" class="form-control btn btn-lg btn-block">Current user, login here</a>
        </div>
        <div class="col">
        <a href="/mvc/app/views/pages/profilepic.php" class="form-control btn btn-lg btn-block">Click here to add a profile picture</a>
      </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
    echo $text;
  }

  private function printFirstName()
  {
    $val = $this->model->getFirstName();
    $err = $this->model->getFirstNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'firstname', $val, $err, $valid);
  }

  private function printLastName()
  {
    $val = $this->model->getLastName();
    $err = $this->model->getLastNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'lastname', $val, $err, $valid);
  }

  private function printEmail()
  {
    $val = $this->model->getEmail();
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'email', $val, $err, $valid);
  }

  private function printAddress()
  {
    $val = $this->model->getAddress();
    $err = $this->model->getAddressErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'address', $val, $err, $valid);
  }

  private function printMoblieNum()
  {
    $val = $this->model->getMobileNum();
    $err = $this->model->getMobileNum();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'mobile number', $val, $err, $valid);
  }

  private function printPassword()
  {
    $val = $this->model->getPassword();
    $err = $this->model->getPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'password', $val, $err, $valid);
  }

  private function printConfirmPassword()
  {
    $val = $this->model->getConfirmPassword();
    $err = $this->model->getConfirmPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'confirm_password', $val, $err, $valid);
  }

  private function printGender()
  {
    $val = $this->model->getGender();
    $err = $this->model->getGenderErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printGenderInput( $err, $valid); 
  }

  private function printBirthdate()
  {
    $val = $this->model->getBirthdate();
    $err = $this->model->getBirthdateErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('date', 'birthdate', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> $label: <sup>*</sup></label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
      <span class="invalid-feedback">$err</span>
    </div>
EOT;
    echo $text;
  }

  private function printGenderInput( $err, $valid)
  {
    $gender = $this->model->getGender();
    $fieldName = 'Gender';
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
 $text = <<<EOT
    <div class="col-lg-3">
    <input type="radio" name="gender" value="male">Male:
    <input type="radio" name="gender" value="female">Female:
    </div>
EOT;
    echo $text;
  }
}
