<!-- crud file (create read update delete)-->
<?php
    class crud
    
    {

        
        //private database object
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        //insert function
        public function insertAttendee($fname, $lname, $dob, $email, $contact, $speciality){

            try {
                //define sql statement to be executed
                $sql = "INSERT INTO attendee(firstname, lastname, dateofbirth, emailaddress, contactnumber, speciality_id ) VALUES (:fname, :lname, :dob, :email, :contact, :speciality)";
                //prepare the sql ststement for execution 
                $stmt = $this->db->prepare($sql);
                //binding all placeholders to the actual values
                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':contact', $contact);
                $stmt->bindparam(':speciality', $speciality);

                //execute statement
                $stmt->execute();
                return true;


            } catch (PDOException $e) {
                //throw $e;
                echo $e->getMessage();
                return false;
                
            }        

        }
        //end of insert function



        //editAttendee function
        //not working code correct
       
            //code...
            public function editAttendee($id, $fname, $lname, $dob, $email, $contact, $speciality){
                try {
                $sql =  "UPDATE `attendee` SET `firstname`= :fname,`lastname`=
                :lname,`dateofbirth`= :dob,`emailaddress`= :email,`contactnumber`= :contact,
                `speciality_id`= :speciality  WHERE attendee_id = :id";
                
                $stmt = $this->db->prepare($sql);
                //binding all placeholders to the actual values
                $stmt->bindparam(':id', $id);
                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':contact', $contact);
                $stmt->bindparam(':speciality', $speciality);
    
                //execute statement
                $stmt->execute();
                return true;
    
    
            } 
         catch (PDOException $e) {
            //throw $th;
            echo $e->getMessage();
            return false;
        }
            
    }//end of editAttendee function
        

        //Get Attendees Function 
        public function getAttendees(){
            try {
                //code...
                $sql = "SELECT * FROM `attendee` INNER JOIN specialities  ON attendee.speciality_id = specialities.speciality_id";
                //$sql = "SELECT * FROM `attendee`";
                //$sql = "SELECT * FROM `attendee` a inner join specialities s on a.speciality_id = s.speciality_id";
                $result = $this->db->query($sql);
                return $result;

            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }

           

        }//end of Get Attendees function

        //get attendeeDetails function
        public function getAttendeeDetails($id){

            try {
                //code...
                //assign data from database to variable $sql
                $sql = "SELECT * FROM attendee INNER JOIN specialities  ON attendee.speciality_id = specialities.speciality_id WHERE attendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;


            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }
            



        }//end of get attendeeDetails function


        //get Specialities function
        public function getSpecialities(){

            try {
                //code...
                $sql = "SELECT * FROM `specialities`";
                $result = $this->db->query($sql);
                return $result;
    

            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }

           
        }//end of get Specialities function


        //get Specialities function by ID
        public function getSpecialitiesById($id){

            try {
                //code...
                $sql = "SELECT * FROM `specialities` WHERE speciality_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparm(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
    

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

           
        }//end of get Specialities function



        //delete Attendee function
        public function deleteAttendee($id){
            try {
                //code...
                $sql = "DELETE FROM `attendee` WHERE attendee_id = :id";

                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }



        }//end of delete Attendee function
        
        


        
        
    }//end of crud class



?>