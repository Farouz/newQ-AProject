@extends('layouts.default')
@section('content')
<div class="container">
    <h2>{{$question->question}} </h2>
    @if(Auth::check())
    <div class="form-group">
        <form class="form-group" method="post" action="/create">
            {{csrf_field()}}
            <input name="user_id" type="hidden" value="{{Auth::user()->id}}"/>
            <input name="question_id" type="hidden" value="{{$question->id}}"/>
            <input class="form-control" name="answer" type="text" id="answer" placeholder="@lang('alert.WriteYourAnswer')">
            <button type="submit" class="btn btn-primary"> @lang('alert.WriteYourAnswer')</button>
        </form>
    </div>
        @endif
</div>
    <div class="container">
        <h2>@lang('alert.previousAnswers')</h2> <hr>
        <ul>
            @foreach($answers as $answer)
                <li>
                    {{$answer->answer}} - by {{$answer->user->username}}
                </li>
                @endforeach

        </ul>
    </div>



@endsection
