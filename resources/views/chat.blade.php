@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Chat en temps réel de Forum Q&A') }}</div>
                <chat :user="{{ Auth::user() }}" />
            </div>
        </div>
    </div>
</div>
@endsection
