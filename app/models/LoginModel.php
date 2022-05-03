<?php
require_once 'UserModel.php';
class LoginModel extends UserModel
{
    public function login()
    {
        $this->dbh->query('SELECT * from users WHERE Email = :email');
        $this->dbh->bind(':email', $this->email);

        $record = $this->dbh->single();
        $hash_pass = $record->Password;

        if (password_verify($this->password,  $hash_pass)) {
            return $record;
        } else {
            return false;
        }
    }
}
