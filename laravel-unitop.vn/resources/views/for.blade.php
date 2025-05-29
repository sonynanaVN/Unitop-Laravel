@extends ('layouts.app')
@section('title','Tieu de trang for')
@for($i = 2; $i <= $n; $i++)
    @if($i % 2 == 0)
        <p>{{$i}} là số chẵn</p>
    @else
        <p>{{$i}} là số lẻ</p>
    @endif
    <p>Day la so {{$i}}</p>
@endfor