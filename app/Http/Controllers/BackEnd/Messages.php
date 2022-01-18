<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\BackEnd\Messages\Store;

class Messages extends BackEndController
{
    public function index()
    {
        $messages=Message::paginate(5);
        return view('back-end.messages.index',compact('messages'));
    }

    

    public function edit($id)
    {
        $message=Message::findOrFail($id);
        return view('back-end.messages.edit',compact('message'));
    }


    public function update(Store $request, $id)
    {
       $message=Message::findOrFail($id);

         $requestArray=$request->all();         
           
         $message->update($requestArray);

         return redirect()->route('messages.edit',['id'=>$message->id]);
            
    }
    public function destroy($id){

        $message=Message::findOrFail($id);
        $message->delete();
        return redirect()->route('messages.index');
    }
}
