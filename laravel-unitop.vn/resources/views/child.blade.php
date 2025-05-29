@extends('layouts.app')

@section('title','Tieu de trang child')

@section('content')
    <h1>Content child</h1>
    <p>Day la noi dung cua trang con</p>
    <!-- <p>Họ và tên:{!! $data !!}</p> -->
    @if($data %2 == 0)
        <p>{{$data}} là số chẵn</p>
    @else
        <p>{{$data}} là số lẻ</p>
    @endif
     
@endsection

@section('sidebar')
    <h1>Sidebar child</h1>
    <p>Day la noi dung cua sidebar trang con</p>
@endsection

@section('footer')
    @parent
    <p>Day la noi dung footer cua trang con</p>
@endsection

@isset($post_title)
    <h1>Post title: {{$post_title}}</h1>
@endisset
@empty($users)
    <h1>Post title is empty</h1>
@endempty