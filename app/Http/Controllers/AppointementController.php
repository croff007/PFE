<?php

namespace App\Http\Controllers;

use App\Appointement;
use Illuminate\Http\Request;

class AppointementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $appointements=Appointement::orderby('date','ASC')->paginate(5);
        return view('Doctor.appointement',compact('appointements'))->with('i',(request()->input('page',1)-1)*5);
    }



    public function mypatients()
    {
         
        $appointements=Appointement::orderby('date','ASC')->paginate(5);
        return view('Doctor.mypatients',compact('appointements'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Patient.makeappointement',compact('appointement'));
    }

    public function makeappointement($id)
    {
        $id=$id;
        return view('Patient.makeappointement',compact('id'));
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
            'date' => 'required',
            
        ]);

        Appointement::create($request->all());
            
        return redirect()->route('doctorlist')
                        ->with('success','Appointement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointement  $appointement
     * @return \Illuminate\Http\Response
     */
    public function show(Appointement $appointement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointement  $appointement
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointement $appointement)
    {
        return view('Doctor.editappointement',compact('appointement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointement  $appointement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointement $appointement)
    {
        
        
        $appointement->update($request->all());
  
        return redirect()->route('appointement.index')
                        ->with('success','Appointement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointement  $appointement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointement $appointement)
    {
        $appointement->delete();
  
        return redirect()->route('appointement')
                        ->with('success','Appointement deleted successfully');
    }
}
