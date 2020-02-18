@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">
                        Brand
                    </h5>
                    <table class="mb-0 table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($models as $model)
                            <tr>
                                <th scope="row">{{$model->id}}</th>
                                <td>{{$model->name}}</td>
                                <td class="d-flex">
                                    <a href="{{route('model.edit',$model->id)}}" class="btn btn-info btn-sm mx-2">
                                        Edit
                                    </a>
                                    <form action="{{route('model.destroy',$model->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
