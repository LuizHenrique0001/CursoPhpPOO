<?php

namespace Entities;

class Conta
{
    public Int $numConta;
    protected String $tipoConta;
    private String $donoConta;
    private Float $saldoConta;
    private Bool $statusConta;

    public function getNumConta(): int
    {
        return $this->numConta;
    }

    public function setNumConta(int $numConta): void
    {
        $this->numConta = $numConta;
    }

    public function getTipoConta(): string
    {
        return $this->tipoConta;
    }

    public function setTipoConta(string $tipoConta): void
    {
        $this->tipoConta = $tipoConta;
    }

    public function getDonoConta(): string
    {
        return $this->donoConta;
    }

    public function setDonoConta(string $donoConta): void
    {
        $this->donoConta = $donoConta;
    }

    public function getSaldoConta(): float
    {
        return $this->saldoConta;
    }

    public function setSaldoConta(float $saldoConta): void
    {
        $this->saldoConta = $saldoConta;
    }

    public function getStatusConta(): bool
    {
        return $this->statusConta;
    }

    public function setStatusConta(bool $statusConta): void
    {
        $this->statusConta = $statusConta;
    }

    public function Conta()
    {
        $this->setSaldoConta(0);
        $this->setStatusConta(false);
    }

    public function abrirConta(Int $numConta, String $tipoConta, String $donoConta, float $saldoConta)
    {
        $this->setNumConta($numConta);
        $this->setTipoConta($tipoConta);
        $this->setDonoConta($donoConta);
        $this->setSaldoConta($saldoConta);
        $this->setStatusConta(true);

        if ($this->getTipoConta() == "crr"){

            $this->setSaldoConta($this->getSaldoConta() + 50.00);

        }elseif($this->getTipoConta() == "pup"){

            $this->setSaldoConta($this->getSaldoConta() + 150.00);

        }else{

            echo "Tipo de conta Invalida!";
            die();

        }
    }

    public function fecharConta()
    {
        if($this->getSaldoConta() == 0){
            $this->setStatusConta(0);
            echo "Conta fechada!";
            die();
        }else{
            echo "Retire todo o seu Saldo ou Pague oque deve!";
        }
    }

    public function depositar($valor)
    {
        $this->setSaldoConta($this->getSaldoConta() + $valor);
    }
    public function sacar($valor)
    {
        if ($this->getSaldoConta()){
            if($this->getSaldoConta() >= $valor){
                $this->setSaldoConta($this->getSaldoConta() - $valor);

            }else{
                echo "Valor maior que seu saldo disponivel!";
            }
        }else{
            echo "Nao posso sacar de uma conta que nao esta aberta";
        }
    }

    public function pagarMensal()
    {
        if ($this->getTipoConta() == 'pup'){
            $valorCobrado = 20.00;
        }elseif ($this->getTipoConta() == 'crr'){
            $valorCobrado = 12.00;
        }
        if ($this->getStatusConta()){
            $this->setSaldoConta($this->getSaldoConta() - $valorCobrado);
        }else{
            echo "<p>Problemas com a conta. Nao posso cobrar.</p>";
        }
    }

}