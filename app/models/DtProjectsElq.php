<?php
class DtProjectsElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'dt_projects';
	protected $primaryKey = 'dpro_id';
	protected $statusKey = "dpro_status";
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
		"dc_id"					=> ["required", ""],
		"dcon_id"				=> ["required", ""],
		"dpro_number"			=> ["required", ""],
		"dpro_name"				=> ["required", ""],
		"dpro_initial"			=> ["required", ""],
		"dpro_desc"				=> ["", ""],
		"dpty_id"				=> ["required", ""],
		"dpro_dropbox_link"		=> ["", ""],
		"dpro_create_date"		=> ["required", ""],
		"dpro_status"			=> ["required", ""],
	];

	/**
	* Join Function
	*/
	public function DtClientsElq(){
		return $this->hasOne("DtClientsElq","dc_id","dc_id");
	}

	public function DtContactsElq(){
		return $this->hasOne("DtContactsElq","dcon_id","dcon_id");
	}
	
	public function MrProdTypeElq(){
		return $this->hasOne("MrProdTypeElq","mpt_id","dpty_id");
	}
}
