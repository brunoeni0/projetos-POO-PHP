<?php
class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    // Métodos
    public function abrirConta($t): void {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        }
        elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fechaConta(): void {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro não posso fechá-la!</p>";
        }
        elseif ($this->getSaldo() < 0) {
            echo "<p>Conta está em débito. Impossível encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso!</p>";
        }
    }
    public function depositar($v): void {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$$v na conta de {$this->getDono()}</p>";
        } else {
            echo "<p>Conta fechada. Impossível depositar</p>";
        }
    }
    public function sacar($v): void {
        if($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$$v autorizado na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
                echo "<p>Não posso sacar de uma conta fechada.</p>";
        }
    }
    public function pagarMensal(): void {
        if ($this->tipo == "CC") {
            $v = 12;
        }
        elseif ($this->tipo == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            if($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$$v debitado na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Saldo insuficiente.<\p>";
            }
        } else {
            echo "<p>Problemas com a conta. Não posso cobrar.</p>";
        }
    }
    // Métodos Especiais
    public function __construct(): void {
        $this->saldo = 0;
        $this->status = false;
        echo '<p>Conta criada com sucesso!</p>';
    }
    public function setNumconta($n): void {
        $this->numConta = $n;
    }
    public function getNumconta() {
        return $this->numconta;
    }
    public function setTipo($t): void {
        $this->tipo = $t;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setDono($d): void {
        $this->dono = $d;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setSaldo($v): void {
        $this->saldo = $v;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setStatus($s): void {
        $this->status = $s;
    }
    public function getStatus() {
        return $this->status;
    }
}
