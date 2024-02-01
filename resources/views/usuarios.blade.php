<!DOCTYPE html>
<title>Site de Recebimento de consulta</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  body {
    font-family: "Times New Roman", Georgia, Serif;
  }
</style>
</head>

<body>

  <div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
      <div class="w3-right w3-hide-small">
        <a href="#login" class="w3-bar-item w3-button">Login</a>
        <a href="#cadastro" class="w3-bar-item w3-button">Cadastro</a>
        <a href="#contatos" class="w3-bar-item w3-button">Contatos</a>
      </div>
    </div>
  </div>

  <div class="w3-container w3-padding-64" id="Cadastro">
    <form action="/cadastro" target="_blank" method="POST">
      <table>
        <tr>
          @csrf
          <p><input type="text" placeholder="Name" name="nome"></p>
          <p><input type="number" placeholder="CPF" name="CPF"></p>
          <p><input type="date" placeholder="Date de nascimento" name="data" value="2001-01-01"></p>
          <p><input type="radio" name="sexo" value="masculino" checked> Masculino
          <p><input type="radio" name="sexo" value="feminino"> Feminino
          <p><input type="number" placeholder="Telefone" name="Telefone"></p>
          <p><input type="number" placeholder="Senha" name="Senha"></p>
          </p>
          <p><button class="w2-button w2-light-grey w2-section" type="submit">Registrar</button></p>
        </tr>
      </table>
    </form>

  </div>

  </html>