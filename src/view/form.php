<div style="max-width: 40%" class="container">
  <form method="post">
  
    <div class="form-group">
      <label for="inputName">Nome</label>
      <input type="text" class="form-control" id="inputName" name="inputName">
    </div>

    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" name="inputEmail">
    </div>

    <div class="form-group">
      <label for="inputPhone">Telefone</label>
      <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="(00) 12345 6789">
    </div>

    <div class="form-group">
      <label for="inputImg">Foto</label>
      <input type="file" class="form-control" id="inputImg" name="inputImg" value="" />
    </div>

    <div class="form-group">
      <label for="inputCompany">Empresa Relacionada</label>
      <select id="inputCompany" name="inputCompany" class="form-control">
        <option selected></option>
        <option value="pharma">Pharma</option>
        <option value="nutrition">Nutrition</option>
        <option value="tech">Technology</option>
        <option value="noorskin">Noorskin</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

  </form>
</div>