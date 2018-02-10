@extends("layout.app")

@section("content")

<a href= "/posts" class="btn btn-default"> go back</a>



<h1>{{$parit->koteret}}</h1>


<div>
    {!!$parit->body!!}
</div>

<small> was created on:{{$parit->created_at}}</small>
<hr>
<a href='/posts'{{$parit->id}}/edit'class='btn btn-default'>
    Record Edit 
</a>

{{!!Form::open(
    ['action'=>
                [
                    'controller2@destroy',
                    $parit->id
                ],

                'method'=>'POST',
                'class'=>'pull-right'
    ]


)!!}}

{{Form::hidden('_method','DELETE')}}

{{Form::submit('delete',
                [
                    'class'=>'btn btn-danger'
                ]
)}}

{!!Form::close()!!}
@endsection



	 