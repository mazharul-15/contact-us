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
            $res = mysqli_query($this->conn, $sql);
            // prx($admin);

            if(mysqli_num_rows($res) > 0) {

                $admin = mysqli_fetch_assoc($res);
                // SESSION STARTED;
                session_start();
                $_SESSION['ADMIN_ID'] = $admin['id'];
                $_SESSION['ADMIN_NAME'] = $admin['name'];
                return "YES";

            }else {

                return "Please enter right info!!";

            }

        }

        // Admin
        public function adminInfo($admin_id = '') {
            $sql = "SELECT * FROM admin";

            if($admin_id != '') {
                $sql .= " WHERE id = $admin_id";
            }

            $res = mysqli_query($this->conn, $sql);

            $dataArr = array();

            while($rowData = mysqli_fetch_assoc($res)) {
                $dataArr[] = $rowData;
            }

            return $dataArr;
        }

        // Admin Info Update
        public function adminInfoUpdate($data) {
            $id = $data['id'];
            $name = $data['name'];
            $email = $data['email'];
            $password = md5($data['password']);

            $sql = "UPDATE admin SET name = '$name', email = '$email', password = '$password' 
            WHERE id = 0";
            // prx($res = mysqli_query($this->conn, $sql));
            if(mysqli_query($this->conn, $sql)) {
                return "YES";
            }
        }

        // Admin Info Delete
        public function adminINFODelete($data) {
            $id = $data['admin_id'];
            $sql = "DELETE FROM admin WHERE id = $id";

            if(mysqli_query($this->conn, $sql)) {
                return "YES";
            }
        }

        // Contact Us details
        public function contactUsDetails($id = '') {
            $sql = "SELECT * FROM `contact-us`";

            if($id != '') {
                $sql .= " WHERE id = $id";
            }
            $res = mysqli_query($this->conn, $sql);

            $data = array();
            while($row = mysqli_fetch_assoc($res)) {
                $data[] = $row;
            }

            return $data;
        }

    }

    // Checking DATA by printing that comes from DB or POST-GET method
    function prx($data) {

        echo "<pre>";
        print_r($data);
        die();

    }

?>