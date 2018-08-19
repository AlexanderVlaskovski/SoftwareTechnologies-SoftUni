<?php

namespace CalculatorBundle\Entity;

class Calculator
{
    /**
     * @var float
     */
    public $leftOperand;

    /**
     * @var float
     */
    public $rightOperand;

    /**
     * @var string
     */
    public $operator;

    /**
     * Get left operand
     *
     * @return float
     */
    public function getLeftOperand()
    {
        return $this->leftOperand;
    }

    /**
     * Set left operand
     *
     * @param float $leftOperand
     *
     * @return Calculator
     */
    public function setLeftOperand($leftOperand)
    {
        $this->leftOperand = $leftOperand;
        return $this;
    }

    /**
     * Get right operand
     *
     * @return float
     */
    public function getRightOperand()
    {
        return $this->rightOperand;
    }

    /**
     * Set right operand
     *
     * @param float $rightOperand
     *
     * @return Calculator
     */
    public function setRightOperand($rightOperand)
    {
        $this->rightOperand = $rightOperand;
        return $this;
    }

    /**
     * Get operator
     *
     * @return float
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set operator
     *
     * @param string $operator
     *
     * @return Calculator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

            return $this;
    }



}