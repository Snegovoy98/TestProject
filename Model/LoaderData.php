<?php
include "DBConnect.php";

class LoaderData extends DBConnect
{
    private $connection;
    function __construct()
    { 
        $this->connection = $this->connect();
    } 
    public function importDataToDB(int $UID, string $name, int $age, string $email, string $phone, string $gender)
    {   
        $sql = "INSERT INTO Users (UID, Name, Age, Email, Phone, Gender) VALUES('".$UID."', '".$name."', '".$age."', '".$email."', '".$phone."', '".$gender."')";
        mysqli_query($this->connection, $sql);
    }

    public function getDataFromDB() {
    
    }

    public function updateDataInDB(int $UID, string $name, int $age, string $email, string $phone, string $gender) {
       $sql = "UPDATE Users SET UID = '".$UID."', Name = '".$name."', Age= '".$age."', Email = '".$email."', Phone ='".$phone."', Gender = '".$gender."' WHERE UID = '".$UID."'";
       mysqli_query($this->connection, $sql);     
    }

    public function checkIsUserExists(int $UID): bool {
        $sql = "SELECT UID FROM Users WHERE UID = '".$UID."'";         
        $result = mysqli_query($this->connection, $sql);
        var_dump($result);
        if($result->num_rows > 0) {
            return true;        
        } else {
            return false;        
        }
    }
}
