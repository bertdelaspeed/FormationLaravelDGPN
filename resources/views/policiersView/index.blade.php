@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4 d-flex justify-content-between ">
                    <h2>Liste des Policiers</h2>
                    <a href="{{ route('CheminPolicier.create') }}" class="btn btn-primary">Creer policier</a>
                </div>
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prenoms</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Service</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ListPoliciers as $policier)
                            <tr>
                                <td>{{ $policier->id }}</td>
                                <td>{{ $policier->matricule }}</td>
                                <td>{{ $policier->nom }}</td>
                                <td>{{ $policier->prenoms }}</td>
                                <td>{{ $policier->email }}</td>
                                <td>{{ $policier->telephone }}</td>
                                {{-- <td>{{ $policier->service()->pluck('name')->implode(', ') }}</td> --}}
                                <td>{{ $policier->service?->name ?? '🤷‍♀️👎' }}</td>
                                {{-- <td>
                                    @foreach ($AllServices as $service)
                                        @if ($policier->service_id == $service->id)
                                            {{ $service->name }}
                                        @endif
                                    @endforeach

                                </td> --}}
                                <td class="d-flex justify-content-between">
                                    <a href="{{ route('CheminPolicier.edit', $policier->id) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('CheminPolicier.destroy', $policier->id) }}" method='POST'>
                                        @csrf
                                        @method('DELETE')
                                        <button type='submit' class="btn btn-danger"
                                            onclick="return confirm('Etes vous sur de vouloir supprimer ?')">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
