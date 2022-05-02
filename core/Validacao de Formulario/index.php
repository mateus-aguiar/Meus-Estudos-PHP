<?php
$erroNome = '';
$erroSenha = '';
$erroRepete_Senha = '';
$erroEmail = '';


    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //VERIFICA SE POST NOME ESTÁ VAZIO
        if (empty($_POST['nome'])) {
            $erroNome = "Por favor, preencha um nome";
        } else {
            //PEGA O VALOR VINDO DO POST E LIMPA
            $nome = limpaPost($_POST['nome']);

            //VERIFICA SE TEM SOMENTE LETRAS
            if(!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
                $erroNome = "Apenas aceitamos letras e espaços em branco";
            }
        }

        // VERIFICA SE POST EMAIL ESTÁ VAZIO
        if (empty($_POST['email'])) {
            $erroEmail = "Por favor, informe um e-mail";
        } else {
            $email = limpaPost($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erroEmail = "E-mail inválido";
            }
        }

        // VERIFICA SE POST SENHA ESTÁ VAZIO
        if (empty($_POST['senha'])) {
            $erroSenha = "Por favor, informe uma senha";
        } else {
            $senha = limpaPost($_POST['senha']);
            if (strlen($senha) < 6) {
                $erroSenha = "A senha precisa ter no mínimo 06 digitos";
            }
        }

        // VERIFICA SE POST REPETE_SENHA ESTÁ VAZIO
        if (empty($_POST['repete_senha'])) {
            $erroRepete_Senha = "Por favor, informe a repete senha";
        } else {
            $repete_senha = limpaPost($_POST['repete_senha']);
            if ($repete_senha !== $senha) {
                $erroSenha = "As senhas não são iguais";
            }
        }

        if (($erroNome == "") && ($erroEmail == "") && ($erroSenha == "") && ($erroRepete_Senha == "")) {
            header('Location: obrigado.php'); // Muda a página
        }
    }


    function limpaPost($valor) {
        $valor = trim($valor);
        $valor = stripcslashes($valor);
        $valor = htmlspecialchars($valor);

        return $valor;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulário</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
    <main>
    <h1><span>AULA PHP</span><br>Validação de Formulário</h1>

     <form method="post">

        <!-- NOME COMPLETO -->
        <label> Nome Completo </label>
        <input type="text" name="nome" <?php if(!empty($erroNome)) {echo "class = 'invalido'";} ?> <?php if (isset($_POST['nome'])) { echo "value = ' " . $_POST['nome'] . "'"; } ?> placeholder="Digite seu nome" required>
         <br><span class="erro"><?php echo $erroNome ?></span>

        <!-- EMAIL -->
        <label> E-mail </label>
        <input type="email" name="email" <?php if(!empty($erroEmail)) {echo "class = 'invalido'";} ?> <?php if (isset($_POST['email'])) { echo "value = ' " . $_POST['email'] . "'"; } ?> placeholder="email@provedor.com" required>
        <br><span class="erro"><?php echo $erroEmail ?></span>

        <!-- SENHA -->
        <label> Senha </label>
        <input type="password" name="senha" <?php if(!empty($erroSenha)) {echo "class = 'invalido'";} ?> <?php if (isset($_POST['senha'])) { echo "value = ' " . $_POST['senha'] . "'"; } ?> placeholder="Digite uma senha" required>
        <br><span class="erro"><?php echo $erroSenha ?></span>

        <!-- REPETE SENHA -->
        <label> Repete Senha </label>
        <input type="password" name="repete_senha" <?php if(!empty($erroRepete_Senha)) {echo "class = 'invalido'";} ?>  <?php if (isset($_POST['repete_senha'])) { echo "value = ' " . $_POST['repete_senha'] . "'"; } ?> placeholder="Repita a senha" required>
        <br><span class="erro"><?php echo $erroRepete_Senha ?></span>

        <button type="submit"> Enviar Formulário </button>

      </form>
    </main>
</body>
</html>