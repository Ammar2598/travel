<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\BackEnd\Users\Store;
use App\Http\Requests\BackEnd\Users\Update;


class Users extends BackEndController
{

    public function index()
    {
        $users=User::paginate(5);
        return view('back-end.users.index',compact('users'));
    }

    public function create()
    {
        return view('back-end.users.create');
    }


    public function store(Store $request)
    {

         $requestArray=$request->all();
         $requestArray['password'] = Hash::make($requestArray['password']);
         User::create($requestArray);
         return redirect()->route('users.index');
    }



    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('back-end.users.edit',compact('user'));
    }

    public function update(Update $request, $id)
    {
       $user=User::findOrFail($id);

           $requestArray=$request->all();
            
            if (isset($requestArray['password'])&& $requestArray['password']!="") {
                $requestArray['password']=Hash::make($requestArray['password']);
           
            }else{
                unset($requestArray['password']);
            }
           
         $user->update($requestArray);

         return redirect()->route('users.edit',['id'=>$user->id]);
            
    }
    public function destroy($id){

        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
