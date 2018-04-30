@extends('layouts.app')

@section('content')
    <h1>Edit the article</h1>
    {!! Form::open(['action' => ['ArticlesController@update', $articles->id], 'method' => 'post'] ) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$articles->title,['class'=> 'form-control','placeholder'=> 'Title'])}}
    </div>

    <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::text('description',$articles->description,['class'=> 'form-control','placeholder'=> 'Description'])}}
    </div>

    <div class="form-group">
        {{Form::label('tags', 'Tags:', ['class' => 'form-spacing-top'])}}
        {{Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple' ])}}
    </div>
    
    <div class="form-group">
            {{Form::label('content','Content')}}
            {{Form::textarea('content',$articles->content,['class'=> 'form-control','placeholder'=> 'Content'])}}
    </div>
    
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

<script type="text/javascript">
    $(document).ready(function(){
        $('.select2-multi').select2();
        $('.select2-multi').select2().val( {!! json_encode( $articles->tags()->pluck('tags_id')->toArray()) !!} ).trigger('change');
            //
        }
    });
</script>