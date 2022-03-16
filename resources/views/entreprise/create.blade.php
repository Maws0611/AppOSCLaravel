@include('header')

  <div class="container">
    <div class="row">
      <form method_field="PUT" action="{{ route('entreprise.index')}}">
        @csrf
          <div class="mb-3">
            <label>Nom de l'entreprise</label>
            <input type="text" class="form-control" name="nomEntreprise" >
          </div>
          <div class="mb-3">
            <label>lien page web</label>
            <input type="text" class="form-control" name="pageWeb">
          </div>
      
          <div class="mb-3 ">
            <label>Date de création</label>
            <input type="date" class="form-control" name="dateCreation" >
          </div>
      
          <div class="mb-3">
            <label>Nombre d'employés</label>
            <input type="number" class="form-control" name="nombreEmploye">
          </div>

          <div class="form-check" for="contratFormel">
              <span>Vos employés ont-ils des contrats formels ? </span>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="contratFormel" >
                    <label> Oui </label>
                    <br>
                  <input class="form-check-input" type="radio" name="contratFormel"  checked>
                    <label> Non </label>
                </div>
          </div>

          <div class="form-check" for="organigrammeClaire">
            <span> Votre organigramme est-il formel ? </span>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="organigrammeClaire" >
                  <label> Oui </label>
                  <br>
                <input class="form-check-input" type="radio" name="organigrammeClaire"  checked>
                  <label> Non </label>
              </div>
        </div>

        <div class="form-check" for="dispositifFormation">
          <span> Avez-vous un dispositif de formation ? </span>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="dispositifFormation" >
                <label> Oui </label>
                <br>
              <input class="form-check-input" type="radio" name="dispositifFormation"  checked>
                <label> Non </label>
            </div>
      </div>

      <div class="form-check" for="cotisationSocial">
        <span> Est-ce que vous faite des cotisation sociales ? </span>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="cotisationSocial" >
              <label> Oui </label>
              <br>
            <input class="form-check-input" type="radio" name="cotisationSocial"  checked>
              <label> Non </label>
          </div>
    </div>

      
          {{-- <select class="form-select" aria-label="Default select example" name="registreJuridique">
            <option selected>Registre Juridique</option>
      
            @foreach ($registreJuridiques as $registreJuridique )
            <option value="{{ $registreJuridique }}">{{ $registreJuridique }}</option>
            @endforeach
      
          </select> --}}
          {{-- <select class="form-control" name="contact_way">
            @foreach($registreJuridiques as $registreJuridique)    
            <option value="{{ $registreJuridique }}">{{ $registreJuridique }}</option>
            @endforeach
        </select> --}}
          <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
  </div>
