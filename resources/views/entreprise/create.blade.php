@include('header')

  <div class="container">
    <div class="row">
      <form method="POST" action="{{ route('entreprise.store')}}">
        @csrf
          <div class="mb-3">
            <label>Nom de l'entreprise</label>
            <input type="text" class="form-control" name="nomEntreprise" value="{{ old('nomEntreprise') }}">
          </div>
          <div class="mb-3">
            <label>lien page web</label>
            <input type="text" class="form-control" name="pageWeb" value="{{ old('pageWeb') }}">
          </div>
      
          <div class="mb-3 ">
            <label>Date de création</label>
            <input type="date" class="form-control" name="dateCreation" value="{{ old('dateCreation') }}">
          </div>
      
          <div class="mb-3">
            <label>Nombre d'employés</label>
            <input type="number" class="form-control" name="nombreEmploye" value="{{ old('nombreEmploye') }}">
          </div>

          <div class="form-check" for="contratFormel">
              <span>Vos employés ont-ils des contrats formels ? </span>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="contratFormel" value="true" value="{{ old('contratFormel') }}">
                    <label> Oui </label>
                    <br>
                  <input class="form-check-input" type="radio" name="contratFormel"  checked value="false" value="{{ old('contratFormel') }}">
                    <label> Non </label>
                </div>
          </div>

          <div class="form-check" for="organigrammeClaire">
            <span> Votre organigramme est-il formel ? </span>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="organigrammeClaire" value="true" value="{{ old('organigrammeClaire') }}">
                  <label> Oui </label>
                  <br>
                <input class="form-check-input" type="radio" name="organigrammeClaire"  checked value="false" value="{{ old('organigrammeClaire') }}">
                  <label> Non </label>
              </div>
        </div>

        <div class="form-check" for="dispositifFormation">
          <span> Avez-vous un dispositif de formation ? </span>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="dispositifFormation" value="true" value="{{ old('dispositifFormation') }}">
                <label> Oui </label>
                <br>
              <input class="form-check-input" type="radio" name="dispositifFormation"  checked value="false" value="{{ old('dispositifFormation') }}">
                <label> Non </label>
            </div>
      </div>

      <div class="form-check" for="cotisationSocial">
        <span> Est-ce que vous faite des cotisation sociales ? </span>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="cotisationSocial" value="true" value="{{ old('cotisationSocial') }}">
              <label> Oui </label>
              <br>
            <input class="form-check-input" type="radio" name="cotisationSocial"  checked value="false" value="{{ old('cotisationSocial') }}">
              <label> Non </label>
          </div>
    </div>

      
          <select class="form-select" aria-label="Default select example" name="registreJuridique">
            <option selected>Registre Juridique</option>
            <option value="EI">EI</option>
            <option value="EURL">EURL</option>
            <option value="SNC">SNC</option>
            <option value="SA">SA</option>
            <option value="SAS">SAS</option>
            <option value="SARL">SARL</option>
            <option value="GIE">GIE</option>
            
      
          </select>
          
          <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
  </div>
