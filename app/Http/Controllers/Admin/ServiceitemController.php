<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Servicesitem;
use Artisan;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;

class ServiceitemController extends Controller
{
	protected $rules =
    [
        'item_name' => 'required',
        'ser_id' => 'required',
        // 'icon' => 'required',
        // 'description' => 'required|max:200',
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
    	$data = Servicesitem::orderBy('id','desc')->get();

        return view('admin.service.serviceitem',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Service::orderBy('id','asc')->get();
        return view('admin.service.itemcreate',compact('data'));
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
	        $data = new Servicesitem();
	        $olddata = '';

	        if ($file = $request->file('image'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$olddata);
                $input['image'] = $name;
            }

            if ($file = $request->file('image1'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$olddata);
                $input['image1'] = $name;
            }

            if ($file = $request->file('image2'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$olddata);
                $input['image2'] = $name;
            }

            if ($file = $request->file('image3'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$olddata);
                $input['image3'] = $name;
            }

	        $data->fill($input)->save();


	        Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('route:clear');
            Artisan::call('view:clear');
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
        $data = Servicesitem::findOrFail($id);

        return view('admin.service.serviceitemview',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Servicesitem::findOrFail($id);
        return view('admin.service.serviceitemupdate',compact('data'));
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
	        $data = Servicesitem::findOrFail($id);

	        if ($file = $request->file('image'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data['image']);
                $input['image'] = $name;
            }

            if ($file = $request->file('image1'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data['image1']);
                $input['image1'] = $name;
            }

            if ($file = $request->file('image2'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data['image2']);
                $input['image2'] = $name;
            }

            if ($file = $request->file('image3'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data['image3']);
                $input['image3'] = $name;
            }




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
        $data = Servicesitem::findOrFail($id);
        $data->delete();
        
        $msg = '<div class="alert alert-success">Data Delete Successfully.</div>';
        return response()->json($msg);
    }
}
