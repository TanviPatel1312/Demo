@extends('admin/layout')
@section('page_title','Manage Size')
@section('size_select','active')
@section('container')
    <h1 class="m-b-10">Manage Size</h1>
    <a href="{{url('admin/size/')}}">
        <button type="button" class="btn btn-info ">Back</button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
        {{session('message')}}
        <!-- DATA TABLE-->
            <div class="row" >
                <div class="col-lg-8">
                    <div class="card">

                        <div class="card-body" >
                            <div class="card-title">
                                <h3 class="text-center title-2">Size Form</h3>
                            </div>
                            <hr>

                            <form action="{{route('size.manage_size_process')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="size" class="control-label mb-1">Size</label>
                                    <input id="size" name="size" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$size}}">
                                    @error('size')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>

                                <div>
                                    <button id="submit" type="submit" name="submit"class="btn btn-lg btn-info btn-block">
                                        <span id="payment-button-amount">Submit</span>

                                    </button>
                                </div>
                                <input type="hidden" name="id" value="{{$id}}">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
@endsection

