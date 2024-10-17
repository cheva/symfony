<?php

namespace App\Infrastructure\Repository;

class CurrentCollectionRepository implements CollectionInterface
{

    private string $name;
    private array $words;
    private int $count;
    private int $finished;
    private int $tries;
    private int $errors;
    private float $time;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getWords(): array
    {
        return $this->words;
    }

    public function setWords(array $words): void
    {
        $this->words = $words;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function getFinished(): int
    {
        return $this->finished;
    }

    public function setFinished(int $finished): void
    {
        $this->finished = $finished;
    }

    public function getTries(): int
    {
        return $this->tries;
    }

    public function setTries(int $tries): void
    {
        $this->tries = $tries;
    }

    public function getErrors(): int
    {
        return $this->errors;
    }

    public function setErrors(int $errors): void
    {
        $this->errors = $errors;
    }

    public function getTime(): float
    {
        return $this->time;
    }

    public function setTime(float $time): void
    {
        $this->time = $time;
    }



}