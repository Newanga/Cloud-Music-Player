<?php
    class Account {

        private $con;
        private $errorArray;

        public function __construct($con) {
            $this->con = $con;
            $this->errorArray = array();
        }

        public function login($un, $pw) {

            $pw = md5($pw);

            $query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='password'");

            if(mysqli_num_rows($query) == 1) {
                return true;
            }
            else {
                array_push($this->errorArray, Constants::$loginFailed);
                return false;
            }
        }

        public function register($un, $fn, $ln, $em, $em0, $pw, $pw0) {
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em0);
            $this->validatePasswords($pw, $pw0);

            if(empty($this->errorArray) == true) {
                // will put on database
                return $this->insertUserDetails($un, $fn, $ln, $em,  $pw);
            }
            else {
                return false;
            }

        }

        public function getError($error) {
            if(!in_array($error, $this->errorArray)) {
                $error = "";
            }
            return "<span class='errorMessage'>$error</span>";
        }

        private function insertUserDetails($un, $fn, $ln, $em,  $pw) {
            $encryptedPw = md5($pw); 
            $profilePicture = "Assets\Images\Profile-Pictures\RDL.png";
            $date = date("Y-m-d");
            echo "INSERT INTO users VALUES ('', '$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePicture'";
            $result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePicture')");
            return $result;
        }

        private function validateUsername($un) {
            
            if(strlen($un) > 25 || strlen($un) < 5) {
                array_push($this->errorArray, Constants::$usernameCharacters);
                return;
            }

            $checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username= '$un'");
            if(mysqli_num_rows($checkUsernameQuery) != 0) {
                array_push($this->errorArray, Constants::$usernameTaken);
                return;
            }

        }
        
        private function validateFirstName($fn) {
            if(strlen($fn) > 25 || strlen($fn) < 2) {
                array_push($this->errorArray, Constants::$firstnameCharacters);
                return;
            }
            
        }
        
        private function validateLastName($ln) {
            if(strlen($ln) > 25 || strlen($ln) < 2) {
                array_push($this->errorArray, Constants::$lastnameCharacters);
                return;
            }

        }
        
        private function validateEmails($em, $em0) {
            if($em != $em0) {
                array_push($this->errorArray, Constants::$emailsDontMatch);
                return;
            }
            
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, Constants::$emailInvalid);
                return;
            }

            $checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email= '$em'");
            if(mysqli_num_rows($checkEmailQuery) != 0) {
                array_push($this->errorArray, Constants::$emailTaken);
                return;
            }
            
        }
        
        private function validatePasswords($pw, $pw0) {
            if($pw != $pw0) {
                array_push($this->errorArray, Constants::$passwordsDontMatch);
                return;
            }
            
            if(preg_match('/[^A-Za-z0-9]/', $pw)) {
                array_push($this->errorArray, Constants::$passwordCapitalNumbers);
                return;
            }
            // from Capital letters to simple letters and 0 to 9
            
            if(strlen($pw) > 30 || strlen($pw0) < 5) {
                array_push($this->errorArray, Constants::$passwordCharacters);
                return;
            }
        }
    }
?>