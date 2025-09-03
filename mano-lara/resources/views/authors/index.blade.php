@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5" data-list-bin data-list-url="{{ route('authors-list') }}"></div>
        <div class="col-md-7" data-body-bin></div>
    </div>
</div>
<div data-modal-bin></div>
@endsection