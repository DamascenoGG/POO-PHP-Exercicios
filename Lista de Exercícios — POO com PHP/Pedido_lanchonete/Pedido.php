<?php

class Pedido {
    
    public string $cliente;
    public string $item;
    public int $quantidade;
    public float $precoUnitario;

    public function __construct(string $cliente, string $item, int $quantidade, float $precoUnitario) {
        $this->cliente = $cliente;
        $this->item = $item;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
    }

    public function calcularTotal(): float {
        return $this->quantidade * $this->precoUnitario;
    }

    public function mostrarResumo(): void {
        echo "Cliente: {$this->cliente}<br>";
        echo "Item: {$this->item}<br>";
        echo "Quantidade: {$this->quantidade}<br>";
        echo "Preço unitário: R$ " . number_format($this->precoUnitario, 2, ',', '.') . "<br>";
    }
}
