<?php
//Variáveis
$tempAtual = $_POST['temp']; 
$umidAtual = $_POST['umid']; 

//Função para verificar a temperatura
function funcTemp($tempAtual){
    if($tempAtual <=15){
        return "°G está abaixo do padrão ideal.";
    }elseif ($tempAtual >= 18){
         if ($tempAtual <= 27){
             return "°G está dentro do intervalo aceitável.";
         }
    }
    if ($tempAtual >= 29){
        return "°G está acima da temperatura aceitável. Risco de superaquecimento.";
    }
    
}

//Função para verificar a umidade
function funcUmid($umidAtual){
    if ($umidAtual <= 35){
        return "%  está abaixo do recomendado, com risco de descargas eletro estáticas";
    }elseif ($umidAtual >= 40){
         if ($umidAtual <= 60){
             return "%  está dentro do recomendado";
         }
    }
    if ($umidAtual >= 62){
        return "%  está acima do aceitável. Risco de alto condensação";
    }
}

//resultado da temperatura e umidade
$resultadoTemp = funcTemp($tempAtual); 
echo "A temperatura $tempAtual $resultadoTemp"; 

$resultadoUmid = funcUmid($umidAtual);
echo "A umidade $umidAtual $resultadoUmid";
?>