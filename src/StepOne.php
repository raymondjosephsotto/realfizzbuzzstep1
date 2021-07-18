<?php

/*
* Title: Real FizzBuzz (Step 1)
* Author: Raymond Sotto
* Github: https://github.com/raymondjosephsotto
* PHP version: 7.4.1
* PHP testing version: PHPUnit 9.5.0
*
* Instructions: Write some code that prints out the following for a contiguous range of numbers:
* 1. the number
* 2. 'fizz' for numbers that are multiples of 3
* 3. 'buzz' for numbers that are multiples of 5
* 4. 'fizzbuzz' for numbers that are multiples of 15
*
* Expected Output:
* 1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizzbuzz 16 17 fizz 19 buzz
*
* To Run on Command Line: 'php -f src/StepOne.php'
* To Run on Local Env: 'localhost/realfizzbuzzstep1/src/StepOne.php' 
* or 'localhost:[YOUR PORT NUMBER HERE]/realfizzbuzzstep1/src/StepOne.php'
*/


declare(strict_types=1);

class FizzBuzzStepOne
{
    public function translate($num)
    {
        if ($num % 15 == 0) {
            return "fizzbuzz";
        }
        if ($num % 3 == 0) {
            return "fizz";
        }
        if ($num % 5 == 0) {
            return "buzz";
        }
        return strval($num);
    }

    public function run()
    {
        $result = array();
        for ($i = 0; $i < 20; $i++) {
            $result[$i] = $this->translate($i + 1);
            $concatResult =  $result[$i] . "\n";
            echo $concatResult;
        }
        return $result;
    }
}

$initialize_fizzbuzz_step_one = new FizzBuzzStepOne();
$output = $initialize_fizzbuzz_step_one->run();

