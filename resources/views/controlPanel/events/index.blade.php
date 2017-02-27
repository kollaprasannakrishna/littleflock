@extends('layouts.app')

@section('title','| All Posts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Events</h1>


            </div>
            <div class="col-md-12">
                <div class="form-group-lg">
                    <input type="text" class="form-control" placeholder="Search table" id="search_name">
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>

        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover" id="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Data</th>
                            <th>Time</th>
                            <th>Venue</th>
                            <th>Day</th>
                            <th>Type</th>
                            <th>Author</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr class="{{$event->active =='YES'?'success    ':'danger'}}">
                                <td>{{$event->id}}</td>
                                <td>{{$event->name}}</td>
                                <td>{{$event->description}}</td>
                                <td>{{$event->date}}</td>
                                <td>{{$event->time}}</td>
                                <td>{{$event->venue->name }}</td>
                                <td>{{$event->day}}</td>
                                <td>{{$event->type}}</td>
                                <td>{{$event->user->name}}</td>
                                <td><a href="{{route('events.edit',$event->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="{{route('events.show',$event->id)}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>
                                    <a href="{{route('events.delete',$event->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="text-center">
        {{$events->links()}}
    </div>
@endsection

@section('scripts')
    {!! Html::script('assets/js/paging.js') !!}
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script>
        var $rows = $('#table tr');
        $('#search_name').keyup(function() {

            var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
                    reg = RegExp(val, 'i'),
                    text;

            $rows.show().filter(function() {
                text = $(this).text().replace(/\s+/g, ' ');
                return !reg.test(text);
            }).hide();
        });
    </script>


@endsection