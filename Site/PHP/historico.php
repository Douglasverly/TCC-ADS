<?php
session_start();
include('conexao.php');

$datainicio=$_POST['datainicio'];
$datafim=$_POST['datafim'];
$SQL="SELECT *FROM Historico WHERE dt_pedido between STR_TO_DATE('{$datainicio}','%Y-%m-%d') AND STR_TO_DATE ('{$datafim}','%Y-%m-%d')";
$resultado=mysqli_query($conexao,$SQL);

while($contar=mysqli_fetch_assoc($resultado)){

$testar="<div style='border-bottom:2px solid greenyellow;width:100%;height:20%;position:relative;display:inline-flex;justify-content:center;flex-direction:column;'>
    <label for='' style='color:black;position:absolute;left:10px;'>Nome:".$contar['descricao_item']."</label>
    <label for=''style='color:black;position:absolute;left:170px;'>Valor:".$contar['valor']."</label>
    <label for=''style='color:black;position:absolute;left:270px;'>Situação:".$contar['situacao_pedido']."</label>
    <label for=''style='color:black;position:absolute;left:450px;'>Data:".$contar['dt_pedido']."</label>
    <label for=''style='color:black;position:absolute;left:580px;'>N°Pedido:".$contar['id_pedido']."</label>

  </div>";

}



if(isset($datainicio)){
 header('Location:paineladm.php');
}




 ?>
