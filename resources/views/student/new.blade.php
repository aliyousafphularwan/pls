@extends('partials.master')
@section('title', 'New Admission')

@section('content')
    
    <div class="container-fluid">
        <form action="" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <table class="table table-bordered">
                        <tr>
                            <td>Registration #:</td>
                            <td> <input type="text" name="regno" class="form-control" id="regno" value="<?='pls-'.date('y').rand(111, 999)?>" readonly> </td>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td> <input type="text" name="regno" class="form-control" id="regno" value="<?=date('d-m-Y')?>" readonly> </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 mr-auto">
                            <img src="#" class="img-fluid" height="100" width="100" alt="" srcset="">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center"> <strong>The Sample School</strong> </h2>
                            <h4 class="text-center"> Somewhere, Planet Earth </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
    </div>

@endsection