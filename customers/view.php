<?php
    require_once('functions.php');
    $id = intval($_GET['id']);
    view($id);
?>

<?php include(HEADER_TEMPLATE);?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Cliente</h2>
        </div>
    </div>
</header>
<br>
<p><b>Nome:</b> <?php echo $customer['name']; ?></p>
<p><b>CPF/CNPJ:</b> <?php echo $customer['cpf_cnpj']; ?></p>
<p><b>Data de nascimento:</b> <?php echo $customer['birthdate']; ?></p>
<p><b>Endereço:</b> <?php echo $customer['address']; ?></p>
<p><b>CEP:</b> <?php echo $customer['zip_code']; ?></p>
<p><b>Cidade:</b> <?php echo $customer['city']; ?></p>
<p><b>Estado:</b> <?php echo $customer['state']; ?></p>
<p><b>Telefone:</b> <?php echo $customer['phone']; ?></p>
<br>
<a class="btn btn-default" href="<?php echo BASEURL; ?>customers"><i class="fa fa-arrow-left"></i> Voltar</a>
<?php include(FOOTER_TEMPLATE); ?>
