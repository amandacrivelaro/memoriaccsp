<?
@ini_set('display_errors', '1');
error_reporting(E_ALL); 
require "../funcoes/funcoesGerais.php"; //carrega as funcoes gerais


 ?>

<? include "cabecalho.php" ?>


		<div class="row">
<?
 
//include "../perfil/".$_SESSION['include'];
if(isset($_GET['perfil'])){
include "../perfil/".$_GET['perfil'].".php";	
	}else{
include "../perfil/inicio.php";
	}
?>
		</div>

<? include "rodape.php" ?>
