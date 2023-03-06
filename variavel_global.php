<?php 
   $ano = 2020;

   function exibir(){
   	global $ano;
   	$ano++;
   	return $ano;
   }
   
      echo "<br/> Ano:".$ano;
      echo "<br/> Ano:".exibir();	 
      echo "<br/> Ano:".exibir();	 
      echo "<br/> Ano:".$ano;	 	  
?>