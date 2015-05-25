<?php
class DtDocumentElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'dt_document';
	protected $primaryKey = 'ddoc_id';
	protected $statusKey = "ddoc_status";
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
		"dc_id"				=> ["required", ""],
		"dpro_id"			=> ["required", ""],
		"mat_id"			=> ["required", ""],
		"mdep_id"			=> ["required", ""],
		"mdoc_id"			=> ["", ""],
		"mpt_id"			=> ["required", ""],
		"ddoc_name"			=> ["required", ""],
		"ddoc_number"		=> ["required", ""],
		"dcon_id"			=> ["required", ""],
		"ddoc_create_date"	=> ["required", ""],
		"ddoc_status"		=> ["required", ""],
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

	public function DtProjectsElq(){
		return $this->hasOne("DtProjectsElq","dpro_id","dpro_id");
	}

	public function MrDepartementElq(){
		return $this->hasOne("MrDepartementElq","mdep_id","mdep_id");
	}
	
	public function MrProdTypeElq(){
		return $this->hasOne("MrProdTypeElq","mpt_id","dpty_id");
	}
	
	public function MrDocTypeElq(){
		return $this->hasOne("MrDocTypeElq","mdoc_id","mdoc_id");
	}

	public function MrAccessTypeElq(){
		return $this->hasOne("MrAccessTypeElq","mat_id","mat_id");
	}
}
