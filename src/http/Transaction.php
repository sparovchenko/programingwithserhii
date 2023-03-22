<?php

declare(strict_types = 1);

class Transaction
{
    // public float $amount;
    // public string $description;

    public function __construct(private float $amount, private string $description)
    {
        // $this->amount = $amount;
        // $this->description = $description;
    }

    public function addTax(float $rate): self
    {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

    public function applyDiscount(float $rate): self
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}