@extends('layouts.app')

@section('content')
<div class="container ">
<h1 class="text-center py-5">La liste des entreprises</h1>
    <table class="table table-striped">
        <head>
            <th>id</th>
            <th>Nom entreprise</th>
            <th>sieges</th>
            <th>commune</th>
            <th>region</th>
            <th>pays</th>
            <th>plus d'information</th>
        </head>
        <tbody>
            @foreach ($entreprises as $entreprise)
            <tr>
                <td>{{$entreprise->id}}</td>
                <td>{{$entreprise->nomEntreprise}}</td>
                <td>{{$entreprise->Siege->nomSiege}}</td>
                <td>{{$entreprise->Siege->Commune->nomCommune}}</td>
                <td>{{$entreprise->Siege->Commune->Departement->nomDepartement}}</td>
                <td>{{$entreprise->Siege->Commune->Departement->Region->nomRegion}}</td>
                <td>{{$entreprise->Siege->Commune->Departement->Region->Pays->nomPays}}</td>
                {{-- <td><a href="{{ route('entreprises.show') }}">asat</a></td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
