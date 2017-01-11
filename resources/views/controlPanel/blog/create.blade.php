@extends('layouts.app')

@section('title','| Create Post')

@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Posts</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(array('route'=>'posts.store','files'=>true,'class'=>'filesAjax')) !!}
                    {{Form::label('title','Title:')}}
                    {{Form::text('title',null,array('class'=>'form-control'))}}

                    {{Form::label('category_id','Category')}}
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name }}</option>
                        @endforeach
                    </select>

                    {{Form::label('tags','Tags')}}
                    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('slug','Slug') }}
                    {{Form::text('slug',null,array('class'=>'form-control'))}}

                    {{Form::label('featured_image','Upload Featured Image')}}
                    {{Form::file('featured_image',['class'=>'form-control'])}}
   <button class="btn btn-primary fileUpload" type="button">Upload</button>
     <div class="suceessUP hidden">
         <p>Uploaded success fully</p>
     </div>

     {{Form::label('body','Post Body:')}}
     {{Form::textarea('body',null,array('class'=>'form-control fileData'))}}

     {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

 {!! Form::close() !!}
</div>
          {{--  <div class="col-md-6">
                {!! Form::open(array('route'=>'file.upload','files'=>true)) !!}
                    {{Form::label('featured_image1','Upload Featured Image')}}
                    {{Form::file('featured_image1',['class'=>'form-control'])}}
                    {{Form::submit('Upload',array('class'=>'btn btn-success upload-image','style'=>'margin-top:20px'))}}
                {!! Form::close() !!}
            </div>--}}
<div class="col-md-6">
{{HTML::image('assets/images/logo/little_logo_2.png')}}
</div>
</div>
</div>

@endsection

@section('scripts')
{!! Html::script('assets/js/select2.min.js') !!}
<script type="text/javascript">
$('.select2-multi').select2();

$("body").on("click",".upload-image",function(e){
    $(this).parents("form").ajaxForm(options);
});

var options = {
    complete: function(response)
    {
        if($.isEmptyObject(response.responseJSON.error)){
            $("input[name='title']").val('');
            alert('Image Upload Successfully.');
        }else{
            printErrorMsg(response.responseJSON.error);
        }
    }
};

function printErrorMsg (msg) {
    $(".print-error-msg").find("ul").html('');
    $(".print-error-msg").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
}
</script>
@endsection