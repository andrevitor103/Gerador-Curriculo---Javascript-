
<html lang="pt-BR">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/estiloPrint.css" media="print">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<head>
	<title> Curriculo </title>
</head>
<div class="botoes">
<button id="acaoImprimir" class="btn btn-success" onclick="imprimir()" >Pronto para impressão</button>
</div>
<header>
	
</header>
<body>

<form>
	<div class="info-foto" id="info-fotoPerfil">
		<img id="fotoPerfil" src="foto.png">
		<input id="checkFoto" type="checkbox" onclick="semFoto()">
	</div>

	<div class="info-principal">
	<div class="info-principal-nome">
	<b id="nome">Nome da pessoa</b> <input class="info" onblur="alterarInformações('nome')" type="text" id="nomeNovo">
	</div>
	<div class="info-principal-contato">
	<b id="infoPessoais">Pais, estado civil, idade</b> <input class="info" onblur="alterarInformações('infoPessoais')" type="text" id="infoPessoaisNova"><br>
	<b id="endereco">Endereço - Rua endereço</b> <input class="info" onblur="alterarInformações('endereco')" type="text" id="enderecoNovo"><br>
	<b>Nome da pessoa</b><br>
	<b id="infoContato">Telefone / email</b> <input class="info" onblur="alterarInformações('infoContato')" type="text" id="infoContatoNovo"><br>
	</div>
	</div>

	<div class="info-objetivo">
		<span>01 - OBJETIVO</span>
		<hr>
		<h5 id="infoObjetivo">
			Meu objetivo e criar uma ferramenta que gere curriculos de forma automática para pessoas que tenham dificuldades em faze-los...
		</h5> <textarea class="info" onblur="alterarInformações('infoObjetivo')" id="infoObjetivoNovo" cols="80" rows="10"></textarea>
	</div>

	<div class="info-formacao">

		<span>02 - FORMAÇÃO</span>
		<hr>
		<span id="spanFormacao"><input type="text" style="width: 32%;" name="formacao" id="formacao" placeholder="Faculdade Santana - Período tal a tal..."> <span><i id="addFormacao" style="font-size: 22px;color:green;cursor: pointer;" onclick="listaFormacao()" class="fas fa-plus-square"></i></span><br><br></span>
		<ul id="info-formacao">

		</ul>
	</div>

	<div class="info-experiencias">
		<span>03 - EXPERIÊNCIAS PROFISSIONAIS</span>
		<hr>
		<ul>
			<span id="spanExperiencia"><input type="text" name="experiencia" id="experiencia" placeholder="Mercado x..."> <span><i id="addExperiencia" style="font-size: 22px;color:green;cursor: pointer;" onclick="listaExperiencia()" class="fas fa-plus-square"></i></span><br><br></span>
			<div id="info-experiencias">
				<span id="spanDetalheExperiencia"><input type="text" name="detalheExperiencia" id="detalheExperiencia" placeholder="Cargo: Aux caixa"> <span><i id="addExperiencia" style="font-size: 22px;color:green;cursor: pointer;" onclick="listaExperienciaDetalhe()" class="fas fa-plus-square"></i></span><br><br></span>
			</div>
		</ul>
	</div>

	<div class="info-complementares">
		<span>04 - ATIVIDADES COMPLEMENTARES</span>
		<hr>
		<span id="spanComplementar"><input type="text" name="complementar" id="complementar" placeholder="Curso de inglês..."> <span><i id="addComplementar" style="font-size: 22px;color:green;cursor: pointer;" onclick="listaComplemento()" class="fas fa-plus-square"></i></span><br><br></span>
		<ul id="info-complementares">

		</ul>
	</div>

		<div class="info-referencias">
		<span>05 - REFERÊNCIAS PESSOAIS</span>
		<hr>
		<span id="spanReferencia"><input type="text" style="width: 32%;" name="referencia" id="referencia" placeholder="Empresa tal, telefone 429999999, pessoa tal..."> <span><i id="addReferencia" style="font-size: 22px;color:green;cursor: pointer;" onclick="listaReferencia()" class="fas fa-plus-square"></i></span><br><br></span>
		<ul id="info-referencias">

		</ul>

	</div>

</form>

	
</body>

<footer>
	
</footer>


<script type="text/javascript">

	function alterarInformações(id){
		console.log(id);
		switch(id) {
			case 'nome':
				document.getElementById("nome").innerText = document.getElementById("nomeNovo").value;
				break;
			case 'infoPessoais':
				document.getElementById("infoPessoais").innerText = document.getElementById("infoPessoaisNova").value;
				break;
			case 'endereco':
				document.getElementById("endereco").innerText = document.getElementById("enderecoNovo").value;
				break;
			case 'infoContato':
				document.getElementById("infoContato").innerText = document.getElementById("infoContatoNovo").value;
				break; 
			case 'infoObjetivo':
			document.getElementById("infoObjetivo").innerText = document.getElementById("infoObjetivoNovo").value;
			break;
		}
	}

	function imprimir(){
		window.print();
	}


	function semFoto(){
		var check = document.getElementById("fotoPerfil");
		if(checkFoto.checked){
			document.getElementById("fotoPerfil").style.display = 'none';	
		}else{
			document.getElementById("fotoPerfil").style.display = 'block';
		}
		
	}

 	function listaFormacao(){
		var btn = document.createElement("li");
  		btn.innerHTML = document.getElementById("formacao").value;
  		document.getElementById("info-formacao").appendChild(btn);
  		document.getElementById("formacao").value = "";
	}

	function listaComplemento(){
		var btn = document.createElement("li");
  		btn.innerHTML = document.getElementById("complementar").value;
  		btn.id = "listaComplementoItem" + this.cont++;
  		document.getElementById("info-complementares").appendChild(btn);
  		document.getElementById("complementar").value = "";

  		var btnListaComplemento = document.createElement("i");
  		btnListaComplemento.id = "btnListaComplemento" + (this.cont);
  		document.getElementById(btn.id).appendChild(btnListaComplemento);
  		document.getElementById(btnListaComplemento.id).classList.add("fa", "fa-minus-circle");
  		btnListaComplemento.style.cursor = "pointer";
  		btnListaComplemento.style.color = "red";
  		criarAcaoRemoverItem(btnListaComplemento.id, btn.id);
	}

	function listaReferencia(){
		var btnRef = document.createElement("li");
  		btnRef.innerHTML = document.getElementById("referencia").value;
  		btnRef.id = "listaReferenciaItem" + this.cont++;
  		document.getElementById("info-referencias").appendChild(btnRef);
  		document.getElementById("referencia").value = "";

  		var btnListaReferencia = document.createElement("i");
  		btnListaReferencia.id = "btnListaReferencia" + (this.cont);
  		document.getElementById(btnRef.id).appendChild(btnListaReferencia);
  		document.getElementById(btnListaReferencia.id).classList.add("fa", "fa-minus-circle");
  		btnListaReferencia.style.cursor = "pointer";
  		btnListaReferencia.style.color = "red";
  		criarAcaoRemoverItem(btnListaReferencia.id, btnRef.id);


	}

	function listaExperiencia(){
		contadorExperiecia();
		var li = document.createElement("li");
  		li.innerHTML = document.getElementById("experiencia").value;
  		document.getElementById("info-experiencias").appendChild(li);
  		li.id = "exp" + this.cont;
  		console.log(li);
  		document.getElementById("experiencia").value = "";

  		var btnLista = document.createElement("i");
  		btnLista.id = "btnLista" + (this.cont);
  		document.getElementById("exp"+this.cont).appendChild(btnLista);
  		document.getElementById(btnLista.id).classList.add("fa", "fa-minus-circle");
  		btnLista.style.cursor = "pointer";
  		btnLista.style.color = "red";
  		criarAcaoRemoverItem(btnLista.id, li.id);
	}

	function listaExperienciaDetalhe(){
		contadorExperieciaItens();
  		var ul = document.createElement("ul");
  		ul.id = "ul" + this.cont;
  		document.getElementById("exp"+this.cont).appendChild(ul);
  	

  		var liInfo = document.createElement("li");
  		liInfo.innerHTML = document.getElementById("detalheExperiencia").value;
  		liInfo.id = "info" + (this.contItens);
  		document.getElementById("ul" + this.cont).appendChild(liInfo);
  		document.getElementById("detalheExperiencia").value = "";

  		var btnItens = document.createElement("i");
  		btnItens.id = "btn" + (this.contItens);
  		document.getElementById(liInfo.id).appendChild(btnItens);
  		document.getElementById(btnItens.id).classList.add("fa", "fa-minus-circle");
  		btnItens.style.cursor = "pointer";
  		btnItens.style.color = "red";
  		criarAcaoRemoverItem(btnItens.id, liInfo.id);

	}

	var cont = 0;
	var contItens = 0;

	function contadorExperiecia(){
		this.cont++;
	}

	function contadorExperieciaItens(){
		this.contItens++;
	}


	function criarAcaoRemoverItem(item, itemRemover){
		document.getElementById(item).addEventListener("click", function(){ console.log(document.getElementById(itemRemover).remove()); });
	}


</script>



</html>

