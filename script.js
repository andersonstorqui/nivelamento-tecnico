function validarForm() {
  // pegar referências aos campos do formulário
  var nome = document.getElementById('nome').value;
  var telefone = document.getElementById('telefone').value;
  var email = document.getElementById('email').value;
  var assunto = document.getElementById('assunto').value;
  var mensagem = document.getElementById('mensagem').value;

  // verificar se os campos estão preenchidos corretamente
  if (nome == '' || email == '' || telefone == '' || assunto == '' || mensagem == '') {
    alert('Por favor, preencha todos os campos.');
    return false;
  }

  return true;
}

const telefoneInput = document.getElementById('telefone');

telefoneInput.addEventListener('input', function (event) {
  const telefone = event.target.value.replace(/\D/g, '').substring(0, 11);
  const isCelular = telefone.length === 11 && parseInt(telefone.charAt(2)) > 6;

  let formattedTelefone;

  if (!isCelular) {
    formattedTelefone = telefone.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
  } else {
    formattedTelefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
  }

  event.target.value = formattedTelefone;
});

const form = document.getElementById('#myform');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const formData = new FormData(form);

  fetch('insereBanco.php', {
    method: 'POST',
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(data);
      alert('Salvo com sucesso!');
    })
    .catch((error) => {
      console.error(error);
      alert('Não foi possível salvar seus dados!');
    });
});
