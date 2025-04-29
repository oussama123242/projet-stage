@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Expériences professionnelles</h2>
    <form action="{{ route('experiences.store') }}" method="POST">
        @csrf
        <input type="hidden" name="candidature_id" value="{{ $candidature_id }}">

        <div class="mb-3">
            <label for="intitule_poste" class="form-label">Intitulé du poste</label>
            <input type="text" class="form-control" name="intitule_poste" required>
        </div>

        <div class="mb-3">
            <label for="entreprise" class="form-label">Entreprise</label>
            <input type="text" class="form-control" name="entreprise" required>
        </div>

        <div class="mb-3">
            <label for="date_debut" class="form-label">Date de début</label>
            <input type="date" class="form-control" name="date_debut" required>
        </div>

        <div class="mb-3">
            <label for="date_fin" class="form-label">Date de fin</label>
            <input type="date" class="form-control" name="date_fin" required>
        </div>

        <button type="submit" class="btn btn-success">Terminer</button>
    </form>
</div>
@endsection
