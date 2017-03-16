<?php
# Autoload
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$objClientes = new \vendor\Cliente\ListaClientes();
$clientes    = $objClientes->getClientes();

if(@$_GET['o'] == 'desc') $clientes = array_reverse($clientes, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de clientes</title>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/collapse.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <style>
        h1{text-align:center}
    </style>
</head>
<body>
<div class="page-header">
    <h1>Listagem de clientes</h1>
</div>

<div class="conteiner">
    <div class="row col-md-2"></div>
    <div class="row col-md-8">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th nowrap="true"><a href="./?id=<?php echo $_GET['id']?>&o=<?php echo $ord = (@$_GET['o'] == 'desc') ? "asc" : "desc"?>"># <span class="glyphicon glyphicon-sort"></span></a></th>
                <th>Nome</th>
                <th>Tipo</th>
                <th class="text-nowrap">Grau de importância</th>
                <th>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $key => $valor){ ?>
                <tr <?php if(@$_GET['id']==$key) echo "class='info'"?>>
                    <td><?php echo $valor[id];?></td>
                    <td><?php echo $valor[nome];?></td>
                    <td><?php echo $valor[pessoa];?></td>
                    <td class="text-nowrap"><?php echo $objClientes->mostraGrau($valor[grau]);?></td>
                    <td>
                        <?php if(isset($_GET['id']) && @$_GET['id']==$valor[id]){?>
                            <div class="conteiner text-nowrap">
                                <div class="row col-md-12">CPF/CNPJ <strong><?php echo $valor[cpf_cnpj];?></strong> | Telefone: <strong><?php echo $valor[telefone];?></strong></div>
                                <div class="row col-md-12">E-mail: <strong><?php echo $valor[email];?></strong> | Endereço: <?php echo $valor[endereco];?></strong></div>
                            </div>
                        <?php }else{?>
                            <button type="button" class="btn btn-primary center-block" onclick="window.location.replace('./?id=<?php echo $valor[id]?>&o=<?php echo @$_GET['o']?>')">Detalhes</button>
                        <?php }?>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
    <div class="row col-md-2"></div>
</div>
</body>
</html>
