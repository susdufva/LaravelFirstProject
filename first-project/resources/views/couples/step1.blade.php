@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add a contact</h1>
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
                    <label for="name">My Name*</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="gender1">Woman</label>
                    <select name="gender1" id="gender1">
                        <option value="woman">Woman</option>
                        <option value="man">Man</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="partner_name">My Partner's Name*</label>
                    <input type="text" class="form-control" name="partner_name"/>
                </div>
                <div class="form-group">
                    <label for="gender1">Woman</label>
                    <select name="gender1" id="gender1">
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>
                    </select>
                </div>
              
                <button type="submit" class="btn btn-primary-outline">Continue</button>
                <a href="#">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
