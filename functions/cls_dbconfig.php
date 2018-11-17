<?php
	class DB{
		public function con(){
			$db = new mysqli("localhost", "root", "", "db_lalbag");
			return $db;
		}
        
        public function query($q){
         $result = self::con()->query($q);
            return $result;
        }
	}
?>