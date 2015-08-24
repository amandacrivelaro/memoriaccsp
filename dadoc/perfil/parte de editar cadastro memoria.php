<!-- parte de edição de cadastro mas n funciona -->



<?php
	if(isset($_POST['recupera']))  //se existe o id do cadastro a recuperar
	{ 
		$campo = recuperaCadastro($_POST['recupera']);
		$editar = 1;
	}
?>

<?php
	if(isset($_GET['recupera']))   //se existe o id do cadastro a recuperar
	{ 
		$campo = recuperaCadastro($_GET['recupera']);
		$editar = 1;
	}
?>

<?php
	if(isset($_POST['editar']))
	{
		$idRegistro = $_POST['idRegistro'];
		$idAbordagem = $_POST['idAbordagem'];
		$idArea = $_POST['idArea'];	
		$atividade = $_POST['atividade'];	
		$dataInicio = $_POST["Y-m-d"];	
		$dataFim = $_POST["Y-m-d"];
		$idLocal = $_POST['idLocal'];
		$idResponsavel = $_POST['idResponsavel'];
		$idResponsabilidade = $_POST['idResponsabilidade'];
		$descricao = $_POST ['descricao'];
		$idNotacao = $_POST ['idNotacao'];
		$idTipo = $_POST ['idTipo'];
		$idTecnica = $_POST ['idTecnica'];
		$idSuporte = $_POST ['idSuporte'];
		$idFormato = $_POST ['idFormato'];
		$dataComeco = $_POST ["Y-m-d"];
		$dataFinal = $_POST ["Y-m-d"];
		$idMedicao = $_POST ['idMedicao'];
		$idUrl = $_POST ['idUrl'];
		$descritor = $_POST ['descrito'];
		$acesso = $_POST ['acesso'];
		$conservacao = $_POST ['conservacao'];
		$historico = $_POST ['historico'];
		
		$sql_atualizar_cadastro = "UPDATE mem_contexto SET
			idRegistro = '$idRegistro',
			idAbordagem = '$idAbordagem',
			empresa = '$empresa',
			idArea = '$idArea',
			atividade = '$atividade',
			dataInicio = '$date',
			dataFim = '$date',
			idLocal = '$idLocal',
			idResponsavel = '$idResponsavel',
			idResponsabilidade = '$idResponsabilidade',
			descricao = '$descricao', 
			idNotacao = '$idNotacao',
			idTipo = '$idTipo',
			idTecnica = '$idTecnica',
			idSuporte = '$idSuporte',
			idFormato = '$idFormato',
			dataComeco = '$date',
			dataFinal = '$date',
			idMedicao = '$idMedicao',
			idUrl = '$idUrl',
			descritor = '$descritor', 
			acesso = '$acesso',
			conservacao = '$conservacao',
			historico = '$historico'
			WHERE idRegistro = '$idRegistro'
			";	
			
	if(mysql_query($sql_atualizar_jornalista))
		{ //verifica se a query funcionou, caso sim, imprime a mensage.
			 $mensagem =  "Atualizado com Sucesso! <a href='?perfil=memoria&p=pesquisar'> Voltar a pesquisa.</a><br />";	
		//	 gravarLog($sql_atualizar_jornalista);
			
		}
	else
		{ // caso não, imprime a mensagem.
			$mensagem = "Erro ao atualizar. Tente novamente.";		
		}	
			$campo = recuperaCadastro($idRegistro);
			$editar = $idCadastro;
	}
	
	
	
	
			//função para verificar se os campos estão em branco 

	
	
	
	
	if(isset($_POST['cadastrar']))
		{ // existe pedido de cadastro
			$campo = recuperaCadastro(0); // funcao para zerar todos os campos, sempre deixar registro do banco zerado se não dá merda 
			$idAbordagem = $_POST['idAbordagem'];     // campos de exemplo, tem que modificar quando o pessoal memoria mandar o que não pode ficar em branco 
			$idArea = $_POST['idArea'];
			$atividade = $_POST['atividade'];  
			
		if (($idAbordagem == '') OR ($idArea == '') OR ($atividade == ''))
			{
				$mensagem = "Os campos nome, lalala tem que modificar (ão) em branco e é(são) obrigatório(s). <a href='?perfil=memoria&p=inserir'>Tente novamente.</a>";  
			}