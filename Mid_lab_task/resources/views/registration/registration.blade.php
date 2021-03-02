@extends('layout.main')


@section('page-info')

        <form method="POST">
            @csrf
            Full Name: <input type="text" id="fullname" name="full_name"><br><br>
            Username: <input type="text" id="username" name="username"><br><br>
            Email: <input type="text" id="email" name="email"><br><br>
            Password: <input type="password" id="password" name="password"><br><br>
            Confirm Password: <input type="password" id="confirmpassword" name="confirmpassword"><br><br>
            Country: <input type="text" id="address" name="country"><br><br>
            Company Name: <input type="text" id="companyname" name="company_name"><br><br>
            Phone Number: <input type="text" id="phonenumber" name="phone"><br><br>
            City: <input type="text" id="city" name="city"><br><br>
            <input type="submit" name="submit" value="Register"> <a href="/login">Login</a> | <a href="/">Back</a>

        </form>

    @foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

@endsection

