<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Índice de Massa Corpórea (IMC)</title>
</head>
<body>
    <div class="painel">
        <h2>Resultado do cálculo de IMC</h2>
        <div class="conteudo-painel">
            <div class='sucesso'>
                <h3>SEU IMC: </h3>
                <ul>
                    <li><b>IMC:</b> {{$valor}}</li>
                </ul>
            </div>
            <a class="botao" href="{{URL('/')}}" title="voltar">Voltar</a>
        </div>
    </div>
</body>
</html>