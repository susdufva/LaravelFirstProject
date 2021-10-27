<?php

namespace App\Http\Controllers;
use App\Models\Couple;
use Illuminate\Http\Request;

class CoupleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $couples = Couple::all();
        return view('couples.index', compact('couples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('couples.step1'); 
        //lägg till alla steps här
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
            'name'=>'required'       
            ]);        
        $couple = new Couple([            
            'name' => $request->get('name'),  
            'gender1' => $request->get('gender1'),           
            'partner_name' => $request->get('partner_name'), 
            'gender2' => $request->get('gender2'),           
            'date' => $request->get('date'),            
            'location' => $request->get('location'),            
            'budget' => $request->get('budget')                   
        ]);    
        $couple->save();        
        
        return redirect('/couples')->with('success', 'Couple saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $couple = Couple::find($id);        
        return view('couples.edit', compact('couple'));            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([            
            'name'=>'required'                   
        ]);        
        $couple = Couple::find($id);        
        $couple->name =  $request->get('name');        $couple->gender1 = $request->get('gender1');        $couple->partner_name = $request->get('partner_name');        $couple->gender2 = $request->get('gender2');        $couple->date = $request->get('date');        
        $couple->location = $request->get('location');     
        $couple->budget = $request->get('budget');   
        $couple->save();        
        return redirect('/couples')->with('success', 'Couple updated!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


