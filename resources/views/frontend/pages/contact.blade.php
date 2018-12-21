@extends('frontend.layouts.master')
@section('title','Contact')
@push('css')

@endpush
@section('content')
<section class="content-area">
    <div class="hero hero--cut" style="background-image: url({{asset('frontend/media/1108/istock_000056477432_xxxlarge.jpg')}});"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a rel="index up" href="{{route('index')}}">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <article>
                    <h1>Contact</h1>
                    <p> </p>
                    <p>If you have any questions or need assistance, please feel free to contact us on the form below. Alternatively you can telephone our offices (880 (2) 9615407, 9615408) or send us an e-mail (fctbinfo@gmail.com). </p>
                    <p> </p>
                    <p>If you would like to register your interest in the FCTB's qualifications, please complete the below form. </p>

                    <script src="../../ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                    <script>
                        var errors = [
                        ];
                    </script>
                    <form action="http://www.acpa.org.uk/contact/" class="form-horizontal  contact-form" data-fv-framework="bootstrap" data-fv-icon-invalid="fa fa-times" data-fv-icon-valid="fa fa-check" data-fv-icon-validating="fa fa-refresh" data-fv-message="This value is not valid" data-fv-trigger="blur" enctype="multipart/form-data" id="contact-form" method="post">    <input type="hidden" name="Stage" value="Details"/>
                        <input type="hidden" id="PostBack" name="PostBack" value=""/>
                        <input name="__RequestVerificationToken" type="hidden" value="ekFjlgVCYVq9b2VrRurxk1lpojhVxVgkoDjp6VZkl0MmYvnJ94K1S80Y6J1BZwgrQ_Bv29NEutcPanA4VJOIwLJnhCv-b87whs08hhB4J-Q1" />    <div class="form-group">
                            <label for="contactName" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" data-fv-notempty="true" data-fv-notempty-message="Please enter your Name" id="contactName" name="Name" type="text" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail" class="col-sm-3 control-label">Email Address</label>
                            <div class="col-sm-9">
                                <input class="form-control" data-fv-emailaddress="true" data-fv-emailaddress-message="Please enter a valid email address" data-fv-notempty="true" data-fv-notempty-message="Please enter a valid email address" id="Email" name="Email" type="text" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactTel" class="col-sm-3 control-label">Telephone Number</label>
                            <div class="col-sm-9">
                                <input class="form-control optional" id="contactTel" name="TelephoneNumber" type="text" value="" />
                                <span class="optional-text">(optional)</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactMessage" class="col-sm-3 control-label">Message</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" cols="20" data-fv-notempty="true" data-fv-notempty-message="Please enter a message" id="contactMessage" name="Message" rows="2">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-lg btn-primary">Send Message</button>
                            </div>
                        </div>
                        <input name='ufprt' type='hidden' value='63FFC2495497D0BB163BE1C0060185D57ABC9A495210523BF44F3B7010793FAD91C0052F2124C13C4440DBBABA4F174477754365C0B555491E7379D7E36B4F2E7DCECAB122AEC640DD2CFB5109C446A9CD61C70E41A548BB7F0DA68D7EA41A07ED41B0EF28970EE35CC2F3D40517F098C0DDE695F102556B123CAA519F6E7273049DBD39AC76D664F1D432090552692E' /></form>
                </article>
            </div>
            <div class="col-md-4">
                <aside>
                    <a href="../member-information/faqs/index.html" class="link-block--secondary"
                       style="background-image: url({{asset('frontend/media/1084/5.jpg')}});">
                        <div class="link-block--secondary__inner">
                            <h2 class="link-block__title">FAQs</h2>
                            <p>Frequently Asked Questions</p>
                            <span>Read More</span>
                        </div>
                    </a>
                    <a href="../routes-to-membership/index.html" class="link-block--secondary"
                       style="background-image: url({{asset('frontend/media/1089/10.jpg')}});">
                        <div class="link-block--secondary__inner">
                            <h2 class="link-block__title">Routes to Membership</h2>
                            <p>Find out what you need to be a member</p>
                            <span>Read More</span>
                        </div>
                    </a>
                </aside>
            </div>
        </div>
    </div>
</section>
@push('css')

@endpush
@stop
