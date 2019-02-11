//variaveis que guardará os erros que o usuario selecionar
user_erro = " ";
matriz = [];
erros = [
    '4 5',
    '4 13',
    '9 2',
    '11 10',
    '11 5',
    '7 9'
];

function pegarId(id){
    user_erro = id;
}

function clicarBox(){  
    $('input[type=radio]').prop('checked', false);
    matriz.push(user_erro);

    for (var i = 0; i < 7; i++){
        console.log(matriz[i]);
    }

    compararErros();
};

function compararErros() {
    let cont = 0;

    for(var i = 0; i < 6; i++) {
        for(var j = 0; j < 6; j++) {
            if(matriz[i] == erros[j]){
                cont++;
            }
        }
    }

    alert("Você acertou "+cont+" vezes");
}