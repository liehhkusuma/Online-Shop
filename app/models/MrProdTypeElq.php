<?php
class MrProdTypeElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'mr_product_type';
	protected $primaryKey = 'mpt_id';
	protected $statusKey = "mpt_status";
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
		"mpt_name"			=> ["required", ""],
		"mpt_desc"			=> ["", ""],
		"mpt_status"		=> ["required", ""],
	];

	
}
