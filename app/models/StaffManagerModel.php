<?php

class StaffManagerModel extends Model{
	
	public $table = 'staff_manager';
	
	function setManager($staff_id, $manager_id){
		$q = "DELETE FROM $this->table WHERE staff_id=$staff_id";

		$this->query($q);
		
		if($manager_id)
		$this->insert(['staff_id'=>$staff_id,'manager_id'=>$manager_id]);
		
	}	
	
	function getManager($staff_id){
		$where = 'staff_id='.$staff_id;
		return $this->selectOne($where);
	}
	
	function getStaff($manager_id){
		
		$where = '';
		$where = 'manager_id='.$manager_id;
		
		$staff = $this->selectAll($where);
		
		$staff_ids = [];
		
		if($staff){
			foreach($staff as $s){
				$staff_ids[] = $s->staff_id;
			}
		}
		
		return $staff_ids;
	}

}