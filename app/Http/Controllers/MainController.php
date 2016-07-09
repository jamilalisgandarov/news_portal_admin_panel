<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Author;
use App\User;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\EncryptCookies;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\VerifyCsrfToken;

class MainController extends Controller
{
           function register(Author $author,Request $request ){
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:authors',
            'password'=>'required|min:8'
        ]);
        $author=new Author;
        $author->first_name=$request->first_name;
        $author->last_name=$request->last_name;
        $author->email=$request->email;
        $author->password=$request->password;
        $author->save();
       return redirect('/home');
}
    		function showRequests(Author $author){
    			$authors=$author->get();
                 $id=\Auth::user()->id;
                 $user=User::find($id);
    			return view('adminPanel.requests')
                ->with(compact('authors'))
                ->with(compact('user'));
    		}


            function delete(Author $author){
                $author->delete();
                return back();
            }
            function insert(Author $author,User $user){
                $user=new User;
                $user->first_name=$author->first_name;
                $user->last_name=$author->last_name;
                $user->email=$author->email;
                $user->password=\Hash::make($author->password);
                $user->status=1;
                $user->save();
                $author->delete();
                return back();

            }
            function getData(){
                 $id=\Auth::user()->id;
                 $user=User::find($id);
                 return view('home',compact('user'));
            }
}
