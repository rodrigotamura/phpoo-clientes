<?php
require_once('Cliente.php');

$clientes = array(
    array(
        'nome' => "Rodrigo",
        'pessoa' => 'Pessoa Física',
        'cpf_cnpj' => "111.111.111-11",
        'telefone' => '1111.1111',
        'email' => 'rodrigo@teste.com',
        'endereco' => 'Rua A, nº 1',
        'grau' => 2
    ),
    array(
        'nome' => "Pedro SA",
        'pessoa' => 'Pessoa Jurídica',
        'cpf_cnpj' => "02.588.661/0001-55",
        'telefone' => '2222.2222',
        'email' => 'pedro@teste.com',
        'endereco' => 'Rua B, nº 2',
        'grau' => 1
    ),
    array(
        'nome' => "Tiago",
        'pessoa' => 'Pessoa Física',
        'cpf_cnpj' => "333.333.333-33",
        'telefone' => '3333.3333',
        'email' => 'tiago@teste.com',
        'endereco' => 'Rua C, nº 3',
        'grau' => 2
    ),
    array(
        'nome' => "João",
        'pessoa' => 'Pessoa Física',
        'cpf_cnpj' => "444.444.444-44",
        'telefone' => '4444.4444',
        'email' => 'joao@teste.com',
        'endereco' => 'Rua D, nº 4',
        'grau' => 5
    ),
    array(
        'nome' => "Jessica Soluções Tecnológicas",
        'pessoa' => 'Pessoa Jurídica',
        'cpf_cnpj' => "57.587.698/0001-55",
        'telefone' => '5555.5555',
        'email' => 'jessica@teste.com',
        'endereco' => 'Rua E, nº 5',
        'grau' => 5
    ),
    array(
        'nome' => "Debora",
        'pessoa' => 'Pessoa Física',
        'cpf_cnpj' => "666.666.666-66",
        'telefone' => '6666.6666',
        'email' => 'Debora@teste.com',
        'endereco' => 'Rua F, nº 6',
        'grau' => 2
    ),
    array(
        'nome' => "Roberto",
        'pessoa' => 'Pessoa Física',
        'cpf_cnpj' => "777.777.777-77",
        'telefone' => '7777.7777',
        'email' => 'Roberto@teste.com',
        'endereco' => 'Rua G, nº 7',
        'grau' => 4
    ),
    array(
        'nome' => "Natalia",
        'pessoa' => 'Pessoa Física',
        'cpf_cnpj' => "888.888.888-88",
        'telefone' => '8888.8888',
        'email' => 'Natalia@teste.com',
        'endereco' => 'Rua H, nº 8',
        'grau' => 1
    ),
    array(
        'nome' => "Vanessa",
        'pessoa' => 'Pessoa Física',
        'cpf_cnpj' => "999.999.999-99",
        'telefone' => '9999.9999',
        'email' => 'vanessa@teste.com',
        'endereco' => 'Rua I, nº 9',
        'grau' => 2
    ),
    array(
        'nome' => "Jonas",
        'pessoa' => 'Pessoa Física',
        'cpf_cnpj' => "000.000.000-00",
        'telefone' => '0000.0000',
        'email' => 'jonas@teste.com',
        'endereco' => 'Rua J, nº 0',
        'grau' => 3
    )
);
if(@$_GET['o'] == 'desc') $clientes = array_reverse($clientes, true);
foreach($clientes as $key => $valor){
    $cliente[$key] = new Cliente();
    $cliente[$key]
      ->setId($key)
      ->setNome($valor['nome'])
      ->setPessoa($valor['pessoa'])
      ->setCpfCnpj($valor['cpf_cnpj'])
      ->setTelefone($valor['telefone'])
      ->setEmail($valor['email'])
      ->setEndereco($valor['endereco'])
      ->setGrau($valor['grau'])
   ;
}
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
            <?php foreach($cliente as $key => $valor){ ?>
                <tr <?php if(@$_GET['id']==$key) echo "class='info'"?>>
                    <td><?php echo $cliente[$key]->getId();?></td>
                    <td><?php echo $cliente[$key]->getNome();?></td>
                    <td><?php echo $cliente[$key]->getPessoa();?></td>
                    <td class="text-nowrap"><?php echo $cliente[$key]->mostraGrau($cliente[$key]->getGrau());?></td>
                    <td>
                        <?php if(isset($_GET['id']) && @$_GET['id']==$key){?>
                            <div class="conteiner text-nowrap">
                                <div class="row col-md-12">CPF/CNPJ <strong><?php echo $cliente[$key]->getCpfCnpj();?></strong> | Telefone: <strong><?php echo $cliente[$key]->getTelefone();?></strong></div>
                                <div class="row col-md-12">E-mail: <strong><?php echo $cliente[$key]->getEmail();?></strong> | Endereço: <?php echo $cliente[$key]->getEndereco();?></strong></div>
                            </div>
                        <?php }else{?>
                            <button type="button" class="btn btn-primary center-block" onclick="window.location.replace('./?id=<?php echo $key?>&o=<?php echo @$_GET['o']?>')">Detalhes</button>
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
