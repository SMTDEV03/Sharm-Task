<?php

namespace App\Http\Controllers;
use App\Models\projectnew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function insertdata(Request $req){
        $req->validate([
            'Name' => 'required',
            'email' => 'required|email|unique',
            'phone' => 'required',
        ]
       
      );
        $fname=$req->fname;
        $email=$req->email;
        $phone=$req->phone;
        $laraveltbl =new projectnew;
        $laraveltbl->fname=$fname;
        $laraveltbl->email=$email;
        $laraveltbl->phone=$phone;
        $laraveltbl->save();
        return redirect('/create')->with('success','Data Inserted');
    }
    public function display(){
        $users =projectnew::all();
        return view('display', ['users' => $users]);
    }
     public function editdata($id){
      $data =projectnew::find($id);
      return view('EditRecord', ['data' => $data]);
    }

    public function updateRecord(Request $req){
        $update =projectnew::find($req->id);
        $update->fname=$req->fname;
        $update->email=$req->email;
        $update->phone=$req->phone;
        $update->save();
        return redirect('display');
    }
     public function delete($id){
        $delete=projectnew::find($id);
        $delete->delete();
        return redirect('display');
     }
}
