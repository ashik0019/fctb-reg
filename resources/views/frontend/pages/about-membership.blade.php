@extends('frontend.layouts.master')
@section('title','About-membership')
@push('css')

@endpush
@section('content')
<section class="content-area">
    <div class="hero hero--cut" style="background-image: url({{asset('frontend/media/1095/16.jpg')}});"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a rel="index up" href="{{route('index')}}">Home</a></li>
                    <li class="active">About Membership </li>
                </ol>
                <h1>About Membership</h1>
                <p>The accountancy landscape is constantly evolving and practitioners that wish to keep pace must ensure they are up to date with every facet of the profession, from understanding the latest guidance and relevant legislation, to ensuring they have compliant insurance in place.</p>
                <p>FCTB members can rest easy in the knowledge they belong to an association which not only provides a highly valuable practising certificate and well respected designatory letters, but also boasts an industry leading CPD programme and professional indemnity insurance amongst its many benefits - all provided as standard within the cost of the FCTB membership subscription.<br /><br /></p>
            </div>
            <div class="col-md-12">
                <a href="../routes-to-membership/index.html" class="link-block--primary" style="background-image: url({{asset('frontend/media/1089/10.jpg')}});">
                    <div class="link-block--primary__inner">
                        <h2 class="link-block__title">Routes to Membership</h2>
                        <p>Find out what you need to be a member</p>
                        <span>Read More</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="../registration-1/index.html" class="link-block--secondary"
                   style="background-image: url({{asset('frontend/media/1086/7.jpg')}});">
                    <div class="link-block--secondary__inner">
                        <h2 class="link-block__title">Apply Now</h2>
                        <p>Start your journey to FCTB Membership</p>
                        <span>Apply Now</span>
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
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="applications-process/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Applications Process </span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="about-cpaa-seminars/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">About FCTB Seminars </span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="banks-and-building-societies/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Banks and Building Societies</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="amlcc/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Anti-Money Laundering</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="group-insurance-scheme/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Group Insurance Scheme </span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="practising-certificate/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Practising Certificate</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@push('css')

@endpush
@stop
