//variavel que guardará os erros que o usuario selecionar
user_erro = " ";
matriz = [];

function pegarId(id){
    user_erro = id;
}

function clicarBox(){  
    $('input[type=checkbox]').prop('checked', false);
    matriz.push(user_erro);
};

console.log(matriz);

erros = [
    '3 6',
    '4 13',
    '9 2'
];

function compararErros() {

}