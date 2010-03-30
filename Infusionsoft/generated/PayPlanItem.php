<?php
class Infusionsoft_Generated_PayPlanItem extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'PayPlanId', 'DateDue', 'AmtDue', 'Status', 'AmtPaid');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('PayPlanItem', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
}
