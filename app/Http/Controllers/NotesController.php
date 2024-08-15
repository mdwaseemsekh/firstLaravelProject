<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Notes;

class NotesController extends Controller
{
    public function index(){
        if(Auth::check()){
        $notes = Notes::all();
        return view('index',['notes'=>$notes]);
        }
        else{
        return redirect()->route('login');
        }
    }
    public function create(Request $request){
        if(Auth::check()){
        $note = new Notes;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
        return redirect('/')->with('addStatus','note added successfull');
        }

        else{
            return redirect('/');
        }
    }
    
    public function edit($id) {
        if(Auth::check()){
        $note = Notes::findOrFail($id);
        return view('edit',['note'=>$note]);
        }
        else{
         return redirect('/');
        }
    }
    public function update(Request $request, $id) 
    {
        if(Auth::check()){
        $note = Notes::findOrFail($id);
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
        return redirect('/')->with('updateStatus','Updated Successfully');
        }

        else{
            return redirect('/');
        }
    }

    public function delete($id){
        if(Auth::check()){
        $note = Notes::findOrFail($id);
        $note->delete();
        return redirect('/')->with('deleteStatus','Note Deleted Successfully');
        }
        else{
            return redirect('/');
        }
    }


    public function authentication(Request $request){
        
    }
}




