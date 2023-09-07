@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Modifier un policier</h2>
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
                    <form action="{{ route('CheminPolicier.update', $Modifierpolicier->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class='form-control' id='nom' name='nom' required
                                value='{{ $Modifierpolicier->nom }}'>
                        </div>
                        <div class="mb-3">
                            <label for="prenoms" class="form-label">Prenoms</label>
                            <input type="text" class='form-control' id='prenoms' name='prenoms' required
                                value='{{ $Modifierpolicier->prenoms }}'>
                        </div>
                        <div class="mb-3">
                            <label for="matricule" class="form-label">Matricule</label>
                            <input type="text" class='form-control' id='matricule' name='matricule' required
                                value='{{ $Modifierpolicier->matricule }}'>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class='form-control' id='email' name='email' required
                                value='{{ $Modifierpolicier->email }}'>
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone</label>
                            <input type="text" class='form-control' id='telephone' name='telephone' required
                                value='{{ $Modifierpolicier->telephone }}'>
                        </div>

                        <div class="mb-3">
                            <label for="services" class="form-label">Services</label>
                            <select name="service_id" id="services" class="form-control">
                                <option value="{{ $Modifierpolicier->service_id }}">{{ $Modifierpolicier->service->name }}
                                </option>
                                @foreach ($ListServices as $service)
                                    @if ($Modifierpolicier->service_id != $service->id)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endif
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
