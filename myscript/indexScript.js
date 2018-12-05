function verifica() {

    if(document.form.nome.value==""){
        alert("Por favor preencha o campo com o seu nome completo.");
        document.form.nome.focus();
        return false;
    }
    
    }