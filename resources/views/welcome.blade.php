@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <section class="hero hero--homepage" style="background-image: url({{asset('frontend/media/1082/3.jpg')}}); height:100px;">
        <div class="container">
            <div class="row">
                <h1 class="text-center" style="color:#fff !important; margin-top: 35px;">Application Form</h1>
            </div>
        </div>
    </section>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-offset-2">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="">Please confirm your title</label>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div>
                                        <select class="Select Session" id="inlineFormCustomSelectPref">
                                            <option selected>Please Select Your Session</option>
                                            <option value="jan-june">Jan-June</option>
                                            <option value="may-oct">May-Oct</option>
                                            <option value="sept-feb">Sept-Feb</option>
                                        </select>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            PGDTM Admission
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            E-Learning Income Tax Management
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            E-Learning VAT & Customs Management
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Research Masters In Taxation Management
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Interested To Get Membership
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Join As an Authorized Partner
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Join As a Tax Consultant
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Join As An Adjunct Faculty
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Interested To Receive Tax Service
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Interested to Arrange Tax Workshop
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Interested to Work Jointly
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Free Tax Awareness Training
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Name of Applicant</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="name">Mobile Number</label>
                            <input type="number" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Mobile Number">
                        </div>
                        <div class="form-group">
                            <label for="name">Father’s Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Father's Name">
                        </div>
                        <div class="form-group">
                            <label for="name">Mother’s Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Mother's Name">
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Applicant’s Photo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Last Professional Qualification</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="present_address">Present Address</label>
                            <textarea class="form-control" id="present_address" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="permanent_address">Permanent Address</label>
                            <textarea class="form-control" id="permanent_address" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
