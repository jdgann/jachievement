@extends('layouts.app')
@section('content')
<style>
comments .commentAdd {
    display: table;
    height: 100%;
    width: 100%;
    margin: 0 1.5rem 1rem 1.5rem;
    div[class^='col-sm'] {
        display: table-cell;
        height: 100%;
        float: none;
    }
    img {
    }
    input {
        width: 100%;
        max-width: none;
    }
    button {
        color: #FFFFFF;
    }
}

comments .commentTable {
    font-family: Calibri, sans-serif;
    font-size: 1.3214em;
    font-weight: 100;
    margin-left: 1.5rem;
    margin-right: 1.5rem;
    table {
        width: 100%;
    }
    thead, tbody, th, td {
        border-color: #DCDCDC;
        text-align: left;
    }
    .commentTopRow {
        font-weight: 900;
        margin-top: .5rem;
    }
    .commentMiddleRow {

    }
    .commentBottomRow {
        color: #ADADAD;
        font-size: .8571em;
        font-style: italic;
    }

    .commentUserName {

    }
}

div.namebox {
    
    
    border: 1px solid black;

}

div.bigbox {
    
    
    border: 2px solid black;

}

div.smallbox {
    
    
    border: 1px;

}
</style>


  <div class="container">
        <div class="row">




                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div style="font-size:1.2em;color:white;"><b>Hints and Tips</b></div>
                    </div>
                     </div>
               

    <div class="commentAdd">
        <div class="col-sm-1">
            <img class="img-rounded"/>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="Type your message here..." />
        </div>

             <div class="form-group{{ $errors->has('company_state_id') ? ' has-error' : '' }}">
       {!! Form::open() !!}
    <div class="col-md-3">
        {!! Form::select('company_state_id', $programs, null,  ['id'=> 'company_state_id','class' => 'col-sm-3 form-control']) !!}
        @if ($errors->has('company_state_id'))
            <span class="help-block"><strong>{{ $errors->first('company_state_id') }}</strong></span>
        @endif
      
        </div>
</div>

        <div class="col-sm-2">
            <!-- <button class="btn btn-cons" title="Add Comment">Add Comment</button> -->
            {!! Form::button('Add Comment', ['type' => 'submit','id'=>'save', 'class' => 'btn btn-success']) !!}
            {!! Form::close() !!}  
        </div>

   

    </div>




     
    
@if (count($comments_data1) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
       
            
        </div>
        <div class="panel-body">
         
       
<br>
            <div class="panel-body bigbox">
                @foreach ($comments_data1 as $comment)
                    
<div class="panel-body smallbox">
     <div class="col-md-2 namebox"  ><div>{{ $comment->first_name }}</div></div>

       <div class="col-md-7">{{ $comment->text }} <br>{{ $comment->created_at }}</div>


    <div class="col-md-3">{{ $comment->name}}</div>  </div>
                @endforeach
            </div>
    </div>
     </div>
          </div>

          </div>
@endif
@stop
