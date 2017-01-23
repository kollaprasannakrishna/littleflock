@extends('layouts.app')

@section('title','| Edit Post')

@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Post</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                {!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT','files'=>true]) !!}
                {{Form::label('title','Title:')}}
                {{Form::text('title',null,array('class'=>'form-control'))}}

                {{Form::label('category_id','Category')}}
                {{Form::select('category_id',$categories,null,['class'=>'form-control'])}}

                {{Form::label('tags','Tags')}}
                {{Form::select('tags[]',$tags,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}

                {{ Form::label('slug','Slug') }}
                {{Form::text('slug',null,array('class'=>'form-control'))}}

                {{Form::label('featured_image','Upload Featured Image')}}
                {{Form::file('featured_image',['class'=>'form-control fileUpload'])}}

                {{Form::label('body','Post Body:')}}
                {{Form::textarea('body',null,array('class'=>'form-control'))}}

                {{Form::submit('Update Post',array('class'=>'btn btn-success','style'=>'margin-top:20px'))}}
                <a href="{{route('posts.index')}}" class="btn btn-primary" style="margin-top: 20px;">Cancle</a>
                {!! Form::close() !!}

            </div>
            <div class="col-md-6">
                {{--<audio controls>
                    <source src="{{URL::to('blogImage/'.$post->image)}}" type="audio/mpeg">
                </audio>--}}

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');



    </script>
@endsection