<?php
include ('conexao.php');
$sql = "SELECT * FROM cadastro";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <section class="inserir" id="inserir">
        <form action="inserir.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="E-mail">
            <input type="submit" value="Enviar">
        </form>
        
    </section>
    <section class="listar">
        <h2>Alunos Cadastrados</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
            </tr>
            <?php while ($aluno = $result->fetch_assoc()): ?>
                <tr>
                    <td><? $aluno['id'];?></td>
                    <td><?=$aluno['nome'];?></td>
                    <td><?=$aluno['sobrenome'];?></td>
                    <td><?=$aluno['email'];?></td>
                    <td><a class="delete-btn" href="excluir.php?id=<?=$aluno['id']; ?>" onclick="return confirm ('Tem certeza que deseja excluir?')">Excluir</a></td>             
                    
                </tr>
                <?php endwhile; ?>
        </table>        
    
        
    </section>

    
</body>
</html>




