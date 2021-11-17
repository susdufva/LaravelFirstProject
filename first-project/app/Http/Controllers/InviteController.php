<?php

namespace App\Http\Controllers;
use App\Models\Invite;
use App\Models\Couple;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invites = Invite::all();
        return view('invites.index', compact('invites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invites.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    {        
        $couple = $request->session()->get('couple');
        $user_id = $couple->id;
        //$couple = Couple::find($couple->id);
        
        $request->validate([            
            'email'=>'required'       
            ]);        
        $invite = new Invite([            
            'email' => $request->get('email'),  
            'user_id' => $user_id       
        ]);    
        $invite->save();   
        return redirect()->route('create.step.four');     
       
    }   
     /**     * Display the specified resource.     *     
      * 
      * @param  int  $id     
      * @return \Illuminate\Http\Response    
      * 
     */    
    //public function store(Request $request)
    //{
        //$couple = DB::table('couple')->get('id');
        /* public function postCreateInvite(Request $request){

            $couple = $request->session()->get('couple');
            $user_id = $couple->couple_id = $couple->id;
            
            $request->validate([            
                'email'=>'required'       
                ]);        
            $invite = new Invite([            
                'email' => $request->get('email'),  
                'user_id' => $user_id       
            ]);    
            $invite->save();        
             */
            
            /*   $validatedData = $request->validate([
                'email' => 'required',      
            ]);
            
            if(empty($request->session()->get('couple'))){
                $couple = new Couple();
                $couple->fill($validatedData);
                $request->session()->put('couple', $couple);
                $couple->save();
            } */
            
            //return redirect()->route('create.step.four');
            
    //}

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
        //
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
        //
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
