@extends('base')
@section('content')
<div class="jumbotron rounded-0" style="background-image:url('release-notess.jpg');height:800px">
    <div class="row">
        <div class="col-lg-6 mx-auto">

        <h4 class="mb-3 text-danger">Personal Details :</h4>
            <form action="{{route('insertData')}}" method="POST" class="text-white">
             @csrf
                <div class="form-group">
                    <label for="" class="text-white">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="row">
                <div class="form-group col">
                    <label for="">Roll Code</label>
                    <input type="text" name="roll_code" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="">Roll No</label>
                    <input type="text" name="roll_no" class="form-control">
                </div>
                </div>

                <div class="form-group">
                    <label for="">School</label>
                    <input type="text" name="school" class="form-control">
                </div>

                <div class="row">
                <div class="form-group col">
                    <label for="">City</label>
                    <input type="text" name="city" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="">Gender</label>
                    <input type="text" name="gender" class="form-control">
                </div>
                </div>
                
                <h4 class="mb-3 text-danger">Marks :</h4>
                <div class="row">
                <div class="form-group col-lg-4">
                    <label for="">Math</label>
                    <input type="text" name="math" class="form-control">
                </div>
                <div class="form-group col-lg-4">
                    <label for="">Science</label>
                    <input type="text" name="science" class="form-control">
                </div>
                <div class="form-group col-lg-4">
                    <label for="">SST</label>
                    <input type="text" name="sst" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label for="">Hindi</label>
                    <input type="text" name="hindi" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label for="">English</label>
                    <input type="text" name="english" class="form-control">
                </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-danger btn-block">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection