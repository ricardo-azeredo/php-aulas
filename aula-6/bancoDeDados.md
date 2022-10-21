Aula-6

- Repassar o mySql:
--criar base de dados(db) - 
    create database bd_aula6;
    use bd_aula6; //entrando na base de dados bd_aula6;   

-- cria a tabela
create table tb_alunos(
id_aluno int primary key auto_increment,
nome varchar(55),
cpf varchar(11),
nasc date
);


//Criar o campo situacao na tabela tbL_alunos que terá 0 para reporvado e 1 para aprovado.
//situacao é 0 = reprovado e 1 aprovado. O código vai registrar a situação do aluno após 2 avaliações se a média for 6 ou maior, o aluno será aprovado. Caso contrário, será reporvado.
O aluno tbm será reprovado se tiver menos de 75% de aulas assistidas (Fazer o cálculo para descobrir se tem mais ou menos de 75% de faltas).


-criar a tela de tarefas;

• Crie um banco chamado contatos para guardar os dados dos contatos do desafio iniciado nos desafios anteriores. Qual tabela será necessária para este banco? Quais campos serão necessários para cadastrar os dados que já estão sendo capturados pelo formulário? Não se esqueça de deixar um campo id para guardar a chave que identificará um contato como único, assim como foi feito para as tarefas.


Crie um banco chamado estacionamento para cadastrar os veículos estacionados. Neste banco crie uma tabela chamada veiculos com os campos id, placa, marca, modelo, hora_entrada e hora_saida. Decida os tipos de dados que devem ser usados para cada campo. Cadastre alguns veículos e tente fazer pesquisas, como buscar todos os veículos de uma marca.






-Ensinar o PDO:

BANCO DE DADOS COM PDO

PDO - é uma classe do PHP para manipulação de Banco de Dados.

 //Inserção de dados 
 //Para conexã precisamos informar o tipo de SGBD (mysql), o nome do banco, o endereço de onde o banco de dado se encontra (localhost), usuário e senha de conexão ao banco de dados

  $conect = new PDO("mysql:dbname=db_aula06;host=localhost", "root", "");

  //Definindo as variáveis
    $nome = "Joao Muniz";
    $cpf = "00000000999";

    //Preparar o comando sql(query) para cadastro de dados
    //O resultado é armazenado dentro da variáveç query
    $query = $conect->prepare("INSERT INTO tb_clientes(nome,cpf) VALUES(:NOME,:CPF)");

    //Fazendo a associação dos campos VALUES(:NOME,:CPF)
    $query->bindParam(":NOME",$nome);
    $query->bindParam(":CPF", $cpf);

    //Executar
    $query->execute();
    echo "Será que funfou? :[";

    -Add o banco ao projeto tarefas.

    -Fala sobre o metodos $_POST.

    