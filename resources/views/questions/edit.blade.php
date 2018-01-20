@extends('layouts.default')
@section('content')
   @lang('alert.YourOriginalQuestionIs') : <h3>{{$question->question}}</h3>
    <form method="post" action="update" class="form-control" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="question" id="question">@lang('alert.EditYourQuestion'):</label>
            <input type="text" name="question" id="question" class="form-control" required>
        </div>
        <div>
            <label for="solved">
                <input type="checkbox" name="solved" for="solved" id="solved"> @lang('alert.Solved')
            </label>
        </div>
        <div>
            <button type="submit" class="btn btn-primary"> @lang('alert.Edit')</button>

        </div>
    </form>
    @stop