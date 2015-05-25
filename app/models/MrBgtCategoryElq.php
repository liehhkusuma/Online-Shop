<?php
class MrBgtCategoryElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'mr_budget_category';
	protected $primaryKey = 'mbc_id';
	protected $statusKey = "mbc_status";
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
		"mbc_category"	=> ["required", ""],
		"mbc_status"	=> ["required", ""],
	];

	
}
