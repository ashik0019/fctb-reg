<?php
/**
 * Created by PhpStorm.
 * User: Jibon
 * Date: 11/13/2017
 * Time: 2:37 PM
 */
?>
<section class="message-body">
<div class="container">
    <div class="row">

@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            ×</button>
        <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Error Message</strong>
        <hr class="message-inner-separator">
        @foreach ($errors->all() as $error)
        {{ $error }}<br />
        @endforeach
    </div>

    {{--<ul class="alert alert-danger alert-block">--}}
        {{--@foreach ($errors->all() as $error)--}}
            {{--<li>{{ $error }}</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
@endif
@if (Session::get('success'))
    <div class="alert alert-success alert-block" style="overflow: hidden">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="fa fa-check-circle" aria-hidden="true"></i><strong>Success Message</strong>
        <hr class="message-inner-separator">
        @if(is_array(Session::get('success')))
            <ul>
                @foreach(Session::get('success') as $msg)
                    <li><strong>{!! $msg !!}</strong></li>
                @endforeach
            </ul>
        @else
             <strong>{!! Session::get('success') !!}</strong>

        @endif
    </div>
@endif

@if (Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i><strong>Warning Message</strong>
        <hr class="message-inner-separator">
        @if(is_array(Session::get('warning')))
            <ul>
                @foreach(Session::get('warning') as $msg)
                    <li><strong>{!! $msg !!}</strong></li>
                @endforeach
            </ul>
        @else
            <strong> <span class="sr-only">info:</span> <i class="icon-warning-sign fa-3x"></i>  {!! Session::get('warning') !!}</strong>
        @endif
    </div>
@endif
@if (Session::get('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="fa fa-exclamation-circle" aria-hidden="true"></i><strong>Info Message</strong>
        <hr class="message-inner-separator">
        @if(is_array(Session::get('info')))
            <ul>
                @foreach(Session::get('info') as $msg)
                    <li><strong>{!! $msg !!}</strong></li>
                @endforeach
            </ul>
        @else

            <strong>{!! Session::get('info') !!}</strong>

        @endif
    </div>
@endif
@if (Session::get('danger'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="fa fa-hand-o-right" aria-hidden="true"></i><strong>Danger Message</strong>
        <hr class="message-inner-separator">
        @if(is_array(Session::get('danger')))
            <ul>
                @foreach(Session::get('danger') as $msg)
                    <li><strong>{!! $msg !!}</strong></li>
                @endforeach
            </ul>
        @else

            <strong>{!! Session::get('danger') !!}</strong>

        @endif
    </div>
@endif
@if (Session::get('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="fa fa-info" aria-hidden="true"></i><strong>Info Message</strong>
        <hr class="message-inner-separator">
        @if(is_array(Session::get('info')))
            <ul>
                @foreach(Session::get('info') as $msg)
                    <li>  <strong> {!! $msg !!}</strong></li>
                @endforeach
            </ul>
        @else
            <div class="col-md-2"> <i class="fa fa-info-circle" aria-hidden="true"></i>

            </div>
            <div class="col-md-9"> <strong>{!! Session::get('info') !!}</strong></div>

        @endif
    </div>
@endif
    </div>
</div>
</section>