@extends('layouts.app')

@section('title','| Create Categories')
@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Send Emails</h1>
                <hr>
            </div>
            <div class="col-md-12">
                {!! Form::open(['route'=>['emails.send'],'method'=>'POST']) !!}
                {{Form::label('to','To')}}
                <select class="form-control select2-multi" multiple=multiple name="to[]">

                </select>


                {{ Form::label('cc','CC') }}
                {{Form::text('cc',null,array('class'=>'form-control'))}}

                {{ Form::label('subject','Subject') }}
                {{Form::text('subject',null,array('class'=>'form-control'))}}

                {{Form::label('body','Email Body:')}}
                {{Form::textarea('body',null,array('class'=>'form-control fileData'))}}

                {{Form::submit('Send Email',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                {!! Form::close() !!}
            </div>
        </div>

    </div>
@stop


@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });

    </script>
@endsection