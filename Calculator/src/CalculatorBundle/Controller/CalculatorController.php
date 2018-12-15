<?php

namespace CalculatorBundle\Controller;

use CalculatorBundle\Entity\Calculator;
use CalculatorBundle\Form\CalculatorType;
use CalculatorBundle\Form\Reset;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\HttpFoundation\Request;


class CalculatorController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @Route("/", name="index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request){


        $calculator = new Calculator();
        $form = $this->createForm(CalculatorType::class, $calculator);
        $form->handleRequest($request);
        $leftOperand = $calculator->getLeftOperand();
        $rightOperand = $calculator->getRightOperand();
        $operator = $calculator->getOperator();
        $result = 0;
        if ($request->get('reset')){
            $result = '';
            $calculator = new Calculator();
            return $this->render('calculator/index.html.twig',
                [
                    'result' => $result,
                    'calculator' => $calculator,
                    'form' => $form->createView()
                ]);
        }
        if ($form->isSubmitted() && $form->isValid()){
            if($leftOperand === null && $rightOperand === null){
                $result = '';
                return $this->render('calculator/index.html.twig',
                    [
                        'result' => $result,
                        'calculator' => $calculator,
                        'form' => $form->createView()
                    ]);
            }

            switch ($operator){
                case '+':
                    $result = floatval($leftOperand) + floatval($rightOperand);
                    break;
                case '-':
                    $result = floatval($leftOperand) - floatval($rightOperand);
                    break;
                case '*':
                    $result = floatval($leftOperand) * floatval($rightOperand);
                    break;
                case '/':
                    if($rightOperand == 0){
                        $result = 'ERROR!';
                    }
                    else {
                        $result = floatval($leftOperand) / floatval($rightOperand);
                    }
                    break;
                case '%':
                    if($rightOperand == 0){
                        $result = 'ERROR!';
                    }
                    else {
                        $result = floatval($leftOperand) % floatval($rightOperand);
                    }
                    break;
                case '^':
                    if($leftOperand == 0 && $rightOperand == 0){
                        $result = 0;
                    }
                    else {
                        $result = pow(floatval($leftOperand), floatval($rightOperand));
                    }
                    break;
            }
            return $this->render('calculator/index.html.twig',
                [
                   'result' => $result,
                    'calculator' => $calculator,
                    'form' => $form->createView()
                ]);


        }

        else {
            return $this->render('calculator/index.html.twig.');
        }
    }


}
