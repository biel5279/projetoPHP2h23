<?php 
  function exibir(){
  	static $ano;
  	$ano++;
  	echo"<br/>". $ano;

 }  	
  echo exibir(); 
  echo exibir(); 
  echo exibir(); 
  

 echo "<br/> Ola seja bem vindo". $_SERVER['REMOTE_ADDR']."<br/>";
 echo "voce esta utilizando o navegador: ".$_SERVER['HTTP_USER_AGENT'];

?>