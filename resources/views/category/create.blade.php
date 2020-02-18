@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Create Category</h5>

                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="exampleEmail" class="">Name</label>
                            <input name="name" placeholder="Name" type="text" class="form-control">
                        </div>
                        <button class="mt-1 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
