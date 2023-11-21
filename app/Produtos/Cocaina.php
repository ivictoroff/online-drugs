 <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cocaína</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 1em;
    }

    main {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    h1 {
      color: #333;
    }

    p {
      color: #555;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #45a049;
    }
    .popup{
    position: fixed;
    top: 0; bottom: 0; 
    left: 0; right:0;
    margin: auto;
    width: 650px;
    height:580px;
    padding: 15px;
    border: solid 1px #ffffff;
    background-image: url("/public/img/obsss.png");
    background-size:cover;
    background-repeat:no-repeat;
    display: none;
    text-align: center;
    position: fixed;
    }
    .back{
      text-align: center ;
      position: absolute;
      top: 97%;
      right: 43,5%;
      }
  </style>
  <script type="text/javascript">
    function abrir(){
      document.getElementById('popup').style.display = 'block';
    }
    function fechar(){
      document.getElementById('popup').style.display =  'none';
    }
  </script>
</head>
<body>
  <div id="popup" class="popup">
   <div class="back"> <a style="color:#ffffff; position: relative; text-bottom;" href="javascript: fechar();"> Voltar ao site </a></div>
  </div>

<header>
  <h1>Cocaína</h1>
</header>

<main>
  <img src="/public/img/cocaina.png" alt="ERRO">
  <h1>Cocaína</h1>
  <p>A melhor carreira vai ser essa! Mas se prepara que depois vai ter que ser da policia.</p>
  <p>Preço: R$ 40,00(g)</p>
  
    <button type="submit">  </i>
    <a style="color:#ffffff;" href="javascript: abrir();"> Confirmar compra</a><br>
    </button>
  </a>
</main>

</body>
</html>
