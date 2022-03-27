<form action="{{ route('regions.store') }}" method="post">
    @csrf
   
        <label>Nom</label>
        <input type="text" name="nomRegion">
    
        <select name="pays_id">
            <option value=""> Selectioner un pays</option>
            @foreach ($pays as $pays)
                <option value="{{$pays->id}}">{{$pays->nomPays}}</option>
            @endforeach
        </select>
    <button type="submit" name="send">Enrégistrer</button>

</form>