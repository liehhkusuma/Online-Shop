<?php
class DtContactsElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'dt_contacts';
	protected $primaryKey = 'dcon_id';
	protected $statusKey = "dcon_status";
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
		"dcli_id"			=> ["", ""],
		"dpro_id"			=> ["", ""],
		"dcon_salutation"	=> ["required", ""],
		"dcon_name"			=> ["required", "name"],
		"dcon_phone_1"		=> ["", ""],
		"dcon_phone_2"		=> ["", ""],
		"dcon_email"		=> ["email", ""],
		"dcon_position"		=> ["", ""],
		"dcon_status"		=> ["required", ""],
	];

	/**
	* Join Function
	*/
	public function DtClientsElq(){
		return $this->hasOne("DtClientsElq","dc_id","dcli_id");
	}

	public function DtProjectsElq(){
		return $this->hasOne("DtProjectsElq","dpro_id","dpro_id");
	}
}
