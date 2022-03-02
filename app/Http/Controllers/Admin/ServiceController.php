<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Artisan;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;

class ServiceController extends Controller
{
	protected $rules =
    [
        'name' => 'required',
        'icon' => 'required',
        'description' => 'required|max:200',
    ];
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data = Service::orderBy('id','desc')->get();

        return view('admin.service.service',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }else{
        	$input = $request->all();
	        $data = new Service();
	        $data->fill($input)->save();
	    	//--- Redirect Section
            $msg = '<div class="alert alert-success">Data store Successfully.</div>';
            return response()->json($msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Service::findOrFail($id);

        return view('admin.service.serviceview',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Service::findOrFail($id);

        return view('admin.service.serviceupdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }else{
	        
	        $input = $request->all();
	        $data = Service::findOrFail($id);
	        $data->update($input);
	    	//--- Redirect Section
            $msg = '<div class="alert alert-success">Data Update Successfully.</div>';
            return response()->json($msg);
            //--- Redirect Section Ends
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Service::findOrFail($id);
        $data->delete();
        
        $msg = '<div class="alert alert-success">Data Delete Successfully.</div>';
        return response()->json($msg);
    }
}
