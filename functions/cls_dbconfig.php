<?php
	class DB{
		public function con(){
			$db = new mysqli("localhost", "root", "", "al-qureshi");
			return $db;
		}
        
        public function query($q){
         $result = self::con()->query($q);
            return $result;
        }
	}
?>