<?php

	/**
	* THIS SOURCE CODE WAS AUTOMATICALLY GENERATED ON Tue 10:33:28  19/01/2016
	* 
	*
	* DATABASE CRUD GENERATOR IS AN OPEN SOURCE PROJECT. TO IMPROVE ON THIS PROJECT BY
	* ADDING MODULES, FIXING BUGS e.t.c GET THE SOURCE CODE FROM GIT (https://github.com/marviktintor/dbcrudgen/)
	* 
	* DATABASE CRUD GENERATOR INFO:
	* 
	* DEVELOPER : VICTOR MWENDA
	* VERSION : DEVELOPER PREVIEW 0.1
	* SUPPORTED LANGUAGES : PHP
	* DEVELOPER EMAIL : vmwenda.vm@gmail.com
	* 
	*/

	
class Taking_care_of_sick {

	private $databaseUtils;
	private $action;
	private $client;
	
	public function __construct($action, $client) {
	
		//Data Actions script file - It contains all the various data actions that can be performed on data.
		require_once 'C:\xampp\htdocs\where_there_is_no_doc\scripts\php\database\core-apis\DatabaseActions.class.inc.php';
		
		//Database Utils Script - It contains all the MYSQL API's for performing CRUD transactions
		require_once 'C:\xampp\htdocs\where_there_is_no_doc\scripts\php\database\core-apis\DatabaseUtils.class.inc.php';
		
		$this->init(true);
		
	}
	
	//Initializes
	public function init($execute = false) {
		
		//Init
		$this->databaseUtils = new DatabaseUtils ();
		
		//Ensure that the POST_CLIENT was posted before trying to get it
		if(!empty($_POST [POST_CLIENT])){
			$this->client = $_POST [POST_CLIENT];
		}
		
		//Ensure that the POST_ACTION was posted before trying to get it
		if(!empty($_POST [POST_ACTION])){
			$this->action = $_POST [POST_ACTION];
		}
		
		
		
		if ($execute) {
			
			if ($this->get_action() == ACTION_INSERT) {
			
			}
			
			if ($this->get_action() == ACTION_UPDATE) {
			
			}
			
			if ($this->get_action() == ACTION_QUERY) {
			
			}
			
			if ($this->get_action() == ACTION_DELETE) {
			
			}
		}
	}
	
		
	/**
	* private class variable care_item
	*/
	private $_care_item;
	
	/**
	* returns the value of care_item
	*/
	public function _get_care_item() {
		return $this->_care_item;
	}
	
	/**
	* sets the value of care_item
	*/
	public function set_care_item($care_item) {
		$this->_care_item = $care_item;
	}
	
	
	/**
	* private class variable sick_person_care
	*/
	private $_sick_person_care;
	
	/**
	* returns the value of sick_person_care
	*/
	public function _get_sick_person_care() {
		return $this->_sick_person_care;
	}
	
	/**
	* sets the value of sick_person_care
	*/
	public function set_sick_person_care($sick_person_care) {
		$this->_sick_person_care = $sick_person_care;
	}
	
	
	/**
	* private class variable very_sick_person_care
	*/
	private $_very_sick_person_care;
	
	/**
	* returns the value of very_sick_person_care
	*/
	public function _get_very_sick_person_care() {
		return $this->_very_sick_person_care;
	}
	
	/**
	* sets the value of very_sick_person_care
	*/
	public function set_very_sick_person_care($very_sick_person_care) {
		$this->_very_sick_person_care = $very_sick_person_care;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_care_item 
	* based on the value of $care_item,$sick_person_care,$very_sick_person_care passed to the function
	*/
	public function get_id_care_item($care_item,$sick_person_care,$very_sick_person_care) {
		$columns = array ('care_item','sick_person_care','very_sick_person_care');
		$records = array ($care_item,$sick_person_care,$very_sick_person_care);
		$id_care_item_ = $this->query_from_taking_care_of_sick ( $columns, $records );
		return count($id_care_item_)>0 ? $id_care_item_ [0] ['id_care_item'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of care_item 
	* based on the value of $id_care_item passed to the function
	*/
	public function get_care_item($id_care_item) {
		$columns = array ('id_care_item');
		$records = array ($id_care_item);
		$care_item_ = $this->query_from_taking_care_of_sick ( $columns, $records );
		return count($care_item_)>0 ? $care_item_ [0] ['care_item'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of sick_person_care 
	* based on the value of $id_care_item passed to the function
	*/
	public function get_sick_person_care($id_care_item) {
		$columns = array ('id_care_item');
		$records = array ($id_care_item);
		$sick_person_care_ = $this->query_from_taking_care_of_sick ( $columns, $records );
		return count($sick_person_care_)>0 ? $sick_person_care_ [0] ['sick_person_care'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of very_sick_person_care 
	* based on the value of $id_care_item passed to the function
	*/
	public function get_very_sick_person_care($id_care_item) {
		$columns = array ('id_care_item');
		$records = array ($id_care_item);
		$very_sick_person_care_ = $this->query_from_taking_care_of_sick ( $columns, $records );
		return count($very_sick_person_care_)>0 ? $very_sick_person_care_ [0] ['very_sick_person_care'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [taking_care_of_sick] 
	*/
	public static function get_table() {
		return 'taking_care_of_sick';
	}
	
	/**
	* This action represents the intended database transaction
	*
	* @return the set action.
	*/
	private function get_action() {
		return $this->action;
	}
	
	/**
	* Returns the client doing transactions
	*
	* @return the client
	*/
	private function get_client() {
		return $this->client;
	}
	
	/**
	* Used  to calculate the number of times a record exists in the table [taking_care_of_sick]
	*
	* @return the number of times a record exists exists in the table [taking_care_of_sick]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[taking_care_of_sick]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_taking_care_of_sick(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [taking_care_of_sick]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_taking_care_of_sick(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [taking_care_of_sick]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_taking_care_of_sick(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [taking_care_of_sick] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_taking_care_of_sick(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [taking_care_of_sick] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_taking_care_of_sick(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [taking_care_of_sick] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_taking_care_of_sick(Array $columns, Array $records, $printSQL = false) {
		return $this->search ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Get Database Utils
	*  
	* @return an object of database utils
	*/
	public function get_database_utils() {
		return $this->databaseUtils;
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [taking_care_of_sick]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[taking_care_of_sick]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [taking_care_of_sick]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [taking_care_of_sick] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [taking_care_of_sick] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [taking_care_of_sick] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
