@extends('admin/layout')
@section('page_title','Dashboard')
@section('category_select','active')
@section('container')
    <h1 class="m-b-10">Manage Category</h1>
    <a href="{{url('admin/category/')}}">
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
                                <h3 class="text-center title-2">Category Form</h3>
                            </div>
                            <hr>

                            <form action="{{route('category.manage_category_process')}}" method="post">
                               @csrf
                                <div class="form-group">
                                    <label for="category_name" class="control-label mb-1">Category</label>
                                    <input id="category_name" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$category_name}}">
                                    @error('category_name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category_slug" class="control-label mb-1">Category_slug</label>
                                    <input id="category_slug" name="category_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$category_slug}}">
                                    @error('category_slug')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
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

