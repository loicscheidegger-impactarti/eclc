@extends('layouts.app')

@section('title', 'Inscription')

@section('content')


<section class="py-5" style="background:#eef2ef;">
    <div class="container">

        <h1 class="text-center mb-2">Formulaire d'inscription / Demande d'information</h1>
        <p class="text-center text-muted mb-5">Sans engagement</p>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('inscription.send') }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nom et prénom de l'enfant</label>
                <input type="text" name="enfant" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">N° de téléphone</label>
                <input type="text" name="telephone" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Date de naissance</label>
                <input type="date" name="naissance" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Nom et prénom des parents</label>
                <input type="text" name="parents" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">N° AVS</label>
                <input type="text" name="avs" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Classe actuelle</label>
                <input type="text" name="classe" class="form-control">
            </div>

            <div class="mb-3">
    <label class="form-label">Message</label>
    <textarea name="message_parent" rows="4" class="form-control"></textarea>
</div>


            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" name="check2" required>
                <label class="form-check-label">
                    Je confirme m’être renseigné sur l’école
                </label>
            </div>

            <button class="btn btn-success w-100">
                Envoyer
            </button>

        </form>
    </div>
</section>
@endsection