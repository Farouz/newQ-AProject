@extends('layouts.default')
@section('content')

        <h2>@lang('alert.Ask') </h2>

        <div class="form-control"> <!-- Questions Form-->
            @if(Auth::check())
            <form method="post" action="ask">
                {{csrf_field()}}
                <input name="user_id" type="hidden" value="{{Auth::user()->id}}"/>
                <label for="question">@lang('alert.Ask') </label>
                <input type="text" name="question" class="form-control input-sm chat-input" id="question" required>
                <br>
                <button type="submit" class="btn btn-xs btn-success">@lang('alert.Askform') </button>
            </form>
                @else
            <h2>@lang('alert.uncheck')</h2>
                @endif
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
        @if(Auth::check())
    <div class="container"> <!-- showing questions-->
        <hr>
<h2>@lang('alert.UnsolvedQuestions')</h2>
      <ul>
          @foreach($questions as $question)
            <a href="question/{{$question->id}}" > <li>{{$question->question}}</li> </a> 
          @endforeach
      </ul>
    </div>
@endif
@endsection
