@extends('layouts.app')

@section('title','| Create Categories')
@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <h1>Edit Emails</h1>
                </div>


                <hr>
            </div>
            <div class="col-md-12">

                <div class="col-md-12">
                    {!! Form::model($email,['route'=>['emails.update',$email->id],'method'=>'PUT']) !!}

                    {{Form::label('to','To')}}<br>
                    @if($email->type == 'group')
                        {{Form::select('to[]',$groups,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}
                    @else
                        {{Form::select('to[]',$members,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}
                    @endif


                    {{ Form::label('cc','CC') }}
                    {{Form::text('cc',null,array('class'=>'form-control'))}}

                    {{ Form::label('subject','Subject') }}
                    {{Form::text('Subject',null,array('class'=>'form-control'))}}

                    {{Form::label('body','Email Body:')}}
                    {{Form::textarea('body',null,array('class'=>'form-control fileData'))}}

                    {{Form::submit('Send',['class'=>'btn btn-success','style'=>'margin-top:20px; margin-left:450px;','name'=>'save'])}}
                    {{Form::submit('Save',['class'=>'btn btn-success','style'=>'margin-top:20px;','name'=>'save'])}}
                    {!! Form::close() !!}
                </div>


            </div>

        </div>

    </div>
@stop


@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2({
            tags: true,
            tokenSeparators: [',', ' '],
            width: '100%'
        });
        @if($email->type == 'group')
        $('.select2-multi').select2().val({!! json_encode($email->groups()->getRelatedIds()) !!}).trigger('change');
        @else
            $('.select2-multi').select2().val({!! json_encode($email->members()->getRelatedIds()) !!}).trigger('change');
        @endif
    </script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>

        tinymce.init({
            selector: 'textarea',
            height: 140,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
            image_advtab: true,
            imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>


@endsection