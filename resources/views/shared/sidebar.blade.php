<h2>Category</h2>
<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    <div class="panel panel-default">
        @foreach ($categories as $category)
        <div class="panel-heading">
            <h4 class="panel-title"><a href='{{url("products/categories/$category->name")}}'>{{$category->name}}</a></h4>
        </div>
        @endforeach
    </div>
</div><!--/category-products-->

<div class="brands_products"><!--brands_products-->
    <h2>Brands</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
@foreach ($brands as $brand)
    <li><a href='{{url("products/brands/$brand->name")}}'> <span class="pull-right">(50)</span>{{$brand->name}}</a></li>
@endforeach
        </ul>
    </div>
</div><!--/brands_products-->

<div class="shipping text-center"><!--shipping-->
    <img src="{{asset('images/home/shipping.jpg')}}" alt="" />
</div><!--/shipping-->