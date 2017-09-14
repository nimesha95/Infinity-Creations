@extends('layouts.master')

@section('title')
    Ready-made Mugs
@endsection

@section('content')

    @foreach($mugs->chunk(3) as $mugschunk)
        <div class="row">
            @foreach($mugschunk as $mug)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{$mug->mainimage}}">
                        <div class="caption">
                            <h3>{{$mug->title}}</h3>
                            <p>{{$mug->description}}</p>
                            <div class="clearfix">
                                <a href="{{route('mug.addToCart' , ['id'=> $mug->id])}}"
                                   class="btn btn-success pull-right" role="button"> Add to Cart </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach


@endsection
