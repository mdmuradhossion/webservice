<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Ourgoal;
use App\Models\Servicesitem;
use App\Models\Generalsettings;
use App\Models\Contact;
use App\Models\Chooseu;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::orderBy('id','asc')->take(4)->get();
        $banner = Generalsettings::findOrFail(1);
        $ourgoal = Ourgoal::where('status','1')->orderBy('id','asc')->get();
        $chooseus = Chooseu::findOrFail(1);

        return view('front.index',compact('service','banner','ourgoal','chooseus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        $service = Service::orderBy('id','asc')->get();
        return view('front.services',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function portfolio()
    {
        return view('front.portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        return view('front.blog');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $data = Contact::findOrFail(1);
        return view('front.contact',compact('data'));
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
        //
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
