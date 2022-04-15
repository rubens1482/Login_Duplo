<?php
	//require_once("config/session.php");
	
	
	
	// VARIAVEL DE SESSÃO DA CONTA
	
	
	
	
	
	/*
	$stmt = $auth_dados->Lquery("SELECT idlivro as livro FROM lc_movimento WHERE idconta=:idconta and month(datamov)=:mes_hoje and year(datamov)=:ano_hoje");
	$stmt->execute(array(":idconta"=>$contapd, ':mes_hoje'=> $mes_hoje, ':ano_hoje'=>$ano_hoje));
	
	$livroRow=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$livromes = $livroRow['livro'];
	
	
	$stmt = $auth_dados->Lquery("SELECT MAX(idlivro) FROM lc_movimento WHERE idconta=:idc");
	$stmt->execute(array(":idc"=>$idc));
	
	$livro_row=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$idlivro = $livro_row['idlivro'];
	
	
	*/
	/*
	if(){
		
	//$conta_livro = $contapd;
	
	$stmt = $auth_dados->Lquery("SELECT MAX(livro) FROM lc_movimento WHERE idconta=:contapd");
	$stmt->execute(array(":idconta"=>$contapd));
	
	$livro_conta=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$livroset = $livro_conta['livro'];	
	*/
?>