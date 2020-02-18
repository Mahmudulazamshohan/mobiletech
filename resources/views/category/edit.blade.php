@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Edit Category</h5>

                    <form action="{{route('category.update',$category->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="position-relative form-group">
                            <label for="exampleEmail" class="">Name</label>
                            <input name="name" placeholder="Name" type="text" class="form-control" value="{{$category->name}}">
                        </div>
                        <button class="mt-1 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
