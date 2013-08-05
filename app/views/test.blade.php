@extends('layouts.master')


@section('content')
    @foreach($mids as $mid)
		<p>M_PATH : {{$mid->path}}</p>
	@endforeach
@stop