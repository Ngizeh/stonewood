@foreach($property->all() as $value)

    <div class="row index">
        <div class="col-md-4">
            @foreach($value->propertyPhotos as $set)
                @if($loop->first)
                    <img src="/{{$set->thumbnail_path }}" alt="{{$set->name}}">
                @endif
            @endforeach
        </div>
        <div class="col-md-8">
            <h2>{{$value->title}}</h2>
            <p class="big"><strong> Ksh. {{number_format($value->price)}} at {{$value->location}}</strong></p>
            <p>{{str_limit($value->description, 300, ' ...')}} <a href="{{url('property/'.$value->title)}}"> &lsqb; Read More &rsqb;</a></p>
        </div>
    </div>
    <hr>
@endforeach
{{ $property->links() }}