@extends('master')

@section('title')
    Edit Student Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card-header">Edit Student Form</div>
                    <div class="card-body">
                        <h4 class="text-success text-center ">{{Session::get('message')}}</h4>
                        <form action="{{route('update-student', ['id' => $student->id])}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$student->name}}" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" value="{{$student->email}}" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" value="{{$student->mobile}}" class="form-control" name="mobile">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Update Student Info"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
