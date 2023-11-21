<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Online Drugs - Pedido </title>
    <style>
      .popup{
        position: fixed;
        top: 0; bottom: 0; 
        left: 0; right:0;
        margin: auto;
        width: 300px;
        height: 180px;
        padding: 15px;
        border: solid 1px #000000;
        background: #ffffff;
        display: none;
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
      <p>A propria e melhor de todas as vendas no mercado.</p>
      <a href="javascript: fechar();"> Continuar comprando
    </div>

    <!--ações para o popup -->
    <a href="javascript: abrir();">Comprar</a><br>
    <a href="javascript: fechar();">Fechar Pop-up</a><br>

    <a href="#" onMouseOver="abrir();">Passar o mouse para abrir</a><br>
    <a href="#" onMouseOver="fechar();">Passar o mouse para fechar</a>
  </body>	
  
</html>