<?php

// namespace App\Http\Controllers;
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use DB;

// use Illuminate\Http\Request;

class AuthController extends Controller
{
    // view login page
    public function index()
    {
        return view('auth.real-login');
    }

    // view registration page
    public function registration()
    {
        return view('auth.real-registration');
    }

    // get inputs from login page and redirect accordingly
    public function postLogin(Request $request)
    {
        $request->validate(
            [
                'username'=>'required',
                'password'=>'required',
            ]
        );

        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect()->intended('dashboard')->withSuccess('You have successfully logged in');
        }

        return redirect("login")->withSuccess('Oops! You have entered invalid credentials.');
    }

    // get inputs from registration and redirect
    public function postRegistration(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        
        return redirect("login")->with('message', "Successfully created account!");
        // return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    // view dashboard
    public function dashboard()
    {
        if(Auth::check())
        {
            $users = DB::table('users')->get();

            return view('real-dashboard', ['users'=>$users]);
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
