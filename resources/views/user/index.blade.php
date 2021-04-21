extends('layouts.page')
section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<a href="user/create" class="btn btn-sm btn-success"> Create User</a>
		<table class= "table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
				</tr>
				@foreach($users as $user)
				<tbody>
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->phone}}</td>
						<td><a href="/user/{{$user_id"}} class="btn btn-sm btn-success"></td>
					</tr>
					@endforeach
				</tbody>
			</thead>
	</table>
	</div>
</div>
endsection