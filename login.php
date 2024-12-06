<?php 
  session_start();

  // Verifica se o formulário foi enviado via POST
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Verifica se todos os campos obrigatórios estão preenchidos
    if (!empty($_POST['usuario']) && !empty($_POST['password']) && isset($_POST['tema'])) {
      // Atribui os dados do formulário a variáveis, após garantir que não estão vazios
      $usuario = ($_POST['usuario']);
      $senha = ($_POST['password']);
      $tema = $_POST['tema']; // Tema preferido

      // Usuário e senha válidos
      $usuarioValido = "admin";
      $senhaValida = "root";

      // Valida os dados e os armazena nos devidos lugares
      if ($usuario == $usuarioValido && $senha == $senhaValida) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        // Faz a atribuição do tema escolhido
        setcookie("tema", $tema, time() + 86400 * 30, '/');

        // Redireciona para a página de boas-vindas
        header("Location: welcome.php");
        exit;
      } else {
        // Caso usuário ou senha sejam inválidos
        echo "Usuário ou senha inválidos";
      }
    } else {
      // Caso algum campo não tenha sido preenchido
      echo "Preencha todos os campos";
    }
  }
?>
