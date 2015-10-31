@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h2>{{$name}}</h2>    
<p>This is my body content.</p>
<h2>If Statement</h2>
@if ($day == 'Friday')
    <p>Time to party</p>
@else
    <p>Time to make money</p>
@endif

<h2>Foreach Loop</h2>
@foreach ($drinks as $drink)
{{$drink}} <br>
@endforeach

<h2>Execute PHP Function</h2>
<p>The date is {{date(' D M, Y')}}</p>
@endsection