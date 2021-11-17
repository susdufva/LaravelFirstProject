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
    public function createStepOne(Request $request)
    {
        $couple = $request->session()->get('couple');
        return view('couples.create-step-one', compact('couple')); 
       
    }

    /**
     * Post Request to store step1 info in session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',  
            'gender1' => 'required',           
            'partner_name' => 'required', 
            'gender2' => 'required',     
        ]);
  
        if(empty($request->session()->get('couple'))){
            $couple = new Couple();
            $couple->fill($validatedData);
            $request->session()->put('couple', $couple);
            $couple->save();  /*Save to generate id*/ 
        }else{
            $couple = $request->session()->get('couple');
            $couple->fill($validatedData);
            $request->session()->put('couple', $couple);
        }
  
        return redirect()->route('create.step.two');
        
    }
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function createStepTwo(Request $request)
    {
        $couple = $request->session()->get('couple');
        return view('couples.create-step-two', compact('couple')); 
       
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'location' => 'required',
            'date' => 'required',
            
        ]);
  
        $couple = $request->session()->get('couple');
        $couple->fill($validatedData);
        $request->session()->put('couple', $couple);
  
        return redirect()->route('create.step.three');
    }
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $couple = $request->session()->get('couple');
        return view('couples.create-step-three',compact('couple'));
    }
    
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function postCreateStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'budget' => 'required',
            
        ]);
  
        $couple = $request->session()->get('couple');
        $couple->fill($validatedData);
        $request->session()->put('couple', $couple);
      
        return redirect()->route('create.step.four');
    }
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepFour(Request $request)
    {
        $couple = $request->session()->get('couple'); 
        return view('couples.create-step-four',compact('couple'));
    }
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function postCreateStepFour(Request $request)
    {
        $couple = $request->session()->get('couple');
        $couple->save(); /*Save rest of the data*/ 
        $request->session()->forget('couple');
  
        return redirect()->route('create.confirm');
    }
    
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createConfirm(Request $request)
    {
        $couple = $request->session()->get('couple');
  
        return view('couples.create-confirm',compact('couple'));
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


