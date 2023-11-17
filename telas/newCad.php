<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cssCadastrar.css">
    <title>TELA CADASTRO</title>
</head>
<body>
<header>

      <div id="headerCima">
      <div class="logozada">
            <a href="http://"><img src="../img/LOGOFIMSEM-removebg-preview (1).png" alt=""></a>
        </div>
      </div>

      <div id="headerBaixo">
        <div id="rodape"></div>
      </div>

      <label for="">

      </label>
    </header>
     
<form action="" method="post">
  <div class="fundinho">
  <div>
    <label for="">Informações Pessoais</label>
  </div>
  <div class="inputBox nomeC">
    <input type="text" required="required">
    <span>Nome Completo</span>
  </div>
  <div class="inputBox cpf">
  <input type="text" id="RegraValida" value="" name="RegraValida" required="required" onkeydown="javascript: fMasc( this, mCPF );">   
    <span>CPF</span>
  </div>
  <div class="inputBox eEmail">
    <input type="email" required="required">
    <span>Endereço de E-mail</span>
  </div>
  <div class="inputBox dtNasc">
  <input onchange="validardataDeNascimento(this.value);" id="dataDeNascimento" type="date" required="required">
    <span>Data de Nascimento</span>
  </div>
  <div class="inputBox tel">
    <input type="text" required="required">
    <span>Telefone</span>
  </div>
  <div class="inputBox senha">
    <input type="password" required="required">
    <span>Senha</span>
  </div>
  <div>
    <label for="">Informações do Veículo</label>
  </div>
  </div>

  <script>
    function ValidaCPF(){	
	var RegraValida=document.getElementById("RegraValida").value; 
	var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;	 
	if (cpfValido.test(RegraValida) == true)	{ 
	console.log("CPF Válido");	
	} else	{	 
	console.log("CPF Inválido");	
	}
    }

  function fMasc(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("fMascEx()",1)
}

  function fMascEx() {
obj.value=masc(obj.value)
}

   function mCPF(cpf){
cpf=cpf.replace(/\D/g,"")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
return cpf
}
  </script>

<script>
        function validardataDeNascimento(data){

            dataAtual= new Date();

            data=new Date(data);

            if (data<dataAtual){
                console.log("Data Válida");
                return true;
            } else {
                console.log("Data Inválida");
                return false;
            }


        }
    </script>
</form>

  </div>
  </div>
</div>

</body>
</html>