@extends("master")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$details['gallary']}}" >
            </div>
            <div class="col-sm-6">
                    <a href="\">Go Back</a>
                <h3>{{$details['name']}}</h3>
                <h3>Price : {{$details['price']}}</h3>
                <h4>Detail : {{$details['description']}}</h3>
                <h4>Category : {{$details['category']}}</h4>
                <br><br>
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="productid" value="{{$details['id']}}">
                    <button class="btn btn-primary"> Add TO Cart</button>
                </form>
                <br><br>
                <button class="btn btn-success"> Buy Now </button>
            </div>
        </div>
    </div>

@endsection