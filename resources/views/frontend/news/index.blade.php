@extends('frontend.layouts.master')
@section('main_contant')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div >
	@if (session()->has('message'))
		<li class="alert alert-success">{{session()->get('message')}}</li>
	@endif
    
</div>

	<form action="{{ route('newsletter') }}" method="POST" role="form">
		@csrf
		<legend>Join Our newsletter</legend>
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" name="email" class="form-control" placeholder="Enter Email">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>


	</form>

@endsection