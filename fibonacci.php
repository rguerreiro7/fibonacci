<?php 
//php 7.1.14
//Fibonacci Sequence 

function fibonacciSequence($n)
{

    $num1 = 0;
    $num2 = 1;

    for ($i = 0; $i <= $n; $i++) {
        echo ' ' . $num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
    }
}


echo "fibonacci (5): ";
echo fibonacciSequence(5);
echo nl2br("\nfibonacci (10): ");
echo fibonacciSequence(10);
echo nl2br("\nfibonacci (1): ");
echo fibonacciSequence(1);
