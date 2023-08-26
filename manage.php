<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Gerenciador de Anúncios - Gerenciar Dados</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="dashboard.php">Painel</a></li>
        <li><a href="data.php">Ver Dados</a></li>
        <li><a href="manage.php">Gerenciar Dados</a></li>
      </ul>
    </nav>
  </header>
  <main class="manage-page">
    <h2>Gerenciar Dados</h2>
    <section class="add-data">
      <h3>Adicionar Novo Anúncio</h3>
      <form>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">

        <br>

        <br>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea>

        <br> <br>


        
        <button type="submit">Adicionar Anúncio</button>
      </form>
    </section>
    <section class="existing-data">
      <h3>Anúncios Existente</h3>
      <ul>
        <li>
          <strong>Anúncio 1</strong>
          <p>Descrição do anúncio 1</p>
          <button>Editar</button>
          <button>Excluir</button>
        </li>
        <!-- Repita para outros anúncios -->
      </ul>
    </section>
  </main>
</body>
</html>
