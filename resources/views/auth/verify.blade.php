@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span>Vérifiez votre adresse e-mail</span></div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        <span>Un nouveau lien de vérification a été envoyé à votre adresse e-mail.</span>
                    </div>
                    @endif

                    <span>Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.</span>
                    <span>Si vous n'avez pas reçu l'e-mail</span>,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">cliquez ici pour en demander un autre</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection