@extends('management.layouts.master')
@section('title')
    Categories
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Categories</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <form action="{{route('menu.update',$menu->id)}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row my-1">
                                        <div class=" col-12 my-2">
                                            <label for="email_address1">Category </label>

                                            <select class="form-control select2" name="category_id" id="Quiz-type" data-placeholder="Select" required>
                                                @foreach($category as $row)
                                                    <option {{$menu->category_id == $row->id ? 'selected' : ''}}   value='{{$row->id}}'>{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class=" col-12 my-2">
                                            <label for="email_address1">  Name </label>
                                            <div class="form-line">
                                                <input type="text" id="erp_question_text"
                                                       class="form-control" name="name"
                                                       value="{{$menu->name}}"
                                                       placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class=" col-12 my-2">
                                            <label for="email_address1">  Detail </label>
                                            <div class="form-line">
                                                <textarea type="text" id="detail"
                                                          class="form-control" name="detail"
                                                          value="{{$menu->detail}}"
                                                          placeholder="Enter Food Detail" >{{$menu->detail}}</textarea>
                                            </div>
                                        </div>
                                        <div class=" col-12 my-2">
                                            <label for="email_address1">Price </label>
                                            <div class="form-line">
                                                <input type="text" id="price"
                                                       class="form-control" name="price"
                                                       value="{{$menu->price}}"
                                                       placeholder="Price" required>
                                            </div>
                                        </div>

                                        <div class="col-12 my-2">
                                            <div class="main_container m-3">
                                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                                    <div class="select_img d-flex justify-content-center align-items-center">
                                                        <div class="dz-message p-3 text-center">
                                                            <div class="drag-icon-cph">
                                                                <i class="material-icons" style="font-size: 35px">touch_app</i>
                                                            </div>
                                                            <h3>Click to upload.</h3>
                                                        </div>
                                                    </div>
                                                    <input type="file" name="image" accept=".jpg,.gif,.png,.webp"
                                                           class="main_file w-100 h-100 form-control position-absolute  opacity-0" />
                                                    <div class="img-thumb">
                                                        <img class="main_img d-block w-100 h-100 position-absolute" src="{{asset('images/menu'.'/'.$menu->image)}}" height="60px" width="60px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary  my-2 float-right"> Submit   </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection

