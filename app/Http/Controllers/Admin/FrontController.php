<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Generalsettings;
use App\Models\Brand;
use App\Models\Admin;
use App\Models\Portfolio;
use App\Models\Categorie;
use Artisan;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;

class FrontController extends Controller
{
    protected $rules =
    [
        'logo'              => 'mimes:jpeg,jpg,png,svg',
        // 'favicon'           => 'mimes:jpeg,jpg,png,svg',
        // 'loader'            => 'mimes:gif',
        // 'admin_loader'      => 'mimes:gif',
        // 'affilate_banner'   => 'mimes:jpeg,jpg,png,svg',
        // 'error_banner'      => 'mimes:jpeg,jpg,png,svg',
        // 'popup_background'  => 'mimes:jpeg,jpg,png,svg',
        // 'invoice_logo'      => 'mimes:jpeg,jpg,png,svg',
        // 'user_image'        => 'mimes:jpeg,jpg,png,svg',
        // 'footer_logo'        => 'mimes:jpeg,jpg,png,svg',
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
        $data = Generalsettings::findOrFail(1);

        return view('admin.logo',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generalsettings(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }else{

            $input = $request->all();
            $data = Generalsettings::findOrFail(1);

            if ($file = $request->file('logo'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->logo);
                $input['logo'] = $name;
            }

            if ($file = $request->file('slider_1'))
            {
                $slidername = time().$file->getClientOriginalName();
                $data->upload($slidername,$file,$data->slider_1);
                $input['slider_1'] = $slidername;
            }

            if ($file = $request->file('slider_2'))
            {
                $slidername = time().$file->getClientOriginalName();
                $data->upload($slidername,$file,$data->slider_2);
                $input['slider_2'] = $slidername;
            }
            if ($file = $request->file('slider_3'))
            {
                $slidername = time().$file->getClientOriginalName();
                $data->upload($slidername,$file,$data->slider_3);
                $input['slider_3'] = $slidername;
            }
            if ($file = $request->file('slider_4'))
            {
                $slidername = time().$file->getClientOriginalName();
                $data->upload($slidername,$file,$data->slider_4);
                $input['slider_4'] = $slidername;
            }


           $data->update($input);
            //--- Logic Section Ends


            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('route:clear');
            Artisan::call('view:clear');

            //--- Redirect Section
            $msg = '<div class="alert alert-success">Data Save Successfully.</div>';
            return response()->json($msg);
            //--- Redirect Section Ends
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function banner()
    {
        $data = Generalsettings::findOrFail(1);
        return view('admin.banner',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function brandlist(){
        $data = Brand::orderBy('id','desc')->get();
        return view('admin.brandlist',compact('data'));
    }

    public function brand()
    {
        $data = DB::table('brands')->get();
        return view('admin.brand',compact('data'));
    }

    public function brandaction(Request $request){

        $rules = [
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,svg',
        ];

        $customs = [
            'name.required' => 'Please input name.',
        ];

        $validator = Validator::make($request->all(), $rules, $customs);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $data = new Brand();
        $input = $request->all();

        if ($file = $request->file('image'))
        {
            $name = time().$file->getClientOriginalName();
            $data->upload($name,$file,$data->image);
            $input['image'] = $name;
        }
        $data->fill($input)->save();

        //--- Redirect Section
        $msg = '<div class="alert alert-success">Brand Save Successfully.</div>';
        return response()->json($msg);
        //--- Redirect Section Ends
    }

    public function brandedit($id)
    {
        $data = Brand::findOrFail($id);
        return view('admin.brandupdate',compact('data'));
    }

    public function brandupdate(Request $request,$id){

        $rules = [
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,svg',
        ];

        $customs = [
            'name.required' => 'Please input name.',
        ];

        $validator = Validator::make($request->all(), $rules, $customs);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $data = Brand::findOrFail($id);
        $input = $request->all();

        if ($file = $request->file('image'))
        {
            $name = time().$file->getClientOriginalName();
            $data->upload($name,$file,$data->image);
            $input['image'] = $name;
        }
        $data->update($input);

        //--- Redirect Section
        $msg = '<div class="alert alert-success">Brand Update Successfully.</div>';
        return response()->json($msg);
        //--- Redirect Section Ends
    }

    public function branddestroy($id){
        $data = Brand::findOrFail($id);
        $data->delete();
        //--- Redirect Section
        $msg = '<div class="alert alert-success">Brand Delete Successfully.</div>';
        return response()->json($msg);
        //--- Redirect Section Ends
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function portfolioslist()
    {
        $data =  Portfolio::orderBy('id','desc')->get();
        return view('admin.portfolio.portfolioslist',compact('data'));
    }

    public function portfolios()
    {
        $data =  Categorie::orderBy('id','desc')->where('status','1')->get();
        return view('admin.portfolio.portfolio',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function portfolioaction(Request $request)
    {
        $rules = [
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,svg',
        ];

        $customs = [
            'name.required' => 'Please input name.',
        ];

        $validator = Validator::make($request->all(), $rules, $customs);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }


            $data = new Portfolio();
            $input = $request->all();

            if ($file = $request->file('image'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->image);
                $input['image'] = $name;
            }

            if ($file = $request->file('full_image'))
            {
                $name2 = time().$file->getClientOriginalName();
                $data->upload($name2,$file,$data->full_image);
                $input['full_image'] = $name2;
            }
            $data->fill($input)->save();

            //--- Redirect Section
            $msg = '<div class="alert alert-success">Portfolio Save Successfully.</div>';
            return response()->json($msg);
            //--- Redirect Section Ends
    }

    public function portfolioupdate($id){
        $categorie =  Categorie::orderBy('id','desc')->where('status','1')->get();
        $data = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit',compact('data','categorie'));
    }

    public function portfolioupdateaction(Request $request,$id){
        $rules = [
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,svg',
        ];

        $customs = [
            'name.required' => 'Please input name.',
        ];

        $validator = Validator::make($request->all(), $rules, $customs);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }


            $data = Portfolio::findOrFail($id);
            $input = $request->all();

            if ($file = $request->file('image'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->image);
                $input['image'] = $name;
            }

            if ($file = $request->file('full_image'))
            {
                $name2 = time().$file->getClientOriginalName();
                $data->upload($name2,$file,$data->full_image);
                $input['full_image'] = $name2;
            }
            $data->update($input);

            //--- Redirect Section
            $msg = '<div class="alert alert-success">Portfolio Update Successfully.</div>';
            return response()->json($msg);
            //--- Redirect Section Ends
    }

    public function portfolioview($id){
        $data = Portfolio::findOrFail($id);
        return view('admin.portfolio.view',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Portfolio::findOrFail($id);
        $data->delete();
        
        $msg = '<div class="alert alert-success">Data Delete Successfully.</div>';
        return response()->json($msg);
    }

    public function header(){
        $data = Generalsettings::findOrFail(1);
        return view('admin.header',compact('data'));
    }

    public function headeraction(Request $request){
        $rules = [
            'sitetitle' => 'required',
            'metatitel' => 'required',
        ];

        $customs = [
            'sitetitle.required' => 'Please input Title.',
        ];

        $validator = Validator::make($request->all(), $rules, $customs);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }


            $data = Generalsettings::findOrFail(1);
            $input = $request->all();

            if ($file = $request->file('favicon'))
            {
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->favicon);
                $input['favicon'] = $name;
            }
            
            $data->update($input);

            //--- Redirect Section
            $msg = '<div class="alert alert-success">Header Data Update Successfully.</div>';
            return response()->json($msg);
            //--- Redirect Section Ends
    }
}
