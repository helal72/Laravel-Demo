@extends('frontend.layouts.master')
@section('main_contant')
	<legend>Add Company</legend>
	<div >
		@if (session()->has('message'))
			<li class="alert alert-success">{{session()->get('message')}}</li>
		@endif
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Company Name</th>
				<th>Address</th>
				<th>Slug</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($company as $element)
				<tr>
					<td>{{ $loop ->index + 1}}</td>
					<td>{{ $element->name }}</td>
					<td>{{ $element->address }}</td>
					<td>{{ $element->slug }}</td>
					<td>
						<a href="{{route('company.show' , $element->id) }}" class="btn btn-success">Edit</a> | <form action="{{Route('company.delete' , $element->id)}}" method="POST">
							@csrf
							<button class="btn btn-danger">Delete</button>
						</form>
						
					</td>
				</tr>
			@endforeach
			{!! $company->links() !!}
		</tbody>
	<a href="{{Route('company.add')}}" class="btn btn-info" >Add Company</a>
	</table>
@endsection