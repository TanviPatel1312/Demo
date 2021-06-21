@extends('admin/layout')
@section('page_title','Manage Product')
@section('product_select','active')
@section('container')

    @if($id>0)
        {{$image_required=""}}
    @else
        {{$image_required="required"}}
    @endif


    @if(session()->has('sku_error'))
        <div class="alert alert-danger" role="alert">
        {{session('sku_error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="CLose">
            <span aria-hidden="true"></span>
        </button>
    </div>
    @endif

    @error('attr_image.*')
    <div class="alert alert-danger" role="alert">
        {{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="CLose">
            <span aria-hidden="true"></span>
        </button>
    </div>
    @enderror
    @error('images.*')
    <div class="alert alert-danger" role="alert">
        {{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="CLose">
            <span aria-hidden="true"></span>
        </button>
    </div>
    @enderror
    <div>
        <a href="{{url('admin/product/')}}">
            <button type="button" class="btn btn-info">Back</button>
        </a>
    </div>
    <h1 class="m-b-10">Manage Product</h1>
    <div class="row m-t-30">
        <div class="col-md-12">
        {{session('message')}}
            <form action="{{route('product.manage_product_process')}}" method="post" enctype="multipart/form-data">
        <!-- DATA TABLE-->
            <div class="row" >
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body" >
                            <div class="card-title">
                                <b><h2 class="text-center title-2">Product Form</h2></b>
                            </div>
                            <hr>


                                @csrf
                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">name</label>
                                    <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$name}}">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image" class="control-label mb-1">Image</label>
                                    <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}">
                                    @error('image')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category_id" class="control-label mb-1">Category</label>
                                    <select id="category_id" name="category_id" type="text" class="form-control">
                                   <option value="">Select Categories</option>
                                        @foreach($category as $list)
                                            @if($category_id==$list->id)
                                                <option selected value="{{$list->id}}">
                                            @else
                                                <option  value="{{$list->id}}">
                                                    @endif
                                                {{$list->category_name}}
                                                </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="slug" class="control-label mb-1">Slug</label>
                                    <input id="slug" name="slug" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$slug}}">
                                    @error('slug')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="brand" class="control-label mb-1">Brand</label>
                                    <input id="brand" name="brand" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$brand}}">
                                    @error('brand')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="model" class="control-label mb-1">Model</label>
                                    <input id="model" name="model" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$model}}">
                                    @error('model')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="short_desc" class="control-label mb-1">Short_desc</label>
                                    <input id="short_desc" name="short_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$short_desc}}">
                                    @error('short_desc')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="desc" class="control-label mb-1">Desc</label>
                                    <input id="desc" name="desc" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$desc}}">
                                    @error('desc')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="keywords" class="control-label mb-1">Keywords</label>
                                    <input id="keywords" name="keywords" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$keywords}}">
                                    @error('keywords')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="technical_specification" class="control-label mb-1">Technical_specification</label>
                                    <input id="technical_specification" name="technical_specification" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$technical_specification}}">
                                    @error('technical_specification')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="uses" class="control-label mb-1">Uses</label>
                                    <input id="uses" name="uses" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$uses}}">
                                    @error('uses')`
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="warranty" class="control-label mb-1">Warranty</label>
                                    <input id="warranty" name="warranty" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$warranty}}">
                                    @error('warranty')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <input type="hidden" name="id" value="{{$id}}">

                        </div>
                    </div>
                </div>
                <!-- END DATA TABLE-->
            </div>

                <h2>Product Images</h2>


                        <div class="card">
                            <div class="card-body" >
                                <div class="form-group">
                                    <div class="row" id="product_images_box">
                                        @php
                                            $loop_count_num=1;

                                        @endphp
                                        @foreach($productImagesArr as $key=>$val)
                                            <?php
                                            $loop_count_prev=$loop_count_num;
                                            $pIArr=(array)$val;
                                            ?>
                                            <input id="piid" name="piid[]" type="hidden" value="{{$pIArr['id']}}">
                                        <div class="col-md-3 product_images_{{$loop_count_num++}}">
                                            <label for="images" class="control-label mb-1">Image</label>
                                            <input id="images" name="images[]" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                           @if($pIArr['images']!='')
                                               <img src="{{asset('storage/media/'.$pIArr['images'])}}"/>
                                            @endif

                                        </div>

                                        <div>
                                            <label for="btn" class="control-label mb-1">&nbsp;</label><br>
                                            @if($loop_count_num==2)
                                                <button id="payment-button" type="submit" class="btn btn-success" onclick="add_image_more()">
                                                    <i class="fas fa-plus">Add</i>
                                                </button>
                                            @else
                                                <a href="{{url('admin/product_images_delete/')}}/{{$pIArr['id']}}/{{$id}}">
                                                    <button type="button" class="btn btn-danger ">
                                                        <i class="fas fa-minus">Remove</i>
                                                    </button>
                                                </a>

                                            @endif
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                                    </div>

                                </div>






                            <h2>Product Attribute</h2>
                <div id="product_attr_box">
                    @php
                    $loop_count_num=1;

                    @endphp
                    @foreach($productAttrArr as $key=>$val)
                        <?php
                        $loop_count_prev=$loop_count_num;
                        $pAArr=(array)$val;
                        ?>
                            <input id="paid" name="paid[]" type="hidden" value="{{$pAArr['id']}}">
                            <div class="card" id="product_attr_{{$loop_count_num++}}">
                                <div class="card-body" >

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <label for="sku" class="control-label mb-1">SKU</label>
                                                <input id="sku" name="sku[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$pAArr['sku']}}" required>
                                                @error('sku')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>

                                        <div class="col-md-1">
                                        <label for="mrp" class="control-label mb-1">MRP</label>
                                        <input id="mrp" name="mrp[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$pAArr['mrp']}}" required>
                                        @error('mrp')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                            <div class="col-md-1">
                                        <label for="price" class="control-label mb-1">Price</label>
                                        <input id="price" name="price[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$pAArr['price']}}" required>
                                        @error('price')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                            <div class="col-md-1">
                                                <label for="qty" class="control-label mb-1">QTY</label>
                                                <input id="qty" name="qty[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$pAArr['qty']}}" required>
                                                @error('qty')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-2">
                                                <label for="size_id" class="control-label mb-1">Size</label>
                                                <select id="size_id" name="size_id[]" type="text" class="form-control">
                                                    <option value="">Select</option>
                                                    @foreach($sizes as $list)
                                                        @if($pAArr['size_id']==$list->id)
                                                            <option  value="{{$list->id}}" selected>{{$list->size}}</option>
                                                        @else
                                                            <option  value="{{$list->id}}">
                                                                {{$list->size}}</option>

                                                        @endif
                                                            @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="color_id" class="control-label mb-1">Color</label>
                                                <select id="color_id" name="color_id[]" type="text" class="form-control">
                                                    <option value="">Select</option>
                                                    @foreach($colors as $list)
                                                        @if($pAArr['color_id']==$list->id)
                                                            <option  value="{{$list->id}}" selected>{{$list->color}}</option>
                                                            @else
                                                            <option  value="{{$list->id}}">
                                                                {{$list->color}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="attr_image" class="control-label mb-1">Image</label>
                                                <input id="attr_image" name="attr_image[]" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}">
                                                @error('attr_image')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div>
                                                <label for="btn" class="control-label mb-1">&nbsp;&nbsp;&nbsp;</label><br>
                                               @if($loop_count_num==2)
                                                <button id="payment-button" type="submit" class="btn btn-success" onclick="add_more()">
                                                    <i class="fas fa-plus">Add</i>
                                                </button>
                                                @else
                                                    <a href="{{url('admin/product_attr_delete/')}}/{{$pAArr['id']}}/{{$id}}">
                                                        <button type="button" class="btn btn-danger ">
                                                        <i class="fas fa-minus">Remove</i>
                                                        </button>
                                                    </a>

                                                @endif
                                            </div>
                                    </div>

                                </div>
                                </div>
                            </div>
                    @endforeach
                </div>



                <div>
                    <button id="payment-button" type="submit" class="btn btn-info btn-block">
                        <span id="payment-button-amount">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        var loop_count=1;
        function add_more(){
            loop_count++;
            var html=' <input id="paid" name="paid[]" type="text"><div class="card"><div id="product_attr_'+loop_count+'" class="card-body"><div class="form-group"><div class="row">';

            html+='<div class="col-md-1"><label for="sku" class="control-label mb-1">SKU</label><input id="sku" name="sku[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
            html+='<div class="col-md-1"><label for="mrp" class="control-label mb-1">MRP</label><input id="mrp" name="mrp[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
            html+='<div class="col-md-1"><label for="price" class="control-label mb-1">Price</label><input id="price" name="price[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
            html+='<div class="col-md-1"><label for="qty" class="control-label mb-1">Qty</label><input id="qty" name="qty[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';

            var size_id_html=jQuery('#size_id').html();
            size_id_html=size_id_html.replace("selected","");
            html+='<div class="col-md-2"><label for="size_id" class="control-label mb-1">Size</label><select id="size_id" name="size_id[]" type="text" class="form-control" required="">'+size_id_html+'</select></div>';


            var color_id_html=jQuery('#color_id').html();
            color_id_html=color_id_html.replace("selected","");
            html+='<div class="col-md-2"><label for="color_id" class="control-label mb-1">Color</label><select id="color_id" name="color_id[]" type="text" class="form-control" required="">'+color_id_html+'</select></div>';
            html+='<div class="col-md-3"><label for="attr_image" class="control-label mb-1">Image</label><input id="attr_image" name="attr_image[]  " type="file" class="form-control" aria-required="true" aria-invalid="false" required></div>';
            var html+='<div class="col-md-1"><label for="btn" class="control-label mb-1">&nbsp;&nbsp;&nbsp;</label><br> <button id="payment-button" type="button" class="btn btn-danger" onclick=remove_more("'+loop_count+'")> <i class="fas fa-minus">Remove</i></button></div>';
            html+='</div></div></div></div>';
            jQuery('#product_attr_box').append(html)

            }
            function remove_more(loop_count){
                jQuery('#product_attr_'+loop_count).remove();
        }
        var loop_image_count=1;
        function add_image_more(){
            loop_image_count++;
          var html=' <input id="piid" name="piid[]" type="hidden" value=""><div class="col-md-3 product_images_'+loop_image_count+'"><label for="images" class="control-label mb-1">Image</label><input id="images" name="images[]" type="file" class="form-control" aria-required="true" aria-invalid="false" required></div>';
            html+='<div class="col-md-1 product_images_'+loop_image_count+'"><label for="btn" class="control-label mb-1">&nbsp;&nbsp;&nbsp;</label><br> <button id="payment-button" type="button" class="btn btn-danger" onclick=remove_image_more("'+loop_image_count+'")> <i class="fas fa-minus">Remove</i></button></div>';
            jQuery('#product_images_box').append(html);
        }
        function remove_image_more(loop_image_count){
            jQuery('.product_images_'+loop_image_count).remove();
        }
    </script>
@endsection

