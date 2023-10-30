@extends('restaurant.layouts.master')
@section('title')
    Profile
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Profile</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <form action="{{url('restaurant/update')}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row my-1">
                                        <div class="col-md-5 my-2">
                                            <div class="main_container ">
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
                                                           class="main_file w-100 h-100 position-absolute  opacity-0" />
                                                    <div class="img-thumb">
                                                        <img class="main_img d-block w-100 h-100 position-absolute" src="{{asset('images/profile'.'/'.$user->restaurant->image)}}" height="60px" width="60px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="row">
                                                <div class=" col-md-12 my-2">
                                                    <label for="email_address1">  Name </label>
                                                    <div class="form-line">
                                                        <input type="text"  id="erp_question_text"
                                                               class="form-control"
                                                               value="{{ $user->name}}"
                                                               name="name"
                                                               placeholder="Name" required>
                                                    </div>
                                                </div>
                                                <div class=" col-md-12 my-2">
                                                    <label for="email_address1">  Email </label>
                                                    <div class="form-line">
                                                        <input type="text" disabled id="erp_question_text"
                                                               class="form-control" name="name"
                                                               value="{{ $user->email}}"
                                                               placeholder="Name" required>
                                                    </div>
                                                </div>
                                                <div class=" col-md-12 my-2">
                                                    <label for="email_address1">  phone </label>
                                                    <div class="form-line">
                                                        <input type="text" disabled id="detail"
                                                               class="form-control" name="detail"
                                                               value="{{ $user->restaurant->contact_number}}"
                                                               placeholder="Enter Food Detail" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h4 class="mt-4">Business Detail</h4>
                                        </div>
                                        <div class=" col-md-12 my-2">
                                            <label for="email_address1">  Name </label>
                                            <div class="form-line">
                                                <input type="text" disabled id="erp_question_text"
                                                       class="form-control" name="name"
                                                       value="{{ $user->restaurant->business_name}}"
                                                       placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class=" col-md-4 my-2">
                                            <label for="email_address1">  Country </label>
                                            <div class="form-line">
                                                <input type="text" disabled id="detail"
                                                       class="form-control"
                                                       value="{{ $user->restaurant->countries->nicename}}"
                                                       placeholder="Enter Food Detail" >
                                            </div>
                                        </div>
                                        <div class=" col-md-4 my-2">
                                            <label for="email_address1">  State </label>
                                            <div class="form-line">
                                                <input type="text" disabled id="detail"
                                                       class="form-control"
                                                       value="{{ $user->restaurant->state}}"
                                                       placeholder="Enter Food Detail" >
                                            </div>
                                        </div>
                                        <div class=" col-md-4 my-2">
                                            <label for="email_address1">  City </label>
                                            <div class="form-line">
                                                <input type="text" disabled id="detail"
                                                       class="form-control"
                                                       value="{{ $user->restaurant->city}}"
                                                       placeholder="Enter Food Detail" >
                                            </div>
                                        </div>
                                        <div class=" col-md-8 my-2">
                                            <label for="email_address1">  Address </label>
                                            <div class="form-line">
                                                <input type="text"
                                                       class="form-control"
                                                       name="address"
                                                       value="{{ $user->restaurant->address}}"
                                                       placeholder="Enter Food Detail" >
                                            </div>
                                        </div>
                                        <div class=" col-md-4 my-2">
                                            <label for="email_address1">  ZIP Code </label>
                                            <div class="form-line">
                                                <input type="text"
                                                       class="form-control"
                                                       name="zipcode"
                                                       value="{{ $user->restaurant->zipcode}}"
                                                       placeholder="Enter Food Detail" >
                                            </div>
                                        </div>
                                        <div class=" col-md-12 my-2 mt-4">
                                            <h5>Bank Detail</h5>
                                        </div>
                                        <div class=" col-md-4 my-2">
                                            <label for="email_address1">  Associated Bank </label>
                                            <div class="form-line">
                                                <input type="text"
                                                       class="form-control"
                                                       name="associated_bank"
                                                       value="{{ $user->restaurant->associated_bank}}"
                                                       placeholder="Associated Bank" >
                                            </div>
                                        </div>
                                        <div class=" col-md-4 my-2">
                                            <label for="email_address1">  Account Type </label>
                                            <div class="form-line">
                                                <input type="text"
                                                       class="form-control"
                                                       name="account_type"
                                                       value="{{ $user->restaurant->account_type}}"
                                                       placeholder="Account Type" >
                                            </div>
                                        </div>
                                        <div class=" col-md-4 my-2">
                                            <label for="email_address1">  Account Number </label>
                                            <div class="form-line">
                                                <input type="text"
                                                       name="account_number"
                                                       class="form-control"
                                                       value="{{ $user->restaurant->account_number}}"
                                                       placeholder=" Account Number " >
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary  my-2 float-right"> UPDATE   </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection

