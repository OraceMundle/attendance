<?php
    //User class
    class user{

        //private database object
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }


        //insert user function
        public function insertUser($username, $password){
            try {

                $result = $this->getUserbyUserbname($username);

                if($result['num'] > 0){

                    return false;

                }else {
                    //define a new varaible
                    //hashing password using md5
                    $new_password = md5($password.$username); 
                    //define sql statement to be executed
                    $sql = "INSERT INTO users(username, password) VALUES (:username, :password)";
                    //prepare the sql ststement for execution 
                    $stmt = $this->db->prepare($sql);
                    //binding all placeholders to the actual values
                    $stmt->bindparam(':username', $username);
                    $stmt->bindparam(':password', $new_password);
              

                    //execute statement
                    $stmt->execute();
                    return true;
                }
                


            } catch (PDOException $e) {
                //throw $e;
                echo $e->getMessage();
                return false;
                
            }        


        }//end of insert user function



        //insert get user function
        public function getUser($username, $password){

            try {
                //code...
                //assign data from database to variable $sql
                $sql = "SELECT * FROM users WHERE username = :username AND password = :password ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username', $username);
                $stmt->bindparam(':password', $password);

                $stmt->execute();
                $result = $stmt->fetch();
                return $result;


            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }


        }//end of get user function



        //get user by username function
        public function getUserbyUserbname($username){

            try {
                //code...
                //assign data from database to variable $sql
                $sql = "SELECT count(*) as num FROM users WHERE username = :username";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username', $username);
                
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;


            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }




        }//end of get user by user name function










    } //end of User class



?>