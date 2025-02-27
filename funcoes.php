<?php
    $num1 = 0; //Instanciar uma variável
    $num2 = 0;
    
    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do método

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do método
    
    function dividir($num1, $num2){
        if($num2 <= 0){
            return "Impossível dividir por zero!";
        }else{
            return $num1/$num2;
        }
    }//fim do método

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do método
 
    function exercicio02($num1, $num2){
        if(($num1 >= 0 && $num1 <= 10) && ($num2 >= 0 && $num2 <= 10))
        {
            return "A média é: ".($num1+$num2)/2;
        }else{
            return "Informe notas entre 0 e 10!";
        }
    }//fim do método

    function exercicio03($num1, $num2){
       
        if ($num1 > $num2){
            return "O maior número é: ".$num1;
        }else if($num1 == $num2){
            return "Numeros iguais";
        }else{
            return "O maior número é: ". $num2;
        }
    }//fim do método

    function exercicio04($nota1, $nota2, $nota3) {
        if (($nota1 < 0 || $nota1 > 10) || ($nota2 < 0 || $nota2 > 10) || ($nota3 < 0 || $nota3 > 10)) {
            return "Informe notas entre 0 e 10!";
        }
    
        $media = ($nota1 + $nota2 + $nota3) / 3;
        $resultado = "Média: " . number_format($media, 2) . "\n";
    
        if ($media < 5) {
            $notaNecessaria = 10 - $media + 2;
            $resultado .= "Situação: Aluno em recuperação\n";
            $resultado .= "Nota necessária para passar: " . number_format($notaNecessaria, 2);
        } elseif ($media < 7) {
            $notaNecessaria = 10 - $media;
            $resultado .= "Situação: Aluno em prova final\n";
            $resultado .= "Nota necessária na prova final: " . number_format($notaNecessaria, 2);
        } else {
            $resultado .= "Situação: Aluno aprovado por média.";
        }
    
        return $resultado;
    }
    //fim do método
    function exercicio05($cor) {
        switch ($cor) {
            case 'verde':
                return "O preço do CD Verde é: R$10,00";
            case 'azul':
                return "O preço do CD Azul é: R$20,00";
            case 'amarelo':
                return "O preço do CD Amarelo é: R$30,00";
            case 'vermelho':
                return "O preço do CD Vermelho é: R$40,00";
            default:
                return "Cor inválida.";
        }
    }

    function exercicio06($num) {
        return "O antecessor de $num é: " . ($num - 1);
    }

    function exercicio08($brancos, $validos, $nulos, $eleitores){
        if (($brancos + $validos + $nulos) == $eleitores){
            $pbrancos = porcentagem($brancos,$eleitores);
            $pvalidos = porcentagem($validos,$eleitores);
            $pnulos = porcentagem($nulos,$eleitores);
            return "votos brancos: $pbrancos%\n
                    votos nulos: $pnulos%\n
                    votos validos: $pvalidos%";
        }else{
            return "total de eleitores é diferente do total";
        }
    }  //fim do método

    function porcentagem($total,$eleitores){
        return($total * 100)/$eleitores;
    } //fim do método
 
?>

