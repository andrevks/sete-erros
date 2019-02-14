//variaveis que guardará os erros que o usuario selecionar
let erro = " ";
let cont = 0;
let matriz = [];
let erros = [];
//erros = [
    //'4 5',
    //'4 13',
    //'9 2',
    //'11 10',
    //'11 5',
    //'7 9'
//];

function pegarId(id) {
    erro = id;
}

function inserirErro() {
    $('input[type=radio]').prop('checked', false);
    erros.push(erro);
    cont++;
    for (var i = 0; i < 7; i++) {
        console.log(erros[i]);
    }
}

function marcarErro() {  
    $('input[type=radio]').prop('checked', false);
    matriz.push(erro);

    for (var i = 0; i < 7; i++) {
        console.log(matriz[i]);
    }

    compararErros();
};

function compararErros() {
    let cont = 0;

    for (var i = 0; i < 7; i++) {
        console.log(erros[i]);
    }

    for(var i = 0; i < erros.lenght; i++) {
        for(var j = 0; j < erros.lenght; j++) {
            if(matriz[i] == erros[j]){
                cont++;
            }
        }
    }

    alert("Você acertou "+cont+" vezes");
}