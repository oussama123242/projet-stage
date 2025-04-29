@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Formations</h2>
    <form action="{{ route('formation.store', ['candidature' => $candidatureId]) }}" method="POST">
        @csrf

        <div id="formations">
            <div class="formation mb-4 border p-3 rounded">
                <h5>Formation 1</h5>
                <input type="text" name="formations[0][diplome]" placeholder="Diplôme" class="form-control mb-2" required>
                <input type="text" name="formations[0][ecole]" placeholder="École" class="form-control mb-2" required>
                <input type="date" name="formations[0][date_debut]" class="form-control mb-2" required>
                <input type="date" name="formations[0][date_fin]" class="form-control mb-2" required>
            </div>
        </div>

        <button type="button" class="btn btn-secondary mb-3" onclick="ajouterFormation()">Ajouter une formation</button>
        <br>
        <button type="submit" class="btn btn-primary">Suivant</button>
    </form>
</div>

<script>
let formationIndex = 1;

function ajouterFormation() {
    let div = document.createElement('div');
    div.classList.add('formation', 'mb-4', 'border', 'p-3', 'rounded');
    div.innerHTML = `
        <h5>Formation ${formationIndex + 1}</h5>
        <input type="text" name="formations[${formationIndex}][diplome]" placeholder="Diplôme" class="form-control mb-2" required>
        <input type="text" name="formations[${formationIndex}][ecole]" placeholder="École" class="form-control mb-2" required>
        <input type="date" name="formations[${formationIndex}][date_debut]" class="form-control mb-2" required>
        <input type="date" name="formations[${formationIndex}][date_fin]" class="form-control mb-2" required>
    `;
    document.getElementById('formations').appendChild(div);
    formationIndex++;
}
</script>
@endsection
