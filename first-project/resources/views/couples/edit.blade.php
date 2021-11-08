@extends('base') 
@section('main')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('couples.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
        </div>
    @endif
  
    <form action="{{ route('couples.update',$couple->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="form-group">
                    <label class="label3" for="location">Location</label>
                    <select id="countries" name="location" value="{{ $couple->location }}" class="input3"></select>
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