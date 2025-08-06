<?php
    /*
        ! PHP para Iniciantes | Curso de PHP completo com 4 horas.

        * 1º Aula
            ? 1. Echo
                -> Serve para exibir contéudo PHP na tela.

            ? 2. Include ou Require

                1.1. Include
                    -> Se o arquivo não for encontrado, o PHP gera um aviso (Warning), mas continua executando o resto do script. Útil quando não é essencial que o arquivo exista.

                1.2. Require
                    -> Se o arquivo não for encontrado, o PHP gera um erro fatal (Fatal Error) e interrompe a execução do script. Use quando o arquivo é essencial para o funcionamento do sistema.

        * 2º Aula
            ? Tipos de Variaveis
                1. Strings
                    Exemplo: $name = "Ermeson";

                2. Numbers - integerts, float(double)
                    Exemplo: $number = 1;

                3. Boolean
                    Exemplo: $isTrue = true;

                4. Arrays
                    Exemplo: numbers = [1, 2, 3]
                5. Objects
                6. Null
                7. Variaveis contantes
                    define('PERSON', 'Miguel');
                    echo PERSON;

                8. Constantes Mágicas
                    São variaveis que mudam o valor dependendo de onde são usada

                    1. __FUNCTION__
                        Retorna o nome da função atual.

                        No seu exemplo: __FUNCTION__ dentro da função teste() vai retornar a string "teste".

                    2. __METHOD__
                        Retorna o nome completo do método atual, no formato: Classe::metodo.

                        Se não estiver dentro de uma classe, o PHP ainda vai tentar mostrar algo, mas o comportamento pode variar entre versões.

                        Fora de uma classe, pode imprimir só teste ou gerar aviso dependendo da versão do PHP.


                    ? Obs:
                        -> O & comercial serve para fazer referência em uma variavel, tipo se eu mudar uma variavel que esteja fazendo referencial a outra variavel se eu mudar o valor dela a variavel que esta recebendo o referencial dela vai mudar tbm.
        
     */
?>