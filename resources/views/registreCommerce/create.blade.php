@extends('layouts.app')

@section('content')

@if ($errors->any())
  @foreach ($errors->all() as $error)
  <div class="alert alert-danger">{{$error}}</div>
  @endforeach
@endif

<div class="container py-12 pt-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6  border-b border-gray-200">
    <form method="post" action="{{ route('registreCommerces.store') }}">
       @csrf
        <div class="mb-3">
          <label for="prenomRepondant" class="form-label">Prenom du répondant</label>
          <input type="text" class="form-control" name="prenomRepondant">
        </div>
        
        <div class="mb-3">
          <label for="nomRepondant" class="form-label">Nom du répondant</label>
          <input type="text" class="form-control"  name="nomRepondant">
        </div>
        
        <div class="mb-3">
          <label for="telephoneRepondant" class="form-label">Telephone du répondant</label>
          <input type="number" class="form-control"  name="telephoneRepondant">
        </div>
        <select class="form-select" name="entreprise_id" aria-label="list des entreprises">
          <option selected>Sélectionner l'entreprise</option>
            @foreach ($entreprises as $entreprise)
              <option value="{{ $entreprise->id }}">{{ $entreprise->nomEntreprise }}</option>
            @endforeach
        </select><br>
       
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
  </div>
</div>
</div>
</div>