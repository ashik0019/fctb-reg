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
                    <form>
                        <div class="form-group">
                            <label for="name">Name of Applicant</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@stop
