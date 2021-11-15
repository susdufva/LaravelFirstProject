@extends('base')
@section('main')
<div class="row">
    <div class="col">
        <div class="step">
            <p class="step1"> </p> 
        </div>
        <div class="h1"> 
            <h1 class="display">Congratulations</h1>
        </div>
        <div class="span"> 
            <p class="confirm"> With Wedsly you get complete control over everything, from now until your big day. </br> Wedding planning is something joyful that can be shared with your </br> future spouse and with family and friends </br> - </br> Your friends at Wedsly</p>
        </div>
        <div>
            <img class="logo" src="img/wedsly.JPG"> </img>
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
            
            <div>
                <a href="http://www.wedsly.se" class="btn">Start planning </a>
            </div>
           
        </div>
    </div>
</div>
@endsection
