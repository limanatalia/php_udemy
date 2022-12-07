<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //inicio: DIRETOR COMERCIAL
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subcomandinhas' => array(
                    //inicio: gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de vendas',
                    ),
                    //termino: gerente de vendas
                ),
            ),
            //termino: diretor comercial
            //termino: diretor financeiro
            array(
                'nome_cargo' => 'difretor financeiro',
                'bubordinados' => array(
                    //inicio: gerente de cinstas a o pagar
                    array(
                        'nome_cargo' => 'gerente de contas a pagar',
                        'subcordinados' => array(
                            //inicio: supervision
                        ),
                    ),
                ),
            ),
        ),

    ),
);
