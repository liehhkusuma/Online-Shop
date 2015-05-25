<?php
class MrBgtTypeElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'mr_budget_type';
	protected $primaryKey = 'bgt_id';
	protected $statusKey = "bgt_status";
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
		"bgt_type"	=> ["required", ""],
		"bgt_status"	=> ["required", ""],
	];

	
}
