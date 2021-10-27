@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">When and where</h1>
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
                    <label for="location">Location</label>
                    <input type="search" class="form-control" name="location"/>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
               
                <button type="submit" class="btn btn-primary-outline">Continue</button>
                <a href="step1">Back</a>
                <a href="step3">Next</a>
            </form>
        </div>
    </div>
</div>
@endsection
