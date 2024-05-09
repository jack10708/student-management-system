<?php

namespace App\Http\Controllers;

use App\Models\smasy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\RedirectResponse;

class authcontroller extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    
public function register_user(request $request):RedirectResponse
{
        $request->validate([
            'name'=>['required'],
            'email' => ['required|email|unique:smasies,email'],
            'student_id' => ['required|unique:smasies,student_id'],
            'password'=>[ 'required|min:8|unique:password'],

        ]);
        dd($request->all());
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect('login')->withSuccess('You have signed-in');

}

public function create(array $data){
    return smasy::create([
        'name'=> $data['name'],
        'student_ID'=> $data['student_ID'],
        'email'=> $data['email'],
        'password'=>Hash::make($data['password']) ,
    ]);
            
}



}