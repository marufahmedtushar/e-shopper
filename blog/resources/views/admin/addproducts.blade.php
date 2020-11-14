@extends('layouts.master')
@section('title','Admin | Add Products')
@section('name','Add Products')
@section('content')
<!-- Textual inputs start -->
<div class="row">
	<div class="col-md-8 ">
		<div class="card">
			<div class="card-body">
				<form>
					
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<h5 class="modal-title">Software</h5>
								<label>Os:</label>
								<input type="text" class="form-control" name="os">
							</div>
						</div>
					</div>
					<div>
						<h5>Design</h5>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									
									<label>weight:</label>
									<input type="text" class="form-control" name="weight">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>color:</label>
									<input type="text" class="form-control" name="color">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>screen:</label>
									<input type="text" class="form-control" name="screen">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>build:</label>
									<input type="text" class="form-control" name="build">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>resolution:</label>
									<input type="text" class="form-control" name="resolution">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>dimension:</label>
									<input type="text" class="form-control" name="dimension">
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		<div class="col-md-4 ">
			<div class="card">
				<div class="card-body">
					<div>
						<h5>Category</h5>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label></label>
									<select class="custom-select" name="user_type"class="form-control" id="user_type">
										@foreach($categories as $cat)
										<option value="{{$cat->id}}">{{$cat->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</div>
					<div>
						<h5 class="modal-title">Status</h5>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									
									<label></label>
									<select class="custom-select" name="user_type"class="form-control" id="user_type">
										<option value="1">Available</option>
										<option value="0">Not Available</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h5>Price</h5>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label></label>
											<input type="text" class="form-control" name="expandable">
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-body">
					<div>
						<h5>Memory</h5>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									
									<label>expandable:</label>
									<input type="text" class="form-control" name="expandable">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>RAM:</label>
									<input type="text" class="form-control" name="RAM">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>ROM:</label>
									<input type="text" class="form-control" name="ROM">
								</div>
							</div>
							
							
						</div>
					</div>
					<div>
						<h5 class="modal-title">Processor</h5>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									
									<label>number of cores:</label>
									<input type="text" class="form-control" name="number of cores">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>SoC:</label>
									<input type="text" class="form-control" name="SoC">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>CPU:</label>
									<input type="text" class="form-control" name="CPU">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>GPU:</label>
									<input type="text" class="form-control" name="GPU">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 ">
			<div class="card">
				<div class="card-body">
					<div>
						<h5>Photo</h5>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label></label>
									<div class="input-group mb-3">
										
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="inputGroupFile01">
											<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
										</div>
									</div><div class="input-group mb-3">
									
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="inputGroupFile01">
										<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
									</div>
								</div><div class="input-group mb-3">
								
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
							</div><div class="input-group mb-3">
							
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile01">
								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
							</div>
						</div><div class="input-group mb-3">
						
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="inputGroupFile01">
							<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<div class="row mt-4">
<div class="col-md-12 ">
<div class="card">
<div class="card-body">
	<div>
		<h5 class="modal-title">Camera</h5>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					
					<label>featurues:</label>
					<input type="text" class="form-control" name="featurues">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>video:</label>
					<input type="text" class="form-control" name="video">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>primary:</label>
					<input type="text" class="form-control" name="primary"  id="cat_id">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>secondary:</label>
					<input type="text" class="form-control" name="secondary"  id="name">
				</div>
			</div>
			
			
		</div>
	</div>
	
	<div>
		<h5 class="modal-title">Battery</h5>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					
					<label>Battery:</label>
					<input type="text" class="form-control" name="battery"  id="name">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>charging:</label>
					<input type="text" class="form-control" name="charging">
				</div>
			</div>
		</div>
		
		
	</div>
	<div>
		<h5 class="modal-title">Connectivity</h5>
		<div class="row">
			
			<div class="col-md-4">
				<div class="form-group">
					<label>Wi-Fi:</label>
					<input type="text" class="form-control" name="Wi-Fi"  id="name">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>internet:</label>
					<input type="text" class="form-control" name="internet"  id="name">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>USB:</label>
					<input type="text" class="form-control" name="USB">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label>bluetooth:</label>
					<input type="text" class="form-control" name="bluetooth"  id="name">
				</div>
			</div>
			
			
		</div>
	</div>
</div>
</div>
</div>
</div>
<div class="row mt-4">
<div class="col-md-12 ">
<div class="card">
<div class="card-body">
	<div>
		<h5 class="modal-title">Audio</h5>
		<div class="row">
			
			<div class="col-md-12">
				<div class="form-group">
					<label>radio:</label>
					<input type="text" class="form-control" name="radio"  id="name">
				</div>
			</div>
			
			
		</div>
	</div>
	<div>
		<h5 class="modal-title">Others</h5>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>sensors:</label>
					<input type="text" class="form-control" name="sensors">
				</div>
			</div>
		</div>
	</div>
	<div>
		<h5 class="modal-title">Manufacturer</h5>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>first arrival:</label>
					<input class="form-control" type="month" value="2018-05" id="example-month-input">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Manufactured By:</label>
					<input type="text" class="form-control" name="Manufactured By"  id="name">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label>SIM:</label>
					<input type="text" class="form-control" name="SIM"  id="name">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
				</div>
			</div>
			
			
		</div>
	</div>
	
	
	
	
	
	
</div>
</form>
</div>
</div>
</div>
<!-- Textual inputs end -->
@endsection