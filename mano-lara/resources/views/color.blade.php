@extends('body')

@section('turinys')
<div style="background-color: {{ $color }};" class="color-box" data-color="{{ $color }}">
    <h1>{{ $color }}</h1>
</div>
<div data-color="{{ $color }}">
    <a href="{{ route('atsitiktine-spalva') }}">Gauti atsitiktinę spalvą</a>
</div>

@endsection

@section('spalva')
{{ $color }}
@endsection

