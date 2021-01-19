@extends("master")
@section("content")

<div class="custom-product"> 
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="tranding-wrapper">
            <h4>Result For Product </h4>
                @foreach ($product as $item)
                <a href="detail/{{$item['id']}}">
                    <div class="searched-item">
                        <img class="tranding-img" src="{{$item['gallary']}}">
                        <div class="">
                            <h2>{{$item['name']}}</h2>
                            <h5>{{$item['description']}}</h5>

                        </div>
                    </div>
                </a>
                @endforeach
            </div>
    </div>    
</div>
@endsection