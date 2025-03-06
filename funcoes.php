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


        // Função que calcula a área do retângulo
        function exercicio07($base, $altura) {
        // Calculando a área
        $area = $base * $altura;
        // Retorna o resultado formatado
        return "<div class='mt-3 alert alert-success'>
                <strong>Resultados:</strong><br>
                Base: $base<br>
                Altura: $altura<br>
                Área do Retângulo: " . number_format($area, 2, ',', '.') . " m²
            </div>";
    }

    function exercicio08($brancos, $validos, $nulos, $eleitores) {
        if (($brancos + $validos + $nulos) == $eleitores) {
            $pbrancos = porcentagem($brancos, $eleitores);
            $pvalidos = porcentagem($validos, $eleitores);
            $pnulos = porcentagem($nulos, $eleitores);
    
            return "Votos brancos: $pbrancos%<br>
                    Votos nulos: $pnulos%<br>
                    Votos válidos: $pvalidos%";
        } else {
            return "Erro: O total de votos não bate com o total de eleitores.";
        }
    }

    
    function calcularReajuste($salario, $percentual) {
        return $salario + ($salario * ($percentual / 100));
    }

    // Função que calcula o novo salário com reajuste
    function exercicio9($salario, $percentual) {
        if ($salario > 0 && $percentual > 0) {
            // Calcula o novo salário
            $novoSalario = calcularReajuste($salario, $percentual);
    
            // Retorna o resultado formatado em HTML
            return "<div class='mt-3 alert alert-success'>
                        <strong>Resultados:</strong><br>
                        Salário Atual: R$ " . number_format($salario, 2, ',', '.') . "<br>
                        Percentual de Reajuste: $percentual%<br>
                        Novo Salário: R$ " . number_format($novoSalario, 2, ',', '.') . "
                    </div>";
        } else {
            // Caso o salário ou percentual sejam inválidos
            return "<div class='mt-3 alert alert-danger'>Erro: Insira valores válidos!</div>";
        }
    }
    

    // Função que calcula o custo final do carro
    function exercicio10($custoFabrica) {
        $percentualDistribuidor = 28; // Percentual do distribuidor
        $percentualImpostos = 45; // Percentual dos impostos

        // Calculando o custo do distribuidor e dos impostos
        $custoDistribuidor = ($custoFabrica * $percentualDistribuidor) / 100;
        $custoImpostos = ($custoFabrica * $percentualImpostos) / 100;

        // Calculando o custo final
        $custoFinal = $custoFabrica + $custoDistribuidor + $custoImpostos;

        return "Custo de Fábrica: R$ " . number_format($custoFabrica, 2, ',', '.') . "<br>" .
               "Custo do Distribuidor: R$ " . number_format($custoDistribuidor, 2, ',', '.') . "<br>" .
               "Custo dos Impostos: R$ " . number_format($custoImpostos, 2, ',', '.') . "<br>" .
               "Custo Final ao Consumidor: R$ " . number_format($custoFinal, 2, ',', '.');
    }

    function exercicio11($numeroCarros, $valorVendas, $salarioFixo, $comissaoPorCarro) {
    $comissaoTotal = $numeroCarros * $comissaoPorCarro;
    $percentualVendas = $valorVendas * 0.05;
    $salarioFinal = $salarioFixo + $comissaoTotal + $percentualVendas;
    return "Salário Final: R$ " . number_format($salarioFinal, 2, ',', '.');
    }

    // Função para calcular a idade em dias
    function exercicio12($anos, $meses, $dias) {
        $totalDias = ($anos * 365) + ($meses * 30) + $dias;
        return "A idade em dias é: " . number_format($totalDias, 0, ',', '.');
    }

// Função para calcular o custo das maçãs

            function exercicio13($numeroMacas) {
    // Definindo o preço por maçã (por exemplo, R$ 1,00 por maçã)
    $precoPorMaca = 1.00;

    // Calculando o custo total das maçãs
    $custoTotal = $numeroMacas * $precoPorMaca;

    
    if ($numeroMacas > 10) {
        $desconto = 0.10; // Desconto de 10%
        $custoTotal -= $custoTotal * $desconto;
    } else {
        $desconto = 0; // Sem desconto
    }

    
    return "Número de Maçãs: $numeroMacas<br>" .
           "Preço por Maçã: R$ " . number_format($precoPorMaca, 2, ',', '.') . "<br>" .
           "Desconto aplicado: " . ($desconto * 100) . "%<br>" .
           "Custo Total: R$ " . number_format($custoTotal, 2, ',', '.');
                }


                function exercicio14($salarioFixo, $vendas) {
                    // Comissionamento de 3% sobre as vendas até R$ 1.500,00 e 5% sobre o que ultrapassar
                    if ($vendas <= 1500) {
                        $comissao = $vendas * 0.03;
                    } else {
                        $comissao = (1500 * 0.03) + (($vendas - 1500) * 0.05);
                    }

                    // Calculando o salário total
                    $salarioTotal = $salarioFixo + $comissao;

                    // Retornando o resultado
                    return "Comissão (3% sobre até R$ 1.500,00): R$ " . number_format($comissao, 2, ',', '.') . "<br>" .
                        "Salário Total: R$ " . number_format($salarioTotal, 2, ',', '.');
                }

        function exercicio15($saldo, $debito, $credito) {
            // Calculando o saldo atual
            $saldoAtual = $saldo - $debito + $credito;
        
            // Retornando o resultado
            if ($saldoAtual >= 0) {
                return "Saldo Atual: R$ " . number_format($saldoAtual, 2, ',', '.') . "\nSaldo Positivo";
            } else {
                return "Saldo Atual: R$ " . number_format($saldoAtual, 2, ',', '.') . "\nSaldo Negativo";
            }
        }

?>   