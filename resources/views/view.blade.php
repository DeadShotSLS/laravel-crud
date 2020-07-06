@extends('layouts.view_app')

@section('view_product')
    <div class="container">
        <div class="content">
            <h1>Product</h1>
            <div class="row">
                    <div class='col-md-8' style='max-width: 50%; margin-left: 25%; text-align: center; '>
                        <div class='panel panel-info'>
                            <div class='panel-heading' style='color: red;'><h2>{{ $product->name }}</h2></div>
                            <div class='panel-body'>
                                <img src='{{ asset('public/uploads/'.$product->images->name) }}' style='width:320px; height:500px;'/>
                            </div>
                            <div class='panel-heading'>
                                <h3><b>Rs:{{ $product->price }}</b></h3>
                            </div>
                            <div class='panel-heading'>
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class='panel-heading'>
                                Owner : <b>{{ $product->user->name }}</b>
                            </div>
                            <div class='panel-heading'>
                                Category : <b>{{ $product->category->c_name }}</b>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
