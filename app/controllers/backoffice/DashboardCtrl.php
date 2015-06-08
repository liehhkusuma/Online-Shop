<?php
class DashboardCtrl extends AdminCtrl{

	protected $ctrl = __CLASS__;

    function listAction(){
        return view('backoffice.dashboard', [
        	'sidebar' => $this->sideBar(),
        	'title' => "SMERP",
        ]);
    }
}