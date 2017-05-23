<?php 
    require_once('functions.php'); 
    add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    
    <div class="form-group col-md-5">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" id="name" name="customer['name']">
    </div>

    <div class="form-group col-md-3">
      <label for="cnpj_cpf">CNPJ / CPF</label>
      <input type="text" id="cnpj_cpf" class="form-control" name="customer['cpf_cnpj']">
    </div>

    <div class="form-group col-md-2">
      <label for="birthdate">Data de Nascimento</label>
      <input type="text" id="birthdate" class="form-control" name="customer['birthdate']">
    </div>

    <div class="form-group col-md-2">
      <label for="phone">Telefone</label>
      <input type="text" id="phone" class="form-control" name="customer['phone']">
    </div>

  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="address">Endereço</label>
      <input type="text" id="address" class="form-control" name="customer['address']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="zip_code">CEP</label>
      <input type="text" id="zip_code" class="form-control" name="customer['zip_code']">
    </div>
  
    <div class="form-group col-md-3">
      <label for="city">Cidade</label>
      <input type="text" id="city" class="form-control" name="customer['city']">
    </div>

    <div class="form-group col-md-2">
      <label for="state">Estado</label>
      <input type="text" id="state" class="form-control" name="customer['state']">
    </div>
    </div>
    
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
