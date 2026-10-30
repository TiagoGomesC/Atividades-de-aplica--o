<?php 
// cria a classe cliente
// novamente "class" é a mãe, atibutos são os filhos
class cliente{
    // atributos
    private $nome;
    private $email;
    private $Cnpj;

    // métodos
    public function __construct($n, $c)
    {
        $this->nome = $n;
        $this->Cnpj= $c;

    }
    // métodos acessesores (getter e setter) para nome:
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
      public function getEmail(){
        return $this->email;
    }
      public function setEmail($e){
        $this->email = $e;
    }
        public function getCnpj(){
        return $this->Cnpj;
    }
      public function setCnpj($c){
        $this->Cnpj = $c;
    }
    public function mostrarCliente(){
        echo "Dados do cliente: \n";
        echo $this->nome . "\n";
        echo $this->email . "\n";
        echo $this->Cnpj . "\n";

    }
}
$c1 = new Cliente("StudioWear", "226.889.0009.-90");
$c1->setEmail("StudioWear@gmail.com");
$c1->mostrarCliente();
?>