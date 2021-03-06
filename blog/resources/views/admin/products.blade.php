@extends('layouts.master')
@section('title','Admin | Products')
@section('name','Products')
@section('content')
<div class="col-12 mt-5">
	<div class="card">
		<div class="card-body">
			<h4 class="header-title">
			<a class="btn  font-weight-bold text-light" href="/addproducts" style="background-color: #881DFD;"><i class="fas fa-plus-square"></i>  Add Product</a></h4>
		</div>
	</div>
</div>
<div class="col-12 mt-5">
	<div class="card">
		<div class="card-body">
			<h4 class="header-title"></h4>
			<div class="data-tables datatable-primary">
				<table id="dataTable2" class="text-center">
					<thead class="text-capitalize">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Price</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $prod)
						<tr>
							<td>{{$prod->id}}</td>
							<td class="font-weight-bold">{{$prod->name}}</td>
							<td class="font-weight-bold">{{$prod->price}}</td>
							<td>
								@if($prod->status == '1')
								<span class="badge badge-pill badge-success">Available</span>
								@elseif($prod->status == '0')
								<span class="badge badge-pill badge-primary">Not Available</span>
								@endif
							</td>
							
							<td>
								<ul class="d-flex justify-content-center">
									<li class="mr-3"><a href="/viewproduct/{{$prod->id}}" class="text-info"><i class="fa fa-eye"></i></a></li>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal-xl" data-name="{{$prod->name}}">Extra Large modal</button>
									<li class="mr-3"><a href="#" class="text-success" data-toggle="modal" data-target="#useredit"><i class="fa fa-edit"></i></a></li>
									<li><a href="#" class="text-danger "data-toggle="modal" data-target="#modal">
									<i class="fas fa-trash"></i></a></li>
								</ul>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Extra Large modal start -->
<!-- Large modal -->

<div class="modal fade bd-example-modal-lg modal-xl">
	<div class="modal-dialog modal-lg modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="card card-solid">
						<div class="card-body">
							<div class="row">
								<div class="col-12 col-sm-6">
									<h3 class="d-inline-block d-sm-none text" ></h3>
									<div class="col-12">
										<img src="../../dist/img/prod-1.jpg" class="product-image" alt="Product Image">
									</div>
									<div class="col-12 product-image-thumbs">
										<div class="product-image-thumb active"><img src="../../dist/img/prod-1.jpg" alt="Product Image"></div>
										<div class="product-image-thumb" ><img src="../../dist/img/prod-2.jpg" alt="Product Image"></div>
										<div class="product-image-thumb" ><img src="../../dist/img/prod-3.jpg" alt="Product Image"></div>
										<div class="product-image-thumb" ><img src="../../dist/img/prod-4.jpg" alt="Product Image"></div>
										<div class="product-image-thumb" ><img src="../../dist/img/prod-5.jpg" alt="Product Image"></div>
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<h3 class="my-3 name" id="name"></h3>
									<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
									<hr>
									<h4>Available Colors</h4>
									<div class="btn-group btn-group-toggle" data-toggle="buttons">
										<label class="btn btn-default text-center active">
											<input type="radio" name="color_option" id="color_option1" autocomplete="off" checked="">
											Green
											<br>
											<i class="fas fa-circle fa-2x text-green"></i>
										</label>
										<label class="btn btn-default text-center">
											<input type="radio" name="color_option" id="color_option2" autocomplete="off">
											Blue
											<br>
											<i class="fas fa-circle fa-2x text-blue"></i>
										</label>
										<label class="btn btn-default text-center">
											<input type="radio" name="color_option" id="color_option3" autocomplete="off">
											Purple
											<br>
											<i class="fas fa-circle fa-2x text-purple"></i>
										</label>
										<label class="btn btn-default text-center">
											<input type="radio" name="color_option" id="color_option4" autocomplete="off">
											Red
											<br>
											<i class="fas fa-circle fa-2x text-red"></i>
										</label>
										<label class="btn btn-default text-center">
											<input type="radio" name="color_option" id="color_option5" autocomplete="off">
											Orange
											<br>
											<i class="fas fa-circle fa-2x text-orange"></i>
										</label>
									</div>
									<h4 class="mt-3">Size <small>Please select one</small></h4>
									<div class="btn-group btn-group-toggle" data-toggle="buttons">
										<label class="btn btn-default text-center">
											<input type="radio" name="color_option" id="color_option1" autocomplete="off">
											<span class="text-xl">S</span>
											<br>
											Small
										</label>
										<label class="btn btn-default text-center">
											<input type="radio" name="color_option" id="color_option1" autocomplete="off">
											<span class="text-xl">M</span>
											<br>
											Medium
										</label>
										<label class="btn btn-default text-center">
											<input type="radio" name="color_option" id="color_option1" autocomplete="off">
											<span class="text-xl">L</span>
											<br>
											Large
										</label>
										<label class="btn btn-default text-center">
											<input type="radio" name="color_option" id="color_option1" autocomplete="off">
											<span class="text-xl">XL</span>
											<br>
											Xtra-Large
										</label>
									</div>
									<div class="bg-gray py-2 px-3 mt-4">
										<h2 class="mb-0">
										$80.00
										</h2>
										<h4 class="mt-0">
										<small>Ex Tax: $80.00 </small>
										</h4>
									</div>
									<div class="mt-4">
										<div class="btn btn-primary btn-lg btn-flat">
											<i class="fas fa-cart-plus fa-lg mr-2"></i>
											Add to Cart
										</div>
										<div class="btn btn-default btn-lg btn-flat">
											<i class="fas fa-heart fa-lg mr-2"></i>
											Add to Wishlist
										</div>
									</div>
									<div class="mt-4 product-share">
										<a href="#" class="text-gray">
											<i class="fab fa-facebook-square fa-2x"></i>
										</a>
										<a href="#" class="text-gray">
											<i class="fab fa-twitter-square fa-2x"></i>
										</a>
										<a href="#" class="text-gray">
											<i class="fas fa-envelope-square fa-2x"></i>
										</a>
										<a href="#" class="text-gray">
											<i class="fas fa-rss-square fa-2x"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="row mt-4">
								<nav class="w-100">
									<div class="nav nav-tabs" id="product-tab" role="tablist">
										<a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
										<a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
										<a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
									</div>
								</nav>
								<div class="tab-content p-3" id="nav-tabContent">
									<div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
									<div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
									<div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
								</div>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</section>
				<!-- /.content -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Extra Large modal modal end -->
@endsection
@section('js')
<script>
$(function () {
$("#dataTable2").DataTable({
"responsive": true,
"autoWidth": false,
});
});

$('.modal-xl').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var name = button.data('name') 
  var modal = $(this)
  modal.find('.modal-body .name').text(name)

})
</script>
@endsection