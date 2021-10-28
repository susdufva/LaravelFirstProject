@extends('base')
@section('main')
<div class="row">
    <div class="col">
        <div class="step">
            <p class="step1">Step 1/4 </p> 
        </div>
        <div class="h1"> 
            <h1 class="display">Add your names</h1>
        </div>
        <div class="span"> 
            <p class="names"> Soon one of you might change your last name. For now, your first </br> names will do. </p>
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
                    <label class="label1" for="name">My Name*</label>
                    <input type="text" class="input1" name="name"/>
                </div>
                <div class="form-group">
                    <select class="select1" name="gender1" id="gender1">
                        <option value="woman">Woman</option>
                        <option value="man">Man</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label2" for="partner_name">My Partner's Name*</label>
                    <input type="text" class="input2" name="partner_name"/>
                </div>
                <div class="form-group">
                    <select class="select2" name="gender2" id="gender2">
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>
                    </select>
                </div>
                <div class="span"> 
                    <p class="change"> These details are easily changed in settings.</p>
                </div>
                <button type="submit" class="btn">Continue</button>
                <a href="#" class="cancel">Cancel  X</a>
            </form>
        </div>
    </div>
</div>
@endsection
