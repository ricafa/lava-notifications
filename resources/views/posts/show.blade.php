@extends('layouts.app')

@section('content')

<h1>{{ $post->title }}</h1>
<div>
    {{ $post->body }}
</div>

@endsection