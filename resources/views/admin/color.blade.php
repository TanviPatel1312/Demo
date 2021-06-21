@extends('admin/layout')
@section('page_title','Color')
@section('color_select','active')
@section('container')

    {{session('message')}}
    <h1 class="m-b-10">Color</h1>
    <a href="{{url('admin/color/manage_color')}}">
        <button type="button" class="btn btn-info">Add Color</button>
    </a>
    <div class="row m-t-30">

        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Color</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->color}}</td>
                            <td>
                                <a href="{{url('admin/color/manage_color/')}}/{{$list->id}}">
                                    <button type="button" class="btn btn-success ">EDIT</button>
                                </a>

                                @if($list->status==1)
                                    <a href="{{url('admin/color/status/0')}}/{{$list->id}}">
                                        <button type="button" class="btn btn-info ">Active</button>
                                    </a>
                                @elseif($list->status==0)
                                    <a href="{{url('admin/color/status/1')}}/{{$list->id}}">
                                        <button type="button" class="btn btn-warning ">DeActive</button>
                                    </a>
                                @endif

                                <a href="{{url('admin/color/delete/')}}/{{$list->id}}">
                                    <button type="button" class="btn btn-danger ">DELETE</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>

@endsection


