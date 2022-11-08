@extends('Home.HomePage')
@section('content')
<div class="col-lg-6 col-md-12" id="leftSide"></div>
			<div class="col-lg-6 col-md-12" 
			{{-- id="rightSide" --}}
			>
					
			<form class="register-form" action="{{route('register')}}" method="post">
			
				@csrf
					<h4 class="page-title">Add a User</h4>
					<p class="page-description">Type in your info</p>
					<div class="form-group">
						<input type="text" value="{{old('name')}}" name="name" class="form-control newInput" placeholder="Name"/>
						@error("name")
							<span class="text text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<input type="text" value="{{old('email')}}" name="email" class="form-control newInput" placeholder="Email"/>
						@error("email")
							<span class="text text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<input type="password" name="password" value="{{old('password')}}" class="form-control newInput" placeholder="Password"/>
						@error("password")
							<span class="text text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<select name="country_id"  class="form-select newInput">
							<option >Country</option>
							@foreach($country as $c)
								<option value="{{$c->id}}" {{old("country_id")==$c->id ? "selected" :""}}>{{$c->name}}</option>
							@endforeach
						</select>
						@error("country_id")
							<span class="text text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<input type="date" value="{{old('birth')}}" name="birth" placeholder="Date of Birth"    class="form-control newInput dateTime"/>
						@error("birth")
							<span class="text text-danger">{{$message}}</span>
						@enderror
					</div>
					<button type="submit" class="btn btn-view">Save</button>
				</form>
			</div>
@endsection
