@extends('Layout.app')  
@section('title','Contact')
@section('content')

<div class="container-fluid jumbotron mt-5 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6  text-center">
            <h1 class="page-top-title mt-3">-যোগাযোগ করুন-</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
               <h3 class="service-card-title">ঠিকানা</h3>
                <p class="footer-text"><i class="fas fa-map-marker-alt"></i> সাতক্ষীরা, নিউ মার্কেট, খুুলনা  <i class="fas ml-2 fa-phone"></i> ০১৯৯১-৬১৭৭৬৮ <i class="fas ml-2 fa-envelope"></i> shohagcmt98@gmail.com</p>
               
        
                <div class="form-group ">
                    <input id="contact_NameID" type="text" class="form-control w-100" placeholder="আপনার নাম">
                </div>
                <div class="form-group">
                    <input id="contact_MobileID" type="text" class="form-control  w-100" placeholder="মোবাইল নং ">
                </div>
                <div class="form-group">
                    <input id="contact_EmailID"  type="text" class="form-control  w-100" placeholder="ইমেইল ">
                </div>
                <div class="form-group">
                    <input id="contact_MsgID"  type="text" class="form-control  w-100" placeholder="মেসেজ ">
                </div>
                <button id="contactSendBtnID"  type="submit" class="btn btn-block normal-btn w-100">পাঠিয়ে দিন </button>
        </div>
    </div>
</div>





@endsection