@extends("layout.app")

@section("content")
<h1>posts</h1>

    @if (count($hapritim)>0) 
        @foreach ($hapritim as $parit)
            <div class ="well">
                <h3><a href="/posts/{{$parit->id}}"> {{$parit->koteret}} </a></h3>
                  <small> written on {{$parit->created_at}}</small>
            </div>
            
        @endforeach
           {{$hapritim->links()}}
    @else
         <p>no records found </p>

    @endif

        
@endsection



	 