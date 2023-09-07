@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Enregistrer un policier</h2>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('CheminPolicier.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class='form-control' id='nom' name='nom' required
                                value='{{ old('nom') }}'>
                        </div>
                        <div class="mb-3">
                            <label for="prenoms" class="form-label">Prenoms</label>
                            <input type="text" class='form-control' id='prenoms' name='prenoms' required
                                value='{{ old('prenoms') }}'>
                        </div>
                        <div class="mb-3">
                            <label for="matricule" class="form-label">Matricule</label>
                            <input type="text" class='form-control' id='matricule' name='matricule' required
                                value='{{ old('matricule') }}'>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class='form-control' id='email' name='email' required
                                value='{{ old('email') }}'>
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone</label>
                            <input type="text" class='form-control' id='telephone' name='telephone' required
                                value='{{ old('telephone') }}'>
                        </div>
                        <div class="mb-3">
                            <label for="services" class="form-label">Services</label>
                            <select name="service_id" id="services" class="form-control">
                                @foreach ($ListServices as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type='submit' class="btn btn-primary">Enregistrer</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
