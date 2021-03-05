@extends('layout.main')

@section('title')
    Social Media
@endsection

@section('page-info')
    <center><h1>Add Product</h1></center>

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				<tr>
					<td>Product Name</td>
					<td><input type="text" name="product_name" value="{{old('product_name')}}"></td>
				</tr>
				<tr>
					<td>Category</td>
					<td>
						<select name='category'>
							<option value="Laptop"> Laptop </option>
							<option value="Game"> Game </option>
                            <option value="PC"> PC </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Unit Price</td>
					<td><input type="text" name="unit_price" value="{{old('unit_price')}}"></td>
				</tr>
				<tr>
					<td>Status</td>
					<td>
						<select name='status'>
							<option value="existing"> EXISTING </option>
							<option value="upcoming"> UPCOMING </option>
						</select>
					</td>
				</tr>	
                <td><input type="submit" name="submit" value="Add Product"></td>
			</table>
		</fieldset>
	</form>

    <br><br>
        @foreach($errors->all() as $err)
            {{$err}} <br>
        @endforeach
    {{session('msg')}}
    <br><br>
@endsection