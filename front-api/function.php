<?php
    Class userContactUs {
        private $conn;

        public function __construct() {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'contact-us';

            $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            if(!$this->conn) {
                die("Database Connection Error!!");
            }
        }

        // User Info
        public function userInfo($data) {
            $name = $data['name'];
            $email = $data['email'];
            $mobile = $data['mobile'];
            $comment = $data['comment'];

            // prx($data);
            $sql = "INSERT INTO `contact-us`(name, email, mobile, comment) 
            VALUES('$name', '$email', '$mobile', '$comment')";

            if(mysqli_query($this->conn, $sql)) {
                return "YES";
            }
        }
    }

    // Checking DATA by printing that comes from DB or POST-GET method
    function prx($data) {

        echo "<pre>";
        print_r($data);
        die();

    }

?>