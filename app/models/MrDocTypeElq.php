<?php
class MrDocTypeElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'mr_doc_type';
	protected $primaryKey = 'mdoc_id';
	protected $statusKey = "mdoc_status";
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
		"mdoc_mat_id"		=> ["required", ""],
		"mdoc_name"			=> ["required", ""],
		"mdoc_initial"		=> ["required", ""],
		"mdoc_desc"			=> ["", ""],
		"mdoc_status"		=> ["required", ""],
	];

	
}
