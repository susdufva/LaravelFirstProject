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
            <form method="post" action="{{ route('couples.store') }}">
                @csrf
                <div class="form-group">
                    <label class="label3" for="budget">Estimated Budget</label>
                    <input type="text" class="input5" name="budget"/>
                </div>
        
                <div class="span"> 
                    <p class="change"> These details are easily changed in settings</p>
                </div>
                <button type="submit" class="btn">Just one more step</button>
                <div class="">
                    <a href="step2" class="cancel" id="a">Back</a>
                    <p class="cancel" id="b"> | </p>
                    <a href="#" class="cancel" id="c">Cancel</a>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection
