@extends('user.index')
@section('content')




<div class="col-sm-12 col-12 mt-4 mb-4" style="background-color: #f7f7f7;">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-2 col-md-12 col-sm-12 col-12 d-none d-sm-block p-0">

				<a href="#" class="list-group-item active text-uppercase" style="border: none; border-radius: 0px; background: black;">
					Sub Category
				</a>

				<ul class="list-group">
					@if(isset($subcateName))
					@foreach($subcateName as $subcatenameshow)
					<li class="list-group-item" style=" border-radius: 0px;">
						<a href="{{url('subcategory/'.$subcatenameshow->id)}}">{{$subcatenameshow->subcategory_name}}</a>
					</li>
					@endforeach
					@endif
				</ul>
			</div>






			<input type="hidden" name="item_id"  id="item_id" value="57">
			<div class="col-lg-10 col-md-12 col-sm-12 col-12">

				<div>
					<img src="{{asset('public/frontend')}}/images/new_5.jpg" class="img-fluid"><br>

					<ul class="uk-breadcrumb" style="margin-top: 20px;">
						<li style="color: #666;">
							<a href="{{'/eshop'}}" style="color: #666;" class="text-uppercase">Home</a>
							<span class="text-uppercase"> &nbsp;&nbsp; / &nbsp;&nbsp; {{$cateName->item_name}}</span>
							<span class="text-uppercase"> &nbsp;&nbsp; / &nbsp;&nbsp; {{$cateName->category_name}}</span>
						</li>
					</ul>

				</div>






				<div class="col-sm-12 col-12 p-0">
					<div class="row" id="showproduct-130">

						@if(isset($category))
						@foreach($category as $categoryProductview)

						<div class="col-lg-3 cl-md-4 col-sm-6 col-6 mt-4" >
							<div class="homeproducts border">
								
								@if(isset($categoryProductview->discount_price))
								<span class="mark" style="margin-left: -18px;">{{$categoryProductview->discount_price}} %</span>
								@else
								<span class="mark1" style="margin-left: -18px;"></span>
								@endif
								
								<center>
									<a href="{{url('product/'.$categoryProductview->id)}}"><img src="{{ url($categoryProductview->image) }}" class="img-fluid" style="z-index:1; "></a>
								</center>
								<div>
									<a href=""><center>
										@php
										$content = substr($categoryProductview->product_name,0,20);
										@endphp
										{!! $content !!}<br>
										<span>&nbsp;&nbsp;BDT {{$categoryProductview->sale_price}}</span></center></a>
									</div>
								</div>
							</div>
							@endforeach
							@endif

						</div>


					</div>
					<div class="row">
						<div class="col-sm-12 col-12 mt-5" >
							<nav>
								<ul class="pagination"style="color: black;">
									{{ $category->links() }}
								</ul>
							</nav>
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
</div>
</div>





@endsection