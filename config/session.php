<?php
	session_start();
	
	require_once 'class/class.user.php';
	$userlogado = new USER();
	
	// if user session is not active(not loggedin) this page will help 'home.php and profile.php' to redirect to login page
	// put this file within secured pages that users (users can't access without login)
	
	if(!$userlogado->is_loggedin())
	{
		// session no set redirects to login page
		
		$userlogado->redirect('login.php');
	} else {
		// VARIAVEL DE SESSÃO DO USUARIO
		//$auth_user = new USER();
		$user_id = $_SESSION['user_session'];
		
		$stmt = $userlogado->runQuery("SELECT * FROM users WHERE user_id=:user_id");
		$stmt->execute(array(":user_id"=>$user_id));
		// $UserRow: variavel utilizada para trazer os dados do usuario logado e mostrado na navbar
		$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

		// retornar os dados da conta
		
		$account = $_SESSION['account_session'];
		require_once 'class/class.account.php';
		$auth_account = new ACCOUNT();
		$stmt = $auth_account->SqlQuery("SELECT * FROM lc_contass WHERE conta=:conta");
		$stmt->execute(array(":conta"=>$account));
		
		$accountRow=$stmt->fetch(PDO::FETCH_ASSOC);
		
		$contapd = $accountRow['idconta'];
		$name = $accountRow['proprietario'];
	}
	/*
	
	$contalogada = new ACCOUNT();
	
	// if user session is not active(not loggedin) this page will help 'home.php and profile.php' to redirect to login page
	// put this file within secured pages that users (users can't access without login)
	
	if(!$contalogada->is_loggedin_c())
	{
		// session no set redirects to login page
		$contalogada->redirect('login_c.php');
	} else {
		
	
		$account_id = $_SESSION['account_session'];
		
		
	}
	*/
	require_once 'class/class.lancamentos.php';
	$session = new MOVS();
	
	$auth_dados = new MOVS();
	//$account_idlivro = $contapd;
	
	$stmt = $auth_dados->Lquery("SELECT MAX(idlivro) as MaxL FROM lc_movimento WHERE idconta=:idconta");
	$stmt->execute(array(":idconta"=>$contapd));
	
	$livroRow=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$livro = $livroRow['MaxL'];
	
	
?>