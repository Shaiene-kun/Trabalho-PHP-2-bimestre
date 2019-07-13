<?php
    $ano = $_GET["ano"];
    $arq = fopen("violencia-domestica-df.csv","r");
    $linha = fgetcsv($arq);
    echo "$linha[0] $ano <br>";
    $dig = $ano%10;
    while($arq){
        $linha = fgetcsv($arq);
        echo $linha[0]." ".$linha[$dig]."<br>";
    }
    fclose($arq);

?>