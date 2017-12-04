@foreach($property as $property)

        <div class="row index">
            <div class="col-md-4">
                @if($loop->first)
                <img src="/{{$property->thumbnail_path }}" alt="{{$property->name}}">
                @endif
            </div>
            <div class="col-md-8">
                <h2>{{$property->title}}</h2>
                <p class="big"><strong> Ksh. {{number_format($property->price)}} at {{$property->location}}</strong></p>
                <p>{{str_limit($property->description, 300, ' ...')}} <a href="{{url('property/'.$property->title)}}"> &lsqb; Read More &rsqb;</a></p>
            </div>
        </div>

    <hr>
@endforeach
{{--{{$property->links()}}--}}