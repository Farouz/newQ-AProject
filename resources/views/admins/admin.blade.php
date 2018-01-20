@extends('layouts.default')
@section('content')
<div class="container">
    <h2>@lang('alert.QuestionsControl')</h2>

    <table class=" table table-hover">
            <tr>
                <th>@lang('alert.ID')</th>
                <th>@lang('alert.Question')</th>
                <th>@lang('alert.Control')</th>
            </tr>

            @foreach($allQuestions as $question)
            <tr>
                <th>{{$question->id}}</th>
                <th>{{$question->question}}</th>
                <th>
                    <div>
                        <a href="admin/{{$question->id }}/delete" class="btn btn-danger center-block">@lang('alert.Delete')</a>
                    </div>
                </th>
            </tr>
                @endforeach


    </table>
</div>
<hr>

<div class="container">
    <h2>@lang('alert.UsersControl')</h2>

    <table class=" table table-hover">
        <tr>
            <th>@lang('alert.ID')</th>
            <th>@lang('alert.UserName')</th>
            <th>@lang('alert.Control')</th>
        </tr>

        @foreach($users as $user)
            <tr>
                <th>{{$user->id}}</th>
                <th>{{$user->username}}</th>
                <th>
                    <div>
                        <a href="admin/{{$user->id }}/deleteUser" class="btn btn-danger center-block">@lang('alert.Delete')</a>
                        <form action="admin/{{$user->id}}/update" method="post" class="pull-right">
                            {{csrf_field()}}

                                    <input type="checkbox" name="makeAdmin" class="bottom" for="makeAdmin" id="solved"> @lang('alert.makeAdmin')

                                <button type="submit" class="btn btn-primary"> submit</button>


                        </form>
                    </div>
                </th>
            </tr>
        @endforeach


    </table>
</div>

    @stop