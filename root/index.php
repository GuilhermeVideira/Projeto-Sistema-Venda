<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./imagens/Carrinho.png" type="image/x-icon"> 

    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/responsivo.css">
    <link rel="stylesheet" href="./calcular.php">

    <title> Sistema Caixa </title>

    <style type="text/css">
        .cinza{
            background-color: #2b80ff;
        }
        .texto01 {font-family: Forte; 
                color: #2b80ff;  
                font-size: 30px}       
         </style>

<style type="text/css">
    body {
        overflow-x: hidden;
    }
  </style>


</head>

<body style background="./imagens/ImagemFundo.jpg">

<body>
    <div class="container">

        <div class="form-image">
            <img src="./imagens/ImagemComercio.png" alt="Imagem de comércio">
        </div>

        <div class="form">

        <form action="calcular.php" method="post">

                <div class="form-header">
                    <div class="title">
                        <span class="texto01"> Sistema Caixa </span>
                    </div>

                    <div class="login-button">
                        <div class="input-group02">
                            <div class="input-box02">
                        <input type="number" name="ValorPago"placeholder="Digite o valor total pago" required>
                    </div>
                </div>
            </div>
        </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome do Cliente:</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome do cliente:</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Nome do produto:</label>
                        <input type="text" name="nomeProduto" placeholder="Digite o nome do produto" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Valor do produto:</label>
                        <input type="number" name="Valor01" placeholder="Digite o valor do produto" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Nome do produto:</label>
                        <input type="text" name="nomeProduto02" placeholder="Digite o nome do produto" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Valor do produto:</label>
                        <input type="number" name="Valor02" placeholder="Digite o valor do produto" required>
                    </div>
                  

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Forma de pagamento: </h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" name="debito">
                            <label>Débito</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" name="credito">
                            <label>Crédito</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" name="dinheiro">
                            <label>Dinheiro</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" name="outros">
                            <label>Outros</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="#">Realizar Venda</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>