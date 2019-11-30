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

	<form action="{{ route('company.store') }}" method="POST" role="form">
		@csrf
		<legend>Add Company</legend>
		<div class="form-group">
			<label for="">Company name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter Company name">
		</div>

		<div class="form-group">
			<label for="">Company Address</label>
			<input type="text" name="address" class="form-control" placeholder="Enter Company Address">
		</div>

		<button type="submit" class="btn btn-primary">create</button>
		<a href="{{URL::to('companies')}}" class="btn btn-danger">Back</a>
		
		

	</form>

@endsection