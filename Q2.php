<?php
    $local = $_POST["local"];
    $arq = fopen("violencia-domestica-df.csv","r");
    $linha = fgetcsv($arq);
    echo "$local <br>";
    for($i = 1;$i<7;$i++){
        echo "$linha[$i]  ";
    }
    echo "<br>";
    while($local != $linha[0]){
        $linha = fgetcsv($arq);
    }
    for($i = 1;$i<7;$i++){
        echo "$linha[$i]  ";
    }

?>