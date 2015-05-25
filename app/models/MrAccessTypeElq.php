<?php
class MrAccessTypeElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'mr_access_type';
	protected $primaryKey = 'mat_id';
	protected $statusKey = "mat_status";
	protected $fillable = "";
	protected $rules = "";

	/* timestamps */
	public $timestamps = false;
	const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';

	public function __construct(){
		parent::__construct();
	}

	/* 
	* Function: Field Rules Validation And Regular Expression Replace
	*/
	protected $fieldRules = [
		"mat_name"			=> ["required", ""],
		"mat_desc"			=> ["", ""],
		"mat_status"		=> ["required", ""],
	];

	
}
