document.getElementById('atualizarVisual').addEventListener('click', function () {
    atualizaçaoForm.style.display = 'block';
});

document.getElementById('atualizar').addEventListener('click', function () {
    alert('Você confirma a adição dessas informações ao protocolo?')
});

document.getElementById('erroConexao').addEventListener('click', function () {
    alert('O N° de protocolo e/ou a senha não correspondem.')
});

function geraSenha() {
    var caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ!@#$%^&*()+?><:{}[]";
    var tamanhoSenha = 12;
    var senha = "";

    for (var i = 0; i < tamanhoSenha; i++) {
        var numeroAleatorio = Math.floor(Math.random() * caracteres.length);
        senha += caracteres.substring(numeroAleatorio, numeroAleatorio + 1);
    }
    document.getElementById('senha').value = senha
}