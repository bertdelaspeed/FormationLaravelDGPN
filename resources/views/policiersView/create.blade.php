@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Enregistrer un policier</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('CheminPolicier.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class='form-control' id='nom' name='nom' required>
                        </div>
                        <div class="mb-3">
                            <label for="prenoms" class="form-label">Prenoms</label>
                            <input type="text" class='form-control' id='prenoms' name='prenoms' required>
                        </div>
                        <div class="mb-3">
                            <label for="matricule" class="form-label">Matricule</label>
                            <input type="text" class='form-control' id='matricule' name='matricule' required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class='form-control' id='email' name='email' required>
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone</label>
                            <input type="text" class='form-control' id='telephone' name='telephone' required>
                        </div>

                        <button type='submit' class="btn btn-primary">Enregistrer</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
