<?php
session_start();
require_once("class/class.account.php");
$login_c = new ACCOUNT();

if($login_c->is_loggedin_c()!="")
{
	$login_c->redirect('index.php');
}

if(isset($_POST['btn-login']))
{
	$account = strip_tags($_POST['txt_account_email']);
			
	if($login_c->dados_conta($account))
	{
		$sql = $login_c->SqlQuery("SELECT * from lc_contass WHERE conta=:account");
		$sql->execute(array(":account"=>$account));
		$dados=$sql->fetch(PDO::FETCH_ASSOC);
		if($sql->rowCount() == 1) {
			$_SESSION['account_session'] = $dados['conta'];
			$_SESSION['account_id'] = $dados['idconta'];
			$login_c->redirect('index.php');	
		} else {
			$status = "Conta inexistente!";
		}
	}
	else
	{
		$status = "Conta inexistente!";
	}	
}
?>