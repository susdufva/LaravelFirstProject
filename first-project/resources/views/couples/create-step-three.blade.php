@extends('base')
@section('main')
<div class="row">
    <div class="col">
        <div class="step">
            <p class="step1">Step 3/4 </p> 
        </div>
        <div class="h1"> 
            <h1 class="display">How much can we spend?</h1>
        </div>
        <div class="span"> 
            <p class="names"> There is no limit to what a wedding may or can cost. Regeradless of your estimated budget</br> we are glad to help you make your dream-wedding come true. </p>
        </div>
        <div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div><br/>
            @endif
            <form method="post" action="{{ route('couples.create.step.three.post') }}">
                @csrf
                <div class="form-group">
                    <label class="label5" for="budget">Estimated Budget</label>
                    <input type="text" pattern="\d*" class="input5" name="budget"/>
                    <!-- pattern \d is the expression for a number, 
                    * means that it accepts more than one of them. -->

                </div>
        
                <div class="span"> 
                    <p class="change"> These details are easily changed in settings</p>
                </div>
                <button type="submit" class="btn">Just one more step</button>
                <div class="">
                    <a href="step2" class="cancel" id="a">Back</a>
                    <p class="cancel" id="b"> | </p>
                    <a href="http://www.wedsly.se" class="cancel" id="c">Cancel</a>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection
