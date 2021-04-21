extends('layouts.page')
section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/product/{{$product_id}}" method="POST">
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="{{$user->$name}}">
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="{{$user->email">
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="text" name="phone" class="form-control" value="{{$user->phone">
			</div>
			<button type="submit" class="btn btn-sm btn-success">SAVE
				
			</button>
				
			</div>
		</form>
	</div>
</div>
endsection