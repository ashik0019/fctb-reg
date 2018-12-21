@extends('frontend.layouts.master')
@section('title','Registration-FCTB')
@section('content')
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card" style="padding: 15px;">
            <div class="header-style-form">Confirmation</div>
            <div><p>Your Registration has been completed successfully.For security reason we need to verify your phone number.please click the button below.</p></div>
            <input type="hidden" value="+880" id="country_code" />
            <input type="hidden" value="{{$mobile !='' ? $mobile : ''}}" placeholder="phone number" id="phone_number"/>


                <button class="text-center btn btn-default btn-lg" style="background-color: #AD3936" onclick="smsLogin();">Verification</button>



        </div>
    </div>
    <div class="col-2"></div>
</div>
@endsection

@section('js')
    <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>


    <script>
        // initialize Account Kit with CSRF protection
        AccountKit_OnInteractive = function(){
            AccountKit.init(
                {
                    appId:"204493777143867",
                    state:"CSRF_TOKEN",
                    version:"v1.0",
                    fbAppEventsEnabled:true,
                }
            );
        };

        // login callback
        function loginCallback(response) {
            if (response.status === "PARTIALLY_AUTHENTICATED") {
                var code = response.code;
                var csrf = response.state;
                // Send code to server to exchange for access token
            }
            else if (response.status === "NOT_AUTHENTICATED") {
                // handle authentication failure
            }
            else if (response.status === "BAD_PARAMS") {
                // handle bad parameters
            }
        }

        // phone form submission handler
        function smsLogin() {
            var countryCode = document.getElementById("country_code").value;
            var phoneNumber = document.getElementById("phone_number").value;
            AccountKit.login(
                'PHONE',
                {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
                loginCallback
            );
        }


        // email form submission handler
        function emailLogin() {
            var emailAddress = document.getElementById("email").value;
            AccountKit.login(
                'EMAIL',
                {emailAddress: emailAddress},
                loginCallback
            );
        }
    </script>


@endsection
