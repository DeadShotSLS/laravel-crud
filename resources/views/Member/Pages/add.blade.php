@extends('Member.Layouts.app_add')

@section('member_add_content')
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card card-outline-primary">
                <div class="card-header">
                    <h1 class="card-title">Add Product to Store</h1>
                </div>
                <div class="card-body">
                    <form action="/productadd" method='POST' enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-body">
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Name</label>
                                        <input type="text" name="p_name" class="form-control" placeholder="Enter Product Name">
                                        </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Discription</label>
                                        <input type="text" name="p_desc" class="form-control form-control-danger" placeholder="Enter Description">
                                        </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">price </label>
                                        <input type="number" name="price" class="form-control" placeholder="Rs">
                                        </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image" id='post_image' accept=".jpg, .jpeg, .png" class="form-control form-control-danger" placeholder="12n">
                                        </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" name="submit" class="btn btn-success" value="save">
                            <a href="{{ url('/home') }}" class="btn btn-inverse">Cancel</a>
                        </div>
                    </form>
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
