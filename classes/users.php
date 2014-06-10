<?php
require_once(LIB_PATH.DS."database.php");

class users extends DatabaseObject {
    protected static $table_name = "users";
    protected static $db_fields = array('userID	', 'accountName', 'countryOfOrigin');
    public $userID;
    public $accountName;
    public $countryOfOrigin;
    
    public function pickUser($amountToGenerate) {
        
        for($i = 0; $i <= $amountToGenerate - 1; $i++){
            $randomID = mt_rand(1, 100);
        
            
        //$users = array($this->find_by_id($id=$ru));
            $users[$i] = $randomID;
        }
        
        
        
        return $users;
        
    }
}
