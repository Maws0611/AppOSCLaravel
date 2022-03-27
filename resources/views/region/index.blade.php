<h1>Je suis sur la pages des régions</h1>

    <table>
        <head>
            <th>liste</th>
            <th>Nom région</th>
        </head>
        <tbody>
            @foreach ($regions as $region)
            <tr>
                <td>{{$region->id}}</td>
                <td>{{$region->nomRegion}}</td>
                <td>{{$region->Pays->nomPays}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
