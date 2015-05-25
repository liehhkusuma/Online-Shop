<?php
class DtClientsElq extends BaseEloquent {

	/* Core Attributes */
	protected static $elq = __CLASS__;
	protected $table = 'dt_clients';
	protected $primaryKey = 'dc_id';
	protected $statusKey = "dc_status";
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
		"dc_cli_num"			=> ["required", ""],
		"dc_initial"			=> ["required", ""],
		"dc_cli_name"			=> ["required", ""],
		"dc_comp_name"			=> ["required", ""],
		"dc_comp_address"		=> ["", ""],
		"dc_url_protocol"		=> ["required", ""],
		"dc_cli_phone"			=> ["required", ""],
		"dc_cli_url"			=> ["", ""],
		"dc_join_date"			=> ["required", ""],
		"dc_dropbox_link"		=> ["required", ""],
		"dc_status"				=> ["required", ""],
	];

	/*
	* Models Function
	*/
	static function store($data){
		$self = new static::$elq;
        $self->fill($data);

        if($self->isValid()){
            $self->status(post('status'));
            $self->fill(['dc_cli_num' => Gen::genClientNumber()]);
            $self->save();

            $dcon = DtContactsElq::find($data['dcon_id']);
            if(!$dcon['dcli_id']) $dcon->fill(['dcli_id' => $self['dc_id']])->save();
        }
        return $self;
	}

	/**
	* Join Function
	*/
	public function DtContactsElq(){
		return $this->hasOne("DtContactsElq","dcon_id","dcon_id");
	}
}
