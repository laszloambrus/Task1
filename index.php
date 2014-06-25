<?php
    /* Check if git commit is working to my repo:) {from php storm} */

    /*
     * Write a php script that will find
     * the sum of all the multiples of 3 or 5 below 1000.
     * The script should run from command line and put the result on screen.
    */

    //Just a test for command line - (I've added PHP path to my windows system variables.)
    //echo "this line is on cmd window";

    /*===TODO
     * 1. Read inputs from command line
     * 2. Store them in variables
     * 3. Pass them to a function as parameters
     * 4. Output the result on screen.
     * */

    /*
     * my Solution: The multiples of 3 is 3,6,9 and so on,
     * so if I divide 6/3 the result will be 2 and the MOD% (or) rest is 0
     * the same for 5...
     * Because the task says 3 "or" 5 it means I have to
     * check either One or the Other equals 0 using the or "||" statement
     * I have to check the numbers up to 1000. So i make a "for" statement
     * incrementing the values by One starting the index from 0.
     */

    echo "Task 1 - Sum of Multiples.\n";

    //Fetching data from input - Trimming any spaces and storing in variable
    $num1 = '';
    echo "\nPlease enter a number below 1000!";
    while(!$num1){
        $num1 = trim(fgets(STDIN,3));
    }

    $num2 = '';
    echo "\nPlease enter the second number!";
    while(!$num2){
        $num2 = trim(fgets(STDIN,3));
    }

    //Echoing the sum
    echo "The sum of ".$num1." or ".$num2." multiples is: ".sumOfMultiples($num1,$num2);

    //Function that does the math
    function sumOfMultiples($num1,$num2){
        //Initializing sum
        $sum = 0;

        //Numbers less than 1000
        for($i = 0;$i<1000; $i++){
            //MOD is 0 at either numbers?
            if($i%$num1===0 || $i%$num2===0){
                $sum = $sum + $i;
            }
        }
        return $sum;
    }