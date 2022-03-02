<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Footer;
use Artisan;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;

class FooterController extends Controller
{
	protected $rules =
    [
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required|max:200',
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
    	$data = Footer::findOrFail(1);

        return view('admin.footer.footer',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function social()
    {
        $data = Footer::findOrFail(1);
        return view('admin.footer.social',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function socialaction(Request $request)
    {
        	$input = $request->all();
	        $data = Footer::findOrFail(1);

	        if ($request->is_twitter == ""){
	            $input['is_twitter'] = '0';
	        }

	        if ($request->is_facebook == ""){
	            $input['is_facebook'] = '0';
	        }

	        if ($request->is_linkedin == ""){
	            $input['is_linkedin'] = '0';
	        }

	        if ($request->is_pinterest == ""){
	            $input['is_pinterest'] = '0';
	        }

	        $data->update($input);
	    	//--- Redirect Section
            $msg = '<div class="alert alert-success">Data Update Successfully.</div>';
            return response()->json($msg);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    	$validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }else{
	        
	        $input = $request->all();
	        $data = Footer::findOrFail(1);
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
        //
    }
}
