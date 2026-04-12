<?php

class Produto {
    
    public string $nome;
    public float $preco;
    public int $quantidade;


    public function __construct(string $nome, float $preco, int $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function mostrarDados(): void {
        echo "Produto: {$this->nome}<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        echo "Quantidade: {$this->quantidade}<br>";
    }

    public function calcularValorEstoque(): float {
        return $this->preco * $this->quantidade;
    }
}
