<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Artisan;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;

class CategoryController extends Controller
{
	protected $rules =
    [
        'name' => 'required',
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
    	$data = Categorie::orderBy('id','desc')->get();

        return view('admin.category.category',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create',compact('data'));
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
	        $data = new Categorie();
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
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$data = Categorie::findOrFail($id);
        return view('admin.category.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    	$validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }else{
	        
	        $input = $request->all();
	        $data = Categorie::findOrFail($id);
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
        $data = Categorie::findOrFail($id);
        $data->delete();
        
        $msg = '<div class="alert alert-success">Data Delete Successfully.</div>';
        return response()->json($msg);
    }
}
