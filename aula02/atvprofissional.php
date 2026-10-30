<?php

class Cliente {
    private $cpf;

    // A validação fica no set
    public function setCpf($c) {
        // Ve se tem 11 números
        if (strlen($c) != 11) {
            echo "CPF inválido!\n";
        } else {
            $this->cpf = $c;
            echo "CPF salvo!\n";
        }
    }

    public function getCpf() {
        return $this->cpf;
    }
}

// Teste do programa
$c1 = new Cliente();

$c1->setCpf("123");         // Mostra: CPF inválido!
$c1->setCpf("12345678901"); // Mostra: CPF salvo com sucesso!

?>