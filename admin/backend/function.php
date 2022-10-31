<?php

    Class adminContactUs {
        private $conn;

        public function __construct() {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'contact-us';

            // create DB connection
            $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            if(!$this->conn) {
                die("Database Connection Error!!!");
            }
        }

        // to get safe value
        public function get_safe_value($data) {
            if($data != '') {

                return mysqli_real_escape_string($this->conn, $data);

            }
        }

        // Admin Login
        public function adminLogIn($data) {

            // $email = $this->get_safe_value($data['email']);
            // $password = $this->get_safe_value($data['password']);
            // prx($data);
            $email = $data['email'];
            $password = md5($data['password']);
            // prx($password);

            $sql = "SELECT * FROM admin WHERE email = '$email' and password = '$password'";
            $admin = mysqli_query($this->conn, $sql);
            // prx($admin);

            if(mysqli_num_rows($admin) > 0) {
                // prx("WOWOWWOWO");
                $admin = mysqli_fetch_assoc(mysqli_query($this->conn, $sql));
                // SESSION STARTED;
                session_start();
                $_SESSION['ADMIN_ID'] = $admin['id'];
                $_SESSION['ADMIN_NAME'] = $admin['name'];
                // prx($_SESSION['ADMIN_NAME']);
                return "YES";

            }else {

                return "Please enter right info!!";

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