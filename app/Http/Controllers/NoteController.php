<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use App\User;
use App\Appointement;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function makenote($id)
    {
        $id=$id;
        $appointements = Appointement::all();
        return view('Doctor.note.addnote',compact('id','appointements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'desc' => 'required',
            
        ]);
  
        Note::create($request->all());
   
        return redirect()->route('mypatients')
                        ->with('success','Note added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $User= User::All();
        $Notes= Note::All();
        $appointements = Appointement::all();
        $id=$id;
        
        return view('Doctor.Patientfile',compact('User','id','Notes','appointements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::find($id);
        $appointements = Appointement::all();
        return view('Doctor.note.editnote',compact('note','appointements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        $data = request()->except(['_token','_method']);
        Note::where('id', $request->id)->update($data);
        
      
  
        return redirect()->route('Note.show',$request->id)
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        Note::where('id', $note->id)->delete();
  
        return redirect()->route('mypatients')
                        ->with('success','Note deleted successfully');
    }
    
}
