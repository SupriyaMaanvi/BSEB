@extends('base')
@section('content')

<div class="jumbotron rounded-0" style="background-image:url('release-notess.jpg');height:1100px">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h3 class="mb-5 text-danger">Matric BSEB</h3>
            <form action="/" method="get" class="text-white">

                <div class="row">
                    <div class="col-lg-6 form-group">
                       <label for="">Roll Code</label>                
                       <input type="search" name="search_roll_code" class="form-control ml-2" size="20">
                    </div>
                    <div class="col-lg-6 form-group">
                       <label for="">Roll No</label>
                       <input type="search" name="search_roll_no" class="form-control mr-2" size="20">
                    </div>
                </div>
                    <div class="col-lg-2 mx-auto form-group">
                       <input type="submit" class="btn btn-success">
                    </div>
            </form>    
        </div>   
    </div>

    <div class="row">
        <div class="col-lg-6 mt-5 mx-auto">
            <table class="table text-white">
               @foreach ($data as $d)
                <tr>
                  <th colspan="4" class="text-success">Personal Details : </th>
                </tr>
                <tr>
                  <th colspan="1">Name </th>
                  <td colspan="3">{{$d->name}}</td>
                </tr>
                <tr>
                  <th colspan="1">School </th>
                  <td colspan="3">{{$d->school}}</td>
                </tr>
                <tr>
                  <th colspan="1">City</th>
                  <td colspan="3">{{$d->city}}</td>
                </tr>
                <tr>
                  <th colspan="1">Gender</th>
                  <td colspan="3">{{$d->gender}}</td>
                </tr>

                <tr>
                  <th colspan="4" class="text-success">Marks Obtain : </th>
                </tr>

                <tr>
                  <th>Subject</th>
                  <th>Total</th>
                  <th>Pass</th>
                  <th>Obtain</th>
                </tr>

                <tr>
                  <td>Math</td>
                  <td>100</td>
                  <td>30</td>
                  <td>{{$d->math}}</td>
                </tr>
                <tr>
                  <td>Science</td>
                  <td>100</td>
                  <td>30</td>
                  <td>{{$d->science}}</td>
                </tr>
                <tr>
                  <td>SST</td>
                  <td>100</td>
                  <td>30</td>
                  <td>{{$d->sst}}</td>
                </tr>
                <tr>
                  <td>Hindi</td>
                  <td>100</td>
                  <td>30</td>
                  <td>{{$d->hindi}}</td>
                </tr>
                <tr>
                  <td>English</td>
                  <td>100</td>
                  <td>30</td>
                  <td>{{$d->english}}</td>
                </tr>

                <tr>
                  <th colspan="4" class="text-success">Result :</th>
                </tr>

                <tr>
                  <td colspan="3">Total</td>
                  <td>{{$total = $d->math+$d->science+$d->sst+$d->hindi+$d->english}}</td>
                </tr>

                <tr>
                   <td colspan="3">Division</td>
                   <td>
                   </td>
                </tr>
               @endforeach
            </table>
        </div>
    </div>

</div>
@endsection