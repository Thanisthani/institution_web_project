<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function signup()
    {
        return view('registration');
    }

    public function store( Request $request)
    {   
        $validate=$request->validate([
            'username' => 'required | min:3',
            'email' => 'required | email | unique:students',
            'password' => [
                'required',
                Password::min(6)
                ->letters()
                ->numbers()
                ->symbols()
            ]
        ]);

        if($validate)
        {
            $student = new Student;
            $student -> username =$request->username;
            $student->email = $request ->email;
            $student->password =Hash::make($request ->password);
            $saved = $student-> save();
            if($saved)
            {
                $student2 = Student::where('email','=',$request->email)->first();
                session()->put('LoggedUser',$student2->id);
                return redirect('/home');
            }
            else
            {
                redirect('/signup')->with('fail','Something went wrong');
            }
            
        }
        else
        {
            redirect('/signup');
        }

        
      /*      $student->username = $request -> validate(['username' => 'required | min:3']);
        $student->email = $request -> validate(['email' => 'required | email']);
        $student->password = $request -> validate(['password' => 'required']);
        $saved = $student-> save();*/

       
        
    }

    public function signin()
    {
        return view('signin');
    }

    public function check(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        $student = Student::where('email','=',$request->email)->first();

        if($student)
        {
            if(Hash::check($request->password,$student->password))
            {
                $request->session()->put('LoggedUser',$student->id);
                return redirect('/home');
            }
            else
            {
                return redirect('/signin')->with('fail','Invaild password');
            }
        }
        else{
            return redirect('/signin')->with('fail','No account found for this email');
        }
    }
}
