<?php
class BgtTransactionElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'bgt_transaction';
	protected $primaryKey = 'bt_id';
	protected $statusKey = "bt_status";
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
		"bt_type"			=> ["required", ""],
		"bt_category"		=> ["required", ""],
		"bt_trx_date"		=> ["required", ""],
		"bt_note"			=> ["required", ""],
		"bt_code"			=> ["", ""],
		"bt_debit"			=> ["", ""],
		"bt_credit"			=> ["", ""],
		"bt_saldo"			=> ["", ""],
		"bt_input_by"		=> ["required", ""],
		"bt_input_date"		=> ["required", ""],
		"bt_update_by"		=> ["required", ""],
		"bt_update_date"	=> ["required", ""],
		"bt_file"			=> ["", ""],
		"bt_status"			=> ["required", ""],
	];

	public function MrBgtTypeElq(){
		return $this->hasOne("MrBgtTypeElq","bgt_id","bt_type");
	}
	public function MrBgtCategoryElq(){
		return $this->hasOne("MrBgtCategoryElq","mbc_id","bt_category");
	}

	
}
