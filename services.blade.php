@extends("layout.app")

@section("content")
    <!--"bimkom <h1> This is the services Page <h1>"-->
    <h1> {{$hakoteret}} </h1>

    @if(count($hapritim)>0)
        <ul class ="list-group">
            @foreach ($hapritim as $parit)
                <li class="list-group-item">
                    {{$parit}}
                </li>
            @endforeach
        </ul>
    @endif
@endsection



	 
		

		
	



