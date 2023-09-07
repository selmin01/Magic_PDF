<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exemplo de PDF</title>
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <style>
        /* Estilos CSS para o PDF ... */
        .test{
            color: #7b00ff;
        }
        .minha-div {
            margin: 20px; /* Margens em todos os lados (topo, direita, baixo, esquerda) de 20 pixels */
            padding: 10px; /* Preenchimento em todos os lados de 10 pixels */
            background-color: #f0f0f0; /* Cor de fundo para destacar a div */
        }
        .minha-classe-de-paragrafo {
            margin-top: 10px; /* Margem superior de 10 pixels para o parágrafo */
            margin-bottom: 10px; /* Margem inferior de 10 pixels para o parágrafo */
            margin-left: 5px; /* Margem esquerda de 5 pixels para o parágrafo */
            margin-right: 5px; /* Margem direita de 5 pixels para o parágrafo */
        }
    </style>
</head>
<body>
    <div class="container test">
        <h1>Exemplo de PDF com Blade</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>

    <div class="minha-div">
        <p class="minha-classe-de-paragrafo">Este é um parágrafo com margens.</p>
    </div>

</body>
</html>
