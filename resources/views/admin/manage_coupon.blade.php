@extends('admin/layout')
@section('page_title','manage_coupon')
@section('coupon_select','active')
@section('container')
    <h1 class="m-b-10">Manage Coupon</h1>
    <a href="{{url('admin/coupon/')}}">
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
                                <h3 class="text-center title-2">Coupon Form</h3>
                            </div>
                            <hr>

                            <form action="{{route('coupon.manage_coupon_process')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="control-label mb-1">Title</label>
                                    <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$title}}">
                                    @error('title')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="code" class="control-label mb-1">Code</label>
                                    <input id="code" name="code" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$code}}">
                                    @error('code')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="value" class="control-label mb-1">Value</label>
                                    <input id="value" name="value" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$value}}">
                                    @error('value')
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

