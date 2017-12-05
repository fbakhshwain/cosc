<?php

class ReminderModel extends Model{
	
	public $table = 'notes';
	
	function getAllRecords($where=""){
		$username = $_SESSION['currentUser'];
		$where = "username='$username' AND deleted ='0'";	
		$result = $this->select($where);
		$notes = [];
		while($row = $result->fetch_object()) {
			$notes[] = $row;
		}
		return $notes;
	}

	function mostReminder(){
		$res = $this->getQuery("SELECT username, count(username) as total FROM {$this->table} GROUP BY username ORDER BY total DESC LIMIT 1");
		return $res[0];
	}
	
	function reminderByDate($start, $end){
		$res = $this->getQuery("SELECT * FROM {$this->table} WHERE date(created_date)>='$start' AND   date(created_date)<='$end'");
		return $res;
	}
	
	
	
	function getReminders($user_id = 0){
		$q = "SELECT * FROM $this->table";
		if($user_id)
			$q .= " WHERE id=$user_id";
		
		$rows = $this->getQuery($q);	
		
		return $rows;
	}

}