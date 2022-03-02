<?php // Code within app\Helpers\Helper.php

namespace App;
use DB;
class Helpers
{
    public static function logo()
    {
        $query = DB::table('generalsettings')->where('id',1);
    	$rowCount = count($query->get());
    	($rowCount !== 0)?$result = $query->first()->logo:$result = 'No Logo';        
        return $result;
    }

    public static function contact()
    {
        $query = DB::table('contacts')->where('id',1);
        $rowCount = count($query->get());
        ($rowCount !== 0)?$result = $query->first():$result = 'No Logo';        
        return $result;
    }

    public static function get_data_by_id($needCol, $table, $whereCol, $whereInfo){
    	$query = DB::table($table)->where($whereCol, $whereInfo);
    	$rowCount = count($query->get());
    	($rowCount !== 0)?$result = $query->first()->$needCol:$result = 'No Data Found';        
        return $result;
    }

    public static function getListInOption($selected, $tblId, $needCol, $table){
        	$query = DB::table($table);
			$options = '';
        	foreach ($query->get() as $value) {
            $options .= '<option value="' . $value->$tblId . '" ';
            $options .= ($value->$tblId == $selected ) ? ' selected="selected"' : '';
            $options .= '>' . $value->$needCol. '</option>';
        	}
    		return $options;
    }

    public static function get_service_item($id){
    	$query = DB::table('servicesitems')->where('ser_id',$id)->get();

    	$data = '';
    	foreach ($query as $value) {
    		$data .= '<li>> <a href="#" style="color:#6A6A6A;">'.$value->item_name.'</a></li>';
    	}

    	return $data;
    }
}