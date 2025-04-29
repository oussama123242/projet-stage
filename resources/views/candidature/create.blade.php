@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Envoyer la candidature</h2>
    <form action="{{ route('candidature.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Prénom</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" name="telephone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>CV (PDF / DOC)</label>
            <input type="file" name="cv" class="form-control">
        </div>
        <div class="mb-3">
            <label>Salaire actuel</label>
            <input type="text" name="salaire_actuel" class="form-control">
        </div>
        <div class="mb-3">
            <label>Salaire souhaité</label>
            <input type="text" name="salaire_souhaite" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer la candidature</button>
    </form>
</div>
@endsection
