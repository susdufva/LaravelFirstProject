@extends('base')
@section('main')
<div class="row">
    <div class="col">
        <div class="step">
            <p class="step1">Step 2/4 </p> 
        </div>
        <div class="h1"> 
            <h1 class="display">When & where</h1>
        </div>
        <div class="span"> 
            <p class="names"> A joyous wedding starts with really great planning. We are happy to help</br> you get there. </p>
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
                    <label class="label3" for="location">Somewhere around here</label>
                    <input type="search" class="input3" name="location"/>
                </div>
          
                <div class="form-group">
                    <label class="label4" for="date">Probably on this date</label>
                    <input type="date" class="input4" name="date"/>
                </div>
        
                <div class="span"> 
                    <p class="change"> These details are easily changed in settings.</p>
                </div>
                <button type="submit" class="btn">Next</button>
                <div class="">
                    <a href="step3" class="cancel" id="a">Back</a>
                    <p class="cancel" id="b"> | </p>
                    <a href="#" class="cancel" id="c">Cancel</a>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection
