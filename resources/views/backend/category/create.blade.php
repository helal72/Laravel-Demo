@extends('backend.layouts.app');

@section('content')

<div class="card">
	<div class="card-header">
	<h3 class="card-title">Category List</h3>
		</div>
		<!-- /.card-header -->
	<div class="card-body">
	@include('backend.error.error')
	@include('backend.error.success')
	<form role="form" action="{{ route('category.store') }}" method="post">
		@csrf
        <div class="card-body">
          <div class="form-group">
            <label>Category Name</label>
            <input type="name" class="form-control" name="name" placeholder="Enter Category">
          </div>
          
          
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="isActive" value="1">
            <label class="form-check-label" for="exampleCheck1">Publish?</label>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
</div>
<!-- /.card-body -->
</div>

@endsection

