@extends('Home.HomePage')

@section("content")
<div class="col-12">
	
</div>
		<div class="col-12">
			<div class="userList table-responsive">
				<h4 class="user-title">User Data Table</h4>
				<table class="table">
					<thead>
						<tr>
							<th scope="col"><p class="table-title">Name</p></th>
							<th scope="col"><p class="table-title">Country</p></th>
							<th scope="col "><p class="table-title text-right">Date of Birth</p> </th>
						</tr>
					</thead>
					<tbody>
						@if($users)
						@foreach($users as $user)
						<tr>
							<td>{{$user->name}}</td>
							<td>{{$user->getCountry->name}}</td>
							<td>{{$user->birth}}</td>
						</tr>
						@endforeach
						@else
							<tr>
							<td colspan="3">No User List</td>
						</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>
	
@endsection