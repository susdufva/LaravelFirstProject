@extends('base')
@section('main')
<div class="row">
    <div class="col">
        <div class="step">
            <p class="step1">Step 4/4 </p> 
        </div>
        <div class="h1"> 
            <h1 class="display">Spouse</h1>
        </div>
        <div class="span"> 
            <p class="names"> First add your partner, then you can add others to help you, like trusted friends</p>
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
            <form method="post" action="{{ route('invites.store')}}">
                @csrf
                <div class="form-group">
                    <label class="label3" for="budget">Partner Email</label>
                    <input type="text" class="input6" name="email"/>
                </div>
                <div>
                    <button type="submit" class="invite">invite </button>
                </div>
            </form>
            
                <div class="span"> 
                    <p class="change"> These details are easily changed in settings</p>
                </div>
                <a href="couples/confirm" class="btn">confirm your registration</a>
                <div class="">
                    <a href="couples/step3" class="cancel" id="a">Back</a>
                    <p class="cancel" id="b"> | </p>
                    <a href="#" class="cancel" id="c">Cancel</a>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection
