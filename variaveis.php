<?php 
    $produtosVestuario = "produtosVestuario.json";
    $produtos = json_decode(file_get_contents($produtosVestuario),true);

    $categVestuario = ["Camisetas" , "Calças" , "Bones", "Ôculos"];