@extends('Member.Layouts.app_add_category')

@section('category_add_content')
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card card-outline-primary">
                <div class="card-header">
                    <h1 class="card-title">Add Category to Store</h1>
                </div>
                <div class="card-body">
                    @foreach ($errors->all() as $message)
                        <div class="alert alert-danger">{{ $message }}</div>
                    @endforeach
                    <form action="/CategoryAdd" method='POST' enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-body">
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Category Name</label>
                                        <input type="text" name="c_name" class="form-control" placeholder="Enter Category Name">
                                        </div>
                                </div>
                            </div>
                            <!--/row-->

                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" name="submit" class="btn btn-success" value="save">
                            <a href="{{ url('/member/home') }}" class="btn btn-inverse">Cancel</a>
                        </div>
                    </form>
                </div>
                <br>
                <br>
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h1 class="card-title">All Category</h1>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <table class="table table-light">
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Action</th>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->c_name }}</td>
                                        <td>
                                            <a href="/CategoryDelete/{{ $category->id }}" class="btn btn-danger">Delete</a>&nbsp;
                                            <a href="/CategoryUpdate/{{ $category->id }}" class="btn btn-success">Update</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
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
