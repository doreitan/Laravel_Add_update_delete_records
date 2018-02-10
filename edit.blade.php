@extends("layout.app")

@section("content")
<h1>Editing Record</h1>



{!! Form::open(['action' => 





               ["controller2@update", $post->id],




               "method"=>"POST"]) 



!!}




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
            form::textarea('body',$post->body,
                ['id'=>'article-ckeditor',
                'class'=>'form-control',
                'placeholder'=>'Body Text'])
    
    
        }}
    </div>

    {{Form::hidden('_method','PUT')}}

    {{form::submit('submit',['class'=>'btn btn-primary'])}}







{!! Form::close() !!}
        
@endsection



	 