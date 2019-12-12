@extends('backend.layouts.app');

@section('content')

<div class="card">
	<div class="card-header">
	<h3 class="card-title">Add New Posts</h3>
		</div>
		<!-- /.card-header -->
	<div class="card-body">
	@include('backend.error.error')
	@include('backend.error.success')
	<form role="form" action="{{ route('post.store') }}" method="post">
		@csrf
        <div class="card-body">
          <div class="form-group">
            <label>Post Title</label>
            <input type="name" class="form-control" name="title" placeholder="Enter Title">
          </div>

          <div class="form-group">
            <label>Post Body</label>
           <textarea id="editor1" name="body"></textarea>
          </div>
          
          <select name="category_id" id="input" class="form-control" required="required">
            @foreach ($categories as $category)
             <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
          
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="isActive" value="1">
            <label class="form-check-label" for="exampleCheck1">Publish?</label>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
</div>
<!-- /.card-body -->
</div>

@endsection
@section('ckeditor')
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
   <script>
      CKEDITOR.replace( 'editor1' );
  </script>
@endsection

{{--  ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. --}}