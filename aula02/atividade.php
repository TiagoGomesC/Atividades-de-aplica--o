<?php
// cria a classe produto
// class produto é a máe e os atributos são as filhas
class torneira
{
    // atributos privados
    private $marca;
    private $aberta;
    private $fechada;
    private $cor;
    private $status;

    // Construtor
    public function __construct($m, $a, $f, $c, $s)
    {
        $this->marca = $m;
        $this->aberta = $a;
        $this->fechada = $f;
        $this->cor = $c;
        $this->status = $s;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($m){
        $this->marca = $m;
    }

    public function getAbrir()
    {
        return $this->aberta;
    }

       public function setAbrir($a){
        $this->aberta = $a;
    }

        public function getFechada()
    {
        return $this->aberta;
    }

       public function setFechada($f){
        $this-> fechada = $f;
    }

            public function getcor()
    {
        return $this->cor;
    }

       public function setCor($c){
        $this-> cor = $c;
    }
    
            public function getStatus()
    {
        return $this->status;
    }

       public function setStatus($s){
        $this-> status = $s;
    }

    public function abrirTorneira
    if($this->status == "fechada"){
        if ($this->status == "aberta") {
            echo "Da uma olhada melhor e ve se ja nao alagou a casa de tao aberta q ta a torneira, looserr!👌\n";
        } else {
            $this->status = "aberta";
            echo "Você abriu a torneira de cor " . $this->cor . "!\n";
        }
    }

    // Método funcional para fechar a torneira
    public function fecharTorneira()
    {
        if ($this->status == "fechada") {
            echo "A torneira já está fechada, não precisa apertar mais nao vey!\n";
        } else {
            $this->status = "fechada";
            echo "Você fechou a torneira com sucesso.\n";
        }
    }

    // Método para mostrar os dados
    public function mostrarProduto()
    {
        echo "--- Dados da Torneira ---\n";
        echo "Marca: " . $this->marca . "\n";
        echo "Cor: " . $this->cor . "\n";
        echo "Status: " . $this->status . "\n";
    }
}

// --- PROGRAMA PRINCIPAL (TESTE) ---

// Criando a torneira (Marca, Aberta, Fechada, Cor, Status)
$t1 = new torneira("Deca", false, true, "Prata", "aberta");

// Testando abrir quando ela já está aberta
$t1->abrirTorneira();

// Fechando a torneira
$t1->fecharTorneira();

// Mostrando o estado final do produto
echo "\n";
$t1->mostrarProduto();


?>
