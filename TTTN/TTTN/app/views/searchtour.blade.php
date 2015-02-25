@extends('index')
@section('content')
    <div class="title">
        <h2>Điểm Đến Nổi Bật</h2>
    </div>
<div class="block-content hovergallery">
    <div class="col-sm-12 alpha">
        @foreach($tour as $tours)
            <ul>
                <li>
                    <h4><a href="{{asset("chitiettour/index.php?id=$tours->id")}}">{{$tours->tentour}}</a></h4>
                    <ul class="media-list">
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img src="{{asset("../public/images/tour/$tours->images")}}" width="69" height="69" >
                            </a>
                            <div class="media-body">
                                <p>
                                    {{$tours->chitietngan}}
                                    <a href="">Chi Tiết</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        @endforeach
    </div>
</div>
</div>
@stop