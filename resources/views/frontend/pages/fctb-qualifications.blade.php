@extends('frontend.layouts.master')
@section('title','FCTB-Qualifications')
@push('css')

@endpush
@section('content')
<section class="content-area">
    <div class="hero hero--cut" style="background-image: url({{asset('frontend/media/2450/tobias-van-schneider-230814.jpg')}});"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a rel="index up" href="{{route('index')}}">Home</a></li>
                    <li class="active">FCTB Qualifications </li>
                </ol>
                <h1>FCTB Qualifications</h1>
                <p> </p>
                <p>We have been developing a qualification specifically aimed at small practitioners that covers the skills and knowledge that are essential for an accountant in practice.</p>
                <p> </p>
            </div>
            <div class="col-md-6">
                <a href="../qualification/cpaa-qualifications/index.html" class="link-block--secondary"
                   style="background-image: url({{asset('frontend/media/2448/yoadqb46v6k-craig-garner.jpg')}});">
                    <div class="link-block--secondary__inner">
                        <h2 class="link-block__title">FCTB Qualifications</h2>
                        <p>Qualification structure</p>
                        <span>Find out more</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="../qualification/register-for-cpaa-qualifications/index.html" class="link-block--secondary"
                   style="background-image: url({{asset('frontend/media/2449/u_5bnlnfpn4-oliver-klein.jpg')}});">
                    <div class="link-block--secondary__inner">
                        <h2 class="link-block__title">Register</h2>
                        <p>Register now for a FCTB qualification</p>
                        <span>Find out more</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="fees/index.html" class="link-block--tertiary"
                >
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Qualification Fees</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="faqs/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">FAQs</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="development/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Qualification Development and Who It&#39;s For</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="policies/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Policies</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="assessments/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Assessment Information</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="assessment-dates/index.html" class="link-block--tertiary">
                    <div class="link-block--tertiary__inner">
                        <span class="link-block__title">Assessment Dates</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


@push('css')

@endpush
@stop

