@extends('layouts.app')

@section('content')
<div class="container ">
<h1 class="text-center py-5">La liste des entreprises</h1>
    <table class="table table-striped">
        <head>
            <th>id</th>
            <th>Prénom du répondant</th>
            <th>Nom du répondant</th>
            <th>Téléphone du répondant</th>
            <th>Nom de l'entreprise</th>
        </head>
        <tbody>
            @foreach ($registre_commerces as $registre_commerce)
            <tr>
                <td>{{$registre_commerce->id}}</td>
                <td>{{$registre_commerce->prenomRepondant}}</td>
                <td>{{$registre_commerce->nomRepondant}}</td>
                <td>{{$registre_commerce->telephonenomRepondant}}</td>
                <td>{{$registre_commerce->Entreprise->nomEntreprise}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
