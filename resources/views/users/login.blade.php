@extends('layouts.default')
@section('content')

    <!--Pulling Awesome Font -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="row">
            <div class="col-md-offset-5 col-md-3">
                <div class="form-login">
                    <h4>@lang('alert.welcome')</h4>
                    <h4>
                   @lang('alert.loginForm')
                    </h4>
                    <form action="/login" method="POST">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <label  for="username">@lang('alert.Username')</label>
                    <input type="text" name="username" id="username" class="form-control input-sm chat-input" placeholder="@lang('alert.Username')" required/>
                    </br>
                <label  for="password">@lang('alert.Password')</label>
                    <input type="password" id="password" name="password" class="form-control input-sm chat-input" placeholder="@lang('alert.Password')" />
                    </br>
                    <div class="wrapper">
            <span class="group-btn">
                            <button type="submit" class="btn btn-primary btn-md">@lang('alert.login')</button>
            </span>
                    </div>
                    </form>
                    @if(count($errors))
                        <div class="form-group" >
                            <div class="alert alert-error">
                                <ul>
                                    @foreach($errors->all() as $error )
                                        <li> {{$error}} </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
    @stop