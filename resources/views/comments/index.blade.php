@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"  style="background-color:#5cb85c !important;">

                    <div style="font-size:1.2em;color:white;"><b>Comments</b></div>
                </div>
                <div class="panel-body">
                    @include('common.flash')
                    @if (count($comments_data) > 0)
                    <table class="table table-striped cds-datatable">
                        <thead><th>User Name</th><th>Role(s)</th><th>Comment</th><th>Comment Date</th><th>Program Name</th><th>Status</th><th class="no-sort">Actions</th></thead><!-- Table Headings -->
                        <tbody> <!-- Table Body -->
                        @foreach ($comments_data as $comment)
                            <tr>
                                <td class="table-text"><div>{{ $comment->first_name }} {{ $comment->last_name }}</div></td>
                                <td class="table-text"><div>{{ $comment->role_name}}</div></td>
                                <td class="table-text"><div>{{ $comment->text }}</div></td>
                                <td class="table-text"><div>{{ date('F d, Y', strtotime($comment->created_at)) }}</div></td>
                                <td class="table-text"><div>{{ $comment->program_name}}</div></td>

                                <td class="table-text">
                                    <div>
                                        @if($comment->status == 3)
                                           <span style="color:#f0ad4e"><b>Rejected </b></span>
                                        @elseif($comment->status == 2)
                                          <span style="color:green"> <b>Accepted </b></span>
                                        @else
                                            <span style="color:#f0ad4e"><b>Pending </b></span>
                                        @endif
                                    </div>
                                </td>
                                <td class="table-text">
                                    <a href="{{action('CommentsController@accept', [$comment->id])}}" class="btn btn-success btn-sm">Accept</a>
                                    <a href="{{action('CommentsController@reject', [$comment->id])}}" class="btn btn-warning btn-sm">Reject</a>
                                   {!! Form::open([
                                        'method' => 'DELETE',
                                        'action' => ['CommentsController@destroy', $comment->id],
                                        'class' => 'delete-form',
                                        'onsubmit' => 'return confirmDelete()'
                                        ]) !!}

                                    <button type="submit" name="button" class="btn btn-danger btn-sm">Delete</button>

                                    {!! Form::close() !!}


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="panel-body"><h4>No Comment Records found</h4></div>
                @endif
        </div>
    </div>
    </div>
     </div>
    </div>
@endsection
@section('footer')
<script type="text/javascript">
    function confirmDelete() {
        var result = confirm('Are you sure you want to delete?');

        if (result) {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection