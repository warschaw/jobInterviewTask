<?php
require_once(LIB_PATH.DS."database.php");

class generateCDR extends DatabaseObject{
    protected static $table_name = "cdr";
    protected static $idcolumn = "cdrID";
    protected static $db_fields = array('cdrID', 'userID', 'destinationCall', 'sourceCall', 'duration', 'rated', 'cost');
    public $cdrID;
    public $userID;
    public $destinationCall;
    public $sourceCall;
    public $duration;
    public $rated;
    public $cost;

    public function __construct() {
        
    }
    
    protected function userPicker($amountToGenerate = 25) {
        
        for($i = 0; $i <= $amountToGenerate - 1; $i++){
            $randomID = mt_rand(1, 100);
        
            $users[$i] = $randomID;
        }
        return $users;
        
    }
    
    public function userIDtoPrefix($amountToGenerate) {
        
        $users = $this->userPicker($amountToGenerate);
        
        $fullUser = array();
        
        foreach ($users as $user) {
            
            $sql = "SELECT countries.countryPrefix FROM countries INNER JOIN users ON users.countryID = countries.countryID WHERE userID={$user}";
            $query = $this->sql_overwrite($sql);
            $userPrefix = array('userID' =>$user, 'countryPrefix' => $query["countryPrefix"]);
            array_push($fullUser, $userPrefix);
        }

//        echo "<pre>";
//        print_r($fullUser);
//        echo "</pre>";
        
        
        return $fullUser;
    }
    
    public function generateSourceNumber($fullUser) {
        
        $sourceCall = array();
        
        foreach ($fullUser as $user) {
            $sourceCallRandom = $user['countryPrefix'] . " " . mt_rand(1000000000, 9999999999);
            $sourceCallNumber =  array("userID" => $user['userID'], "sourceCall" => $sourceCallRandom);
            array_push($sourceCall, $sourceCallNumber);
        }
        
        //return $sourceCall;
        echo "<pre>";
        print_r($sourceCall);
        echo "</pre>";
    }

    public function generateFullCDR() {
        
    }
    
    public function callToCreate() {
        
    }
    
}
