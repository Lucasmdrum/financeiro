<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciador de Anúncios - Registrar Usuário</title>
  <style>
    /* Reset de estilos básicos */
    body, h1, h2, p, input, button, a {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    /* Estilos globais */
    body {
      background-color: #f0f0f0;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Estilos específicos para a página de registro */
    .register-page {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }

    .register-form h2 {
      margin-bottom: 10px;
    }

    .register-form input {
      width: 100%;
      margin: 8px 0;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .register-form button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .register-form button:hover {
      background-color: #0056b3;
    }

    .register-form a {
      display: block;
      margin-top: 10px;
      color: #007bff;
      text-decoration: none;
    }

    /* Estilos responsivos */
    @media screen and (max-width: 768px) {
      .container {
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <main class="register-page">
    <form class="register-form" action="data.php" method="post">
      <h2>Registrar Usuário</h2>
      <input type="text" placeholder="Nome">
      <input type="email" placeholder="Email">
      <input type="password" placeholder="Senha">
      <button type="submit">Registrar</button>
    </form>
    <a href="index.php">Voltar para o Login</a>
  </main>
</body>
</html>
