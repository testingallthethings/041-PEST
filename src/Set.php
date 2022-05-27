<?php

namespace Testingallthethings\Pest;

class Set
{
    private $values = [];

    public function isEmpty()
    {
        return count($this->values) === 0;
    }

    public function add(string $value)
    {
        if ($this->contains($value)) {
            return;
        }

        $this->values[] = $value;
    }

    public function size()
    {
        return count($this->values);
    }

    public function contains(string $value)
    {
        foreach ($this->values as $v) {
            if ($v === $value) {
                return true;
            }
        }

        return false;
    }
}