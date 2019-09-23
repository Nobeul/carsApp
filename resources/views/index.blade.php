@extends('layout.app')

@section('body')
	<div class="container" style="margin-top: 50px">
		<div class="frm">

			<form action="{{ url('/') }}" method="post"  style="width: 70%; padding-left: 15%">
				{{ csrf_field() }}
				  <div class="form-group">
				    <label for="name" style="font-size: 30px; font-weight: bold">Car Name:</label>
				    <input type="name" class="form-control" name="name" placeholder="Enter your car's name here...">
				  </div>
				  <div class="form-group">
				    <label for="model" style="font-size: 30px; font-weight: bold">Car Model:</label>
				    <input type="model" class="form-control" name="model" placeholder="Enter car's model here...">
				  </div>
				  <div class="form-group">
				    <label for="specifications" style="font-size: 30px; font-weight: bold">Specifications:</label>
				    <textarea class="form-control" name="specifications" rows="3" placeholder="Enter specifications here..."></textarea>
				  </div>
				  <div class="form-group">
				    <label for="published_on" style="font-size: 30px; font-weight: bold">Published on:</label>
				    <input type="date" class="form-control" name="published_on" >
				  </div>
				  <div clas="row form-group">
	                      <div class="col-md-12">
	                      	<button type="submit" class="btn btn-success w-50 float-right">submit
	                      	</button>
	                      	
	                      </div>	
	              </div>
			</form>
		</div>
		<div class="spc" style="margin-top: 100px">
			-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
		</div>
	
		<div class="tab" style="margin-top: 20px">
			<table class="table table-info">
			  <thead>
			    <tr>
			      <th scope="col">Sl</th>
			      <th scope="col">Name</th>
			      <th scope="col">Model</th>
			      <th scope="col">Specifications</th>
			      <th scope="col">Published on</th>
			    </tr>
			  </thead>
			  <tbody>

			    @foreach ($cars as $car)
				<tr>
				<td>{{ $car->id }}</td>
				<td>{{ $car->name }}</td>
				<td>{{ $car->model }}</td>
				<td>{{ $car->specifications }}</td>
				<td>{{ $car->Publication_Date }}</td>
				</tr>
				@endforeach


			  </tbody>
			</table>
			
		</div>

	</div>
	

@endsection