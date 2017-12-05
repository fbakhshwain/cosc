<?php

class LocationModel extends Model{
	
	public $table = 'locations';
	
	
	function getProvinces(){
		
		return $this->selectAll(" province_id=0" );
	}
	function getCities($province_id){
		
		return $this->selectAll(" province_id=$province_id" );
	}
	
	
}