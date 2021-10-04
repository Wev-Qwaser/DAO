<<<<<<< HEAD
<?php

class Sql extends PDO{

        private $conn;
        
        public function __construct(){
            $this->conn = new PDO("mysql:host=localhost;dbname=dbphp8", "root","");
            
        }

        private function setParams($statement , $parameters = array())
        {
            foreach($parameters as $key => $value) {
                $this->setParam($statement,$key,$value);
            }

        }
        private function setParam($statement, $key , $value){
            $statement->bindParam($key, $value);
        }
        public function rQuery($rawQuery, $params = array()){
            $stmt= $this->conn->prepare($rawQuery);

            $this->setParams($stmt, $params);
            
            $stmt->execute();

            return $stmt;
        }

        public function select($rawQuery , $params = array()):array
        {
            $stmt=$this->rquery($rawQuery , $params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


}



=======
<?php

class Sql extends PDO{

        private $conn;
        
        public function __construct(){
            $this->conn = new PDO("mysql:host=localhost;dbname=dbphp8", "root","");
            
        }

        private function setParams($statement , $parameters = array())
        {
            foreach($parameters as $key => $value) {
                $this->setParam($statement,$key,$value);
            }

        }
        private function setParam($statement, $key , $value){
            $statement->bindParam($key, $value);
        }
        public function rQuery($rawQuery, $params = array()){
            $stmt= $this->conn->prepare($rawQuery);

            $this->setParams($stmt, $params);
            
            $stmt->execute();

            return $stmt;
        }

        public function select($rawQuery , $params = array()):array
        {
            $stmt=$this->rquery($rawQuery , $params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


}



>>>>>>> 514a1cee1fbf649e70cb80636df7e7aecb541353
?>