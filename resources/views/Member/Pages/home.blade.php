@extends('Member.Layouts.app')

@section('member_home_content')
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card card-outline-primary">
                <div class="card-header">
                    <h1 class="card-title">All Products</h1>
                </div>
                <div class="card-body">
                    <table class="table table-light">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td><img src='{{ asset($product->image) }}' style='width:80px; height:125px;'/></td>
                                <td>
                                    <a href="/ProductDelete/{{$product->id}}" class="btn btn-danger">Delete</a>&nbsp;
                                    <a href="/ProductUpdate/{{$product->id}}" class="btn btn-success">Update</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

  </div>
@endsection

@section('logout_model')
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            {{-- <a class="btn btn-primary" href="{{ route('logout') }}")>Logout</a> --}}
            <a class="btn btn-primary" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
        </div>
        </div>
    </div>
@endsection
