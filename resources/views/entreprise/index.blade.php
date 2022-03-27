
@include('header')
<h1>Je suis sur la pages des entreprise</h1>

    <table>
        <head>
            <th>id</th>
            <th>Nom entreprise</th>
            <th>sieges</th>
            <th>commune</th>
            <th>region</th>
            <th>pays</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
    