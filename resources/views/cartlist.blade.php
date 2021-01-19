@extends('master')
@section("content")
<div class="custom-product">
    
    <div class="col-sm-10">
        <div  class="trending-wrapper">
            <h4>Result for Product</h4>
            @foreach($productdetails as $item)
                <div class="row searched-item cartlist-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="tranding-img" src="{{$item->gallary}}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div class="">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-warning">Remove From Cart</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection                