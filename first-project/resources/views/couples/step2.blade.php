@extends('base')
@section('main')
<div class="row">
    <div class="col">
        <div class="step">
            <p class="step1">Step 2/4 </p> 
        </div>
        <div class="h1"> 
            <h1 class="display">When & Where</h1>
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
                    <label class="label3" for="location">Location</label>
                    <select id="countries" name="location" class="input3"></select>
                </div>
                
                <div class="form-group">
                    <label class="label4" for="date">Date</label>
                    <input type="date" class="input4" name="date"/>
                </div>
        
                <div class="span"> 
                    <p class="change"> These details are easily changed in settings</p>
                </div>
                <button type="submit" class="btn">Next</button>
                <div class="">
                    <a href="couples/create" class="cancel" id="a">Back</a>
                    <p class="cancel" id="b"> | </p>
                    <a href="http://www.wedsly.se" class="cancel" id="c">Cancel</a>
                </div>
                
            </form>
        </div>
    </div>
    
</div>
@endsection
@section('app')
    <script src="js/app.js"><script>
@stop