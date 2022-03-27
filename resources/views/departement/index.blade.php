<h1>Je suis sur la pages des Siéges</h1>

    <table>
        <head>
            <th>liste</th>
            <th>Nom Siéges</th>
            <th>Départements</th>
            <th>Regions</th>
            <th>Pays</th>
            <th>Commune</th>
        </head>
        <tbody>
            @foreach ($sieges as $siege)
            <tr>
                <td>{{$siege->id}}</td>
                <td>{{$siege->nomSiege}}</td>
                <td>{{$siege->Commune->nomCommune}}</td>
                <td>{{$siege->Commune->Departement->nomDepartement}}</td>
                <td>{{$siege->Commune->Departement->Region->nomRegion}}</td>
                <td>{{$siege->Commune->Departement->Region->Pays->nomPays}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>