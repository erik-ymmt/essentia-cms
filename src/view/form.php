<div style="max-width: 40%" class="container">
  <form method="post">
  
    <div class="form-group">
      <label for="inputName">Nome</label>
      <input type="email" class="form-control" id="inputName">
    </div>

    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail">
    </div>

    <div class="form-group">
      <label for="inputPhone">Telefone</label>
      <input type="text" class="form-control" id="inputPhone" placeholder="(00) 12345 6789">
    </div>

    <div class="form-group">
      <label for="inputCompany">Empresa Relacionada</label>
      <select id="inputCompany" class="form-control">
        <option selected></option>
        <!-- 'pharma','nutrition','tech','noorskin' -->
        <option>Pharma</option>
        <option>Nutrition</option>
        <option>Technology</option>
        <option>Noorskin</option>
      </select>
    </div>

    <div class="form-group">
      <label for="inputNotes">Observações</label>
      <input type="text" class="form-control" id="inputNotes" placeholder="Opcional">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

  </form>
</div>