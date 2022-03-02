<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;

class LoginController extends Controller
{
    public function __construct()
    {
      //$this->middleware('guest:admin', ['except' => ['logout']]);
      $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
      return view('admin.login');
    }

    public function login(Request $request)
    {
        // --- Validation Section
        $rules = [
                  'email'   => 'required|email',
                  'password' => 'required'
                ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

      // Attempt to log the user in
          if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember) ) {
            // if successful, then redirect to their intended location
            return response()->json(route('admin-dashboard'));
            //return redirect('dashboard');
            //return redirect()->intended(route('admin-dashboard'));
          }
        

      //if unsuccessful, then redirect back to the login with the form data
        return response()->json(array('errors' => [ 0 => '<div class="alert alert-danger">Credentials Doesn\'t Match !</div>' ]));     
    }

    
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->intended(route('admin-login'));
    }
}
