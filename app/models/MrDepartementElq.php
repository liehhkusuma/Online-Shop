<?php
class MrDepartementElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'mr_departement';
	protected $primaryKey = 'mdep_id';
	protected $statusKey = "mdep_status";
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
		"mdep_name"			=> ["required", ""],
		"mdep_num"			=> ["required", ""],
		"mdep_desc"			=> ["", ""],
		"mdep_status"		=> ["required", ""],
	];

	/**
	* Join Function
	*/
	public function MrDocTypeElq(){
		return $this->hasOne("MrDocTypeElq","mdoc_id","mdep_id");
	}
}
