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
                    <h1>Send Emails</h1>
                </div>
                <form id='form-select'>
                    <div class="col-md-3 add-top-5">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="member_email" value="option1">
                                Member Email
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 add-top-5">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="group_email" value="option1">
                                Group Email
                            </label>
                        </div>
                    </div>
                </form>

                <hr>
            </div>
            <div class="col-md-12">

                        <div class="col-md-12" style='display:none' id="member_email_target">
                            {!! Form::open(['route'=>['emails.memberSave'],'method'=>'POST']) !!}

                                {{Form::label('to','To')}}<br>
                                {{Form::select('to[]',$members,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}



                            {{ Form::label('cc','CC') }}
                            {{Form::text('cc',null,array('class'=>'form-control'))}}

                            {{ Form::label('subject','Subject') }}
                            {{Form::text('subject',null,array('class'=>'form-control'))}}

                            {{Form::label('body','Email Body:')}}
                            {{Form::textarea('body',null,array('class'=>'form-control fileData'))}}

                            {{Form::submit('Send',['class'=>'btn btn-success','style'=>'margin-top:20px; margin-left:450px;','name'=>'save'])}}
                            {{Form::submit('Save',['class'=>'btn btn-success','style'=>'margin-top:20px;','name'=>'save'])}}
                            {!! Form::close() !!}
                        </div>

                <div class="col-md-12" style='display:none' id="group_email_target">
                    {!! Form::open(['route'=>['emails.groupSave'],'method'=>'POST']) !!}
                    {{Form::label('to','To')}}
                    {{Form::select('to[]',$groups,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}



                    {{ Form::label('cc','CC') }}
                    {{Form::text('cc',null,array('class'=>'form-control'))}}

                    {{ Form::label('subject','Subject') }}
                    {{Form::text('subject',null,array('class'=>'form-control'))}}

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
    <script>
        $(document)
                .ready(function () {
                    $("#member_email").click();
                });
        $('input[name=optionsRadios]').click(function () {
            if (this.id == "member_email") {
                $("#member_email_target").show('slow');
                $("#group_email_target").hide('slow');
            } else if (this.id == "group_email") {
                $("#member_email_target").hide('slow');
                $("#group_email_target").show('slow');
            }
        });

    </script>

@endsection