extends('layouts.page')
section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form type="/product/{{$product->$id}}" method="POST">
			<input type="hidden" name="_method"value="PUT">
			<th>Category</th><td>{{$product->category}}</td>
			<th>Item No</th><td>{{$product->item_no}}</td>
			<th>User</th><td>{{$product->user}}</td>
			
		</form>
	</div>
</div>
endsection