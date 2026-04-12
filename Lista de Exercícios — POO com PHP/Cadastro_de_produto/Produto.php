<?php

class Produto {
    // Declaração dos atributos com tipagem para maior segurança e previsibilidade
    public string $nome;
    public float $preco;
    public int $quantidade;

    // Construtor para inicializar o objeto com os valores recebidos
    public function __construct(string $nome, float $preco, int $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // Método para exibir as informações formatadas
    public function mostrarDados(): void {
        echo "Produto: {$this->nome}<br>";
        // Formata o preço para o padrão brasileiro (R$ 00,00)
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        echo "Quantidade: {$this->quantidade}<br>";
    }

    // Método para calcular e retornar o valor total em estoque
    public function calcularValorEstoque(): float {
        return $this->preco * $this->quantidade;
    }
}