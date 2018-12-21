@extends('frontend.layouts.master')
@section('title','About-FCTB')
@push('css')

@endpush
@section('content')
<section class="content-area">
    <div class="hero hero--cut" style="background-image: url({{asset('frontend/media/1087/8.jpg')}});"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a rel="index up" href="{{route('index')}}">Home</a></li>
                    <li class="active">About FCTB</li>
                </ol>
                <h1>About FCTB</h1>
                <p>The Foundation of Chartered Taxation of Bangladesh (FCTB) represents public accountants in the UK and beyond. Our aim as a professional body is to support, train and regulate accountants in public practice, helping our members to deliver quality service and grow their firms.</p>
                <p><br />The FCTB knows the industry like no other and is well recognised and respected by the government, trade bodies and the business community. We provide our members with credible recognition of their professional accounting competency, as well as offering a host of <a data-id="1061" href="../member-information/benefits-of-membership/index.html" title="Benefits of Membership">valuable benefits</a>, from an industry-leading CPD programme, to our group insurance scheme - and much more besides.</p>
                <p> </p>
            </div>
            <div class="col-md-12">
                <a href="../unassigned-pages/what-we-do/index.html" class="link-block--primary" style="background-image: url({{asset('frontend/media/1081/2.jpg')}});">
                    <div class="link-block--primary__inner">
                        <h2 class="link-block__title">What We Do</h2>
                        <p>Find out what we do</p>
                        <span>Read More</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="../benefits-of-membership/index.html" class="link-block--secondary"
                   style="background-image: url({{asset('frontend/media/1092/13.jpg')}});">
                    <div class="link-block--secondary__inner">
                        <h2 class="link-block__title">Benefits of Membership</h2>
                        <p>PI Insurance, CPD, Seminars, Support</p>
                        <span>More Information</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="../contact/index.html" class="link-block--secondary"
                   style="background-image: url({{asset('frontend/media/1084/5.jpg')}});">
                    <div class="link-block--secondary__inner">
                        <h2 class="link-block__title">Contact Us</h2>
                        <p>Click here to get in touch with us</p>
                        <span>Contact Us</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="affiliations/index.html" class="link-block--tertiary"
                >
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Affiliations</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="how-we-regulate/index.html" class="link-block--tertiary"
                >
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">How We Regulate </span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="faqs/index.html" class="link-block--tertiary"
                >
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">FAQs</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="cpaa-social-media/index.html" class="link-block--tertiary"
                >
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Social Media</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="representing-accountants/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Representing Accountants</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="cpaa-team/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">FCTB Team</span>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>
@push('css')

@endpush
@stop
