@extends('layouts.default')

@section('content')
  <h2>  {{$username}} @lang('alert.questions')  </h2>

        <ul>
            @foreach($questions as $question)
                <li>
                   {{$question->question}}
                    <a href="question/{{$question->id}}"><button type="button" class="btn btn-sm btn-info">@lang('alert.Show')</button></a>
                    <a href="question/{{$question->id}}/edit"><button type="button" class="btn btn-sm btn-warning">@lang('alert.Edit')</button></a>
                    <a href="question/{{$question->id}}/delete"  ><button type="button" class="btn btn-sm btn-danger">@lang('alert.Delete')</button></a>

                </li> <hr>
                @endforeach
        </ul>

     @stop