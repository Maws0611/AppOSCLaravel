@extends('layouts.app')

@section('content')
<h1>Plus d'information</h1>
<div class="container" style="margin-top: 80px">
  @foreach ($entreprises as $entreprise)
  <h1>Nom de l'entreprise{{ $entreprise->nomEntreprise }}</h1>
  
  @endforeach
    
</div>