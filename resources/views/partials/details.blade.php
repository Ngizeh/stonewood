@foreach($properties as $property)
    <div class="row index">
        <a href="{{'property/'.str_replace(' ','-',$property->title)}}">
            <div class="col-md-4">
                @foreach($property->propertyPhotos as $set)
                    @if($loop->first)
                        <img src="/{{$set->thumbnail_path }}" alt="{{$set->name}}">
                    @endif
                @endforeach
            </div>
        </a>
            <div class="col-md-8">
                <h2>{{$property->title}}</h2>
                <p class="big"><strong>
                        @include('partials.currency')
                        {{number_format($property->price)}} at {{$property->location}}</strong></p>
                <p>{{str_limit($property->description, 300, ' ...')}} <a href="{{url('property/'.$property->title)}}"> &lsqb;
                        Read More &rsqb;</a></p>
            </div>
    </div>

    <hr>
@endforeach
{{ $properties->links() }}