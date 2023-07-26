<!-- resources/views/suppliers/form.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>@if(isset($supplier)) Modifier le fournisseur @else Ajouter un fournisseur @endif</h1>

    <form method="POST" @if(isset($supplier)) action="{{ route('suppliers.update', $supplier->id) }}" @else action="{{ route('suppliers.store') }}" @endif>
        @csrf
        @if(isset($supplier)) @method('PUT') @endif

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control" @if(isset($supplier)) value="{{ old('nom', $supplier->nom) }}" @else value="{{ old('nom') }}" @endif required>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" class="form-control" @if(isset($supplier)) value="{{ old('adresse', $supplier->adresse) }}" @else value="{{ old('adresse') }}" @endif required>
        </div>

        <div class="form-group">
            <label for="telephone">Téléphone :</label>
            <input type="text" name="telephone" id="telephone" class="form-control" @if(isset($supplier)) value="{{ old('telephone', $supplier->telephone) }}" @else value="{{ old('telephone') }}" @endif required>
        </div>

        <button type="submit" class="btn btn-primary">@if(isset($supplier)) Modifier @else Ajouter @endif</button>
    </form>
@endsection
