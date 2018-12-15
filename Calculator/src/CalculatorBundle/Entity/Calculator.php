<?php
/**
 * Created by PhpStorm.
 * User: BGDEDIM3
 * Date: 2018-11-27
 * Time: 23:03
 */

namespace CalculatorBundle\Entity;


class Calculator
{
    /**
     * @var string
     */
    private $leftOperand;

    /**
     * @var string
     */
    private $rightOperand;

    /**
     * @var string
     */
    private $operator;


    public function getLeftOperand()
    {
        return $this->leftOperand;
    }

    /**
     * @param float $leftOperand
     */
    public function setLeftOperand($leftOperand)
    {
        $this->leftOperand = $leftOperand;
    }

    /**
     * @return float
     */
    public function getRightOperand()
    {
        return $this->rightOperand;
    }

    /**
     * @param float $rightOperand
     */
    public function setRightOperand($rightOperand)
    {
        $this->rightOperand = $rightOperand;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }


}