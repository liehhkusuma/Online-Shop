<?php
class DashboardCtrl extends AdminCtrl{

	protected $ctrl = __CLASS__;

    function listAction(){
        // Client Statistic
        $dc_get = DtClientsElq::select(DB::raw("YEAR(dc_join_date) AS year, count(YEAR(dc_join_date)) AS count"))->groupBy(DB::raw("YEAR(dc_join_date)"))->get();
        $clientStat = [];
        foreach ($dc_get as $key => $dc) {
            $clientStat[] = [$dc['year'], $dc['count']];
        }

        // Project Statistic
        $dpro_get = DtProjectsElq::select(DB::raw("YEAR(dpro_create_date) as year, count(YEAR(dpro_create_date)) as count"))->groupBy(DB::raw("YEAR(dpro_create_date)"))->get();
        $projectStat = [];
        foreach ($dpro_get as $key => $dpro) {
            $projectStat[] = [$dpro['year'], $dpro['count']];
        }

        // Statictic Patty Cash
        $patty_get = BgtTransactionElq::select(DB::raw("MONTH(bt_trx_date) as month, sum(bt_credit) as sum"))->groupBy(DB::raw("MONTH(bt_trx_date)"))->get();
        $PattyCashStat = [];
        foreach ($patty_get as $key => $dpro) {
            $PattyCashStat[] = [$dpro['month'],$dpro['sum']];
        }

        // Statictic Patty Cash Category IN
        $patty_in_get = BgtTransactionElq::select(DB::raw("MONTH(bt_trx_date) as month, count(bt_type) as count"))->whereRaw('bt_type = 1')->groupBy(DB::raw("MONTH(bt_trx_date)"))->get();
        $catInStat = [];
        foreach ($patty_in_get as $key => $dpro) {
            $catInStat[] = [$dpro['month'],$dpro['count']];
        }

        // Statictic Patty Cash Category Out
        $patty_out_get = BgtTransactionElq::select(DB::raw("MONTH(bt_trx_date) as month, count(bt_type) as count"))->whereRaw('bt_type = 2')->groupBy(DB::raw("MONTH(bt_trx_date)"))->get();
        $catOutStat = [];
        foreach ($patty_out_get as $key => $dpro) {
            $catOutStat[] = [$dpro['month'],$dpro['count']];
        }

        // Statictic Patty Cash Category In Out
        $patty_inout_get = BgtTransactionElq::select(DB::raw("MONTH(bt_trx_date) as month, count(bt_type) as count"))->whereRaw('bt_type = 3')->groupBy(DB::raw("MONTH(bt_trx_date)"))->get();
        $catInOutStat = [];
        foreach ($patty_inout_get as $key => $dpro) {
            $catInOutStat[] = [$dpro['month'],$dpro['count']];
        }

        return view('backoffice.dashboard', [
        	'sidebar' => $this->sideBar(),
        	'title' => "SMERP",
        	'totalClients' => $this->clientsCount(),
        	'totalProjects' => $this->projectsCount(),
            'totalDocuments' => $this->documentCount(),
            'totalContacts' => $this->contactCount(),
            'clientStat' => $clientStat,
            'projectStat' => $projectStat,
            'PattyCashStat' => $PattyCashStat,
            'catInStat' => $catInStat,
            'catOutStat' => $catOutStat,
        	'catInOutStat' => $catInOutStat,
        ]);
    }

    public function profileAction(){
        if(!AuthCtrl::user()) redirect_route('AuthCtrl:index');
        $bu = BoUsersElq::find(AuthCtrl::user()->bu_id);

        return view('backoffice.profile', [
            'sidebar' => $this->sideBar(),
            'row' => $bu,
            'lang' => BoUsersElq::lang(),
            'status' => $bu->status(),
            'validation' => BoUsersElq::jqv('ignore', 'bu_passwd'),
            'profile' => true,
        ]);
    }

    public function updateProfileAction(){
        if(!AuthCtrl::user()) redirect_route('AuthCtrl:index');
        $bu = BoUsersElq::find(AuthCtrl::user()->bu_id);
        // Check Initial Exist
        if(BoUsersElq::where('bu_id', '!=', AuthCtrl::user()->bu_id)->where(['bu_init' => post('bu_init')])->first()){
            return response(['pAlert' => [
                'title' => lang('gen.notif'),
                'msg' => lang_var('validation.unique', ['attribute' => BoUsersElq::lang('bu_init')]),
            ]]);
        }
        $bu->fill($_POST);

        $field_rules = "bu_real_name,bu_email,bu_name,bu_init,bu_pic";
        if($bu->isValid('only', $field_rules)){
            if(empty($_POST['bu_passwd'])) 
                unset($bu->bu_passwd);
            else
                $bu->fill(['bu_passwd' => sha1($_POST['bu_passwd'])]);

            $bu->save();

            return response([
                'info' => UI::alert(lang_var('gen.update_success', ['type' => "Profile"]), 'success'),
                'redirect' => route('DashboardCtrl:list'),
            ]);
        }
        return response(['pAlert' => [
            'title' => lang('gen.validation_error'),
            'msg' => $bu->ulError(),
        ]]);
    }

    static function clientsCount(){
    	return DtClientsElq::count();
    }

    static function projectsCount(){
    	return DtProjectsElq::count();
    }

    static function documentCount(){
        return DtDocumentElq::count();
    }

    static function contactCount(){
    	return DtContactsElq::count();
    }
}