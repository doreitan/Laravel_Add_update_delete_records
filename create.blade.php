@extends("layout.app")

@section("content")
<h1>create</h1>

{!! Form::open(['action' => 'controller2@store', "method"=>"POST"]) !!}
<div class="form-group">
    {{form::label('koteret','koteret shel harashuma')}}
    {{
        form::text('koteret','',
            ['class'=>'form-control',
            'placeholder'=>'koteret'])


    }}
</div>

<div class="form-group">
        {{form::label('body','body shel harashuma')}}
       
       
        {{
            form::textarea('body','',
                ['id'=>'article-ckeditor',
                'class'=>'form-control',
                'placeholder'=>'Body Text'])
    
    
        }}
    </div>

    {{form::submit('submit',['class'=>'btn btn-primary'])}}







{!! Form::close() !!}
        
@endsection



	 