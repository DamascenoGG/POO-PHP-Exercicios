<?php

abstract class Veiculo {
    protected string $placa;
    protected string $marca;
    protected string $modelo;
    protected int $anoModelo;
    protected int $anoFabricacao;
    protected string $chassi;
    protected string $renavam;
    protected string $procedencia;
    
    protected string $corExterna;
    protected string $corInterna;
    protected string $tipoCombustivel;
    protected string $motor;
    protected float $quilometragem;
    protected float $consumoMedio;
    protected array $opcionais;

    public function __construct(
        string $placa, string $marca, string $modelo, int $anoModelo, int $anoFabricacao, 
        string $chassi, string $renavam, string $procedencia, string $corExterna, 
        string $corInterna, string $tipoCombustivel, string $motor, float $quilometragem, 
        float $consumoMedio, array $opcionais = []
    ) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anoModelo = $anoModelo;
        $this->anoFabricacao = $anoFabricacao;
        $this->chassi = $chassi;
        $this->renavam = $renavam;
        $this->procedencia = $procedencia;
        $this->corExterna = $corExterna;
        $this->corInterna = $corInterna;
        $this->tipoCombustivel = $tipoCombustivel;
        $this->motor = $motor;
        $this->quilometragem = $quilometragem;
        $this->consumoMedio = $consumoMedio;
        $this->opcionais = $opcionais;
    }

    public function getPlaca(): string { return $this->placa; }
    public function setPlaca(string $placa): void { $this->placa = $placa; }
    
    public function getModelo(): string { return $this->modelo; }
    
    abstract public function exibirDetalhes(): string;
}

class VeiculoCarga extends Veiculo {
    private float $capacidadeMaximaCargaKg;
    private float $altura;
    private float $largura;
    private float $profundidade;

    public function __construct(
        string $placa, string $marca, string $modelo, int $anoModelo, int $anoFabricacao, 
        string $chassi, string $renavam, string $procedencia, string $corExterna, 
        string $corInterna, string $tipoCombustivel, string $motor, float $quilometragem, 
        float $consumoMedio, array $opcionais, 
        float $capacidadeMaximaCargaKg, float $altura, float $largura, float $profundidade
    ) {
        parent::__construct($placa, $marca, $modelo, $anoModelo, $anoFabricacao, $chassi, 
                            $renavam, $procedencia, $corExterna, $corInterna, $tipoCombustivel, 
                            $motor, $quilometragem, $consumoMedio, $opcionais);
        
        $this->capacidadeMaximaCargaKg = $capacidadeMaximaCargaKg;
        $this->altura = $altura;
        $this->largura = $largura;
        $this->profundidade = $profundidade;
    }

    public function getCapacidadeMaximaCargaKg(): float { return $this->capacidadeMaximaCargaKg; }

    public function exibirDetalhes(): string {
        return "Veículo de Carga: {$this->marca} {$this->modelo} - Capacidade: {$this->capacidadeMaximaCargaKg}kg";
    }
}

class VeiculoPassageiro extends Veiculo {
    private int $numeroPortas;
    private int $numeroPassageiros;

    public function __construct(
        string $placa, string $marca, string $modelo, int $anoModelo, int $anoFabricacao, 
        string $chassi, string $renavam, string $procedencia, string $corExterna, 
        string $corInterna, string $tipoCombustivel, string $motor, float $quilometragem, 
        float $consumoMedio, array $opcionais, 
        int $numeroPortas, int $numeroPassageiros
    ) {
        parent::__construct($placa, $marca, $modelo, $anoModelo, $anoFabricacao, $chassi, 
                            $renavam, $procedencia, $corExterna, $corInterna, $tipoCombustivel, 
                            $motor, $quilometragem, $consumoMedio, $opcionais);
        
        $this->numeroPortas = $numeroPortas;
        $this->numeroPassageiros = $numeroPassageiros;
    }

    public function getNumeroPassageiros(): int { return $this->numeroPassageiros; }

    public function exibirDetalhes(): string {
        return "Veículo de Passageiro: {$this->marca} {$this->modelo} - Passageiros: {$this->numeroPassageiros}";
    }
}

$carro = new VeiculoPassageiro(
    "XYZ-9876", "Fiat", "Argo", 2024, 2024, 
    "CHASSI98765", "RENAVAM98765", "nacional", "Vermelho", 
    "Cinza", "Flex", "1.0", 1500.0, 
    14.2, ["Multimídia", "Sensor de ré"], 
    4, 5
);

// TESTE
echo $carro->exibirDetalhes();
?>