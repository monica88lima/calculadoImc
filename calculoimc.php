
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>

<h2>Calculadora de IMC</h2>
<form method="post" action="calculoimc.php">
    <label for="IMC">IMC: </label>
    <input type="text" name="IMC" required>
   
    <br>
    <input type="submit" name="Verificar" value="Calcular">
</form>

<?php

if (isset($_POST['IMC'])) {
    $imc = floatval($_POST['IMC']);
    
    ClassificaIMC($imc);
}


function ClassificaIMC($number){
    $imc = $number;

    $arrTabela = [ 
    
    $faixa1 =[
        'minimo' => 0,
        'maximo' => 18.5,
        'classificacao' => 'Magreza'
    ],
    $faixa2 =[
        'minimo' => 18.51,
        'maximo' => 24.9,
        'classificacao' => 'Saudável'
    ],
    $faixa3 =[
        'minimo' => 25.0,
        'maximo' => 29.9,
        'classificacao' => 'Sobrepeso'
    ],
    $faixa4 =[
        'minimo' => 30,
        'maximo' => 34.9,
        'classificacao' => 'Obesidade Grau I'
    ],
    $faixa5 =[
        'minimo' => 35,
        'maximo' => 39.9,
        'classificacao' => 'Obesidade Grau II'
    ],
    $faixa6 =[
        'minimo' => 40,
        'maximo' => 1000,
        'classificacao' => 'Obesidade Grau III'
    ]
    ];
    
    foreach($arrTabela as $item ){
        
       $minimo=$item['minimo']; 
       $maximo=$item['maximo']; 
       if($imc >= $minimo && $imc <=$maximo){
        $_imc=number_format($imc,2);
        echo "Atenção, seu IMC é {$_imc}, e você está classificado como {$item['classificacao']}.";
        return;
       }
    }
    
   
}



?>

</body>
</html>


     
         