@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Create Brand</h5>

                    <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="exampleEmail" class="">Name</label>
                            <input name="name" placeholder="Name" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label for="exampleEmail" class="">Logo</label>
                            <input name="image" placeholder="Name" type="file" class="form-control-file">
                        </div>
                        <button class="mt-1 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
