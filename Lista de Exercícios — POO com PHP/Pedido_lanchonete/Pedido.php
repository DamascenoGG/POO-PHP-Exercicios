<?php

class Pedido {
    // Declaração dos atributos com tipagem
    public string $cliente;
    public string $item;
    public int $quantidade;
    public float $precoUnitario;

    // Construtor para inicializar os detalhes do pedido
    public function __construct(string $cliente, string $item, int $quantidade, float $precoUnitario) {
        $this->cliente = $cliente;
        $this->item = $item;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
    }

    // Método para calcular o valor total (Quantidade × Preço Unitário)
    public function calcularTotal(): float {
        return $this->quantidade * $this->precoUnitario;
    }

    // Método para exibir o resumo dos dados do pedido
    public function mostrarResumo(): void {
        echo "Cliente: {$this->cliente}<br>";
        echo "Item: {$this->item}<br>";
        echo "Quantidade: {$this->quantidade}<br>";
        echo "Preço unitário: R$ " . number_format($this->precoUnitario, 2, ',', '.') . "<br>";
    }
}