<?php
require_once 'UserModel.php';
class LoginModel extends UserModel
{
    public function login()
    {
        $this->dbh->query('SELECT * from users WHERE email = :email');
        $this->dbh->bind(':email', $this->email);

        $record = $this->dbh->single();
        $hash_pass = $record->password;

        if (password_verify($this->password,  $hash_pass)) {
            return $record;
        } else {
            return false;
        }
    }
}
