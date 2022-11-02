<?php
    include 'config.php';

    $nome = filter_input(INPUT_GET, 'nome');
    $sobrenome = filter_input(INPUT_GET, 'sobrenome');
    $idade = filter_input(INPUT_GET, 'idade');
    $cargo = filter_input(INPUT_GET, 'cargo');

    $lista = $pdo->query("SELECT * FROM tbl_profissional Where nome like '%$nome%' and sobrenome like '%$sobrenome%' and idade like '%$idade%' and cargo LIKE '%$cargo%'");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESQUISA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-3">
        <form action="" method="get">
            <label for="">
                Pesquisar:
            </label>   
            <div class="d-flex">
                <input class="form-control" type="search" name="nome" placeholder="buscar nome...">
                <input class="form-control" type="search" name="sobrenome" placeholder="buscar sobrenome...">
                <input class="form-control" type="search" name="idade" placeholder="buscar idade...">
                <input class="form-control" type="search" name="cargo" placeholder="buscar cargo...">
                <input class="form-control" type="submit" value="Buscar">
            </div> 
            
        </form>

        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Idade</th>
                <th>Cargo</th>
            </tr>
           <?php foreach($lista as $pessoa): ?>
             <tr>
                <td><?=$pessoa[1]?></td>
                <td><?=$pessoa[2]?></td>
                <td><?=$pessoa[3]?></td>
                <td><?=$pessoa[4]?></td>
             </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>