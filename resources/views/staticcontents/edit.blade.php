@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></div>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($content, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['StaticContentController@update', $content->id]]) !!}
                        @include('common.errors')
                        @include('common.flash')

                        @include ('staticcontents.partial', ['CRUD_Action' => 'Update'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection