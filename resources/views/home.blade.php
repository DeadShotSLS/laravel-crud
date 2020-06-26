@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <h1>My Products</h1>
            <div class="row">
                @foreach ($products as $product)
                    <div class='col-md-4' style='box-shadow: 0 4px 4px 0 gray; max-width: 30%; margin: 5px 1% 10px 1%; text-align: center; padding: 0 0 5px 0;'>
                        <div class='panel panel-info'>
                            <div class='panel-heading' style='color: red;'><h3>{{ $product->name }}</h3></div>
                            <div class='panel-body'>
                                <img src='{{ $product->image }}' style='width:160px; height:250px;'/>
                            </div>
                            <div class='panel-heading'>
                               <b>{{ $product->price }}</b>
                            </div>
                            <div>
                                <a href='#' id='product_view' class='btn btn-info btn-xs'>ViewItem</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
