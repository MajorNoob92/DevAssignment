<?php

//do it your damned self! FFS. 

//First input provided by this scary puzzle. Make it look pretty with the following.
$clientInput = "1122";
echo 'The total sum for ' . $clientInput . ' is: ' . CalculateInverseCaptchaTotal($clientInput) . "\n\n";

$clientInput = "1111";
echo 'The total sum for ' . $clientInput . ' is: ' . CalculateInverseCaptchaTotal($clientInput) . "\n\n";

$clientInput = "1234";
echo 'The total sum for ' . $clientInput . ' is: ' . CalculateInverseCaptchaTotal($clientInput) . "\n\n";

$clientInput = "91212129";
echo 'The total sum for ' . $clientInput .  ' is: ' . CalculateInverseCaptchaTotal($clientInput) . "\n\n";



function CalculateInverseCaptchaTotal(string $clientInput)
{
//Always make sure you start your value with a zero. Doesn't help we have random numbers interfering with our scripty
    $InverseCaptchaTotal = 0;

//lets find the length of the input
//echo strlen($clientInput); //using example '1122' gives the value of 4 here

//As recommended, provide the function with the input length. It will be required when running the loop. 
    $clientInputLength = strlen($clientInput);

//echo $clientInputLength; //still gives 4, so whoop. 

//ok here comes the loop. Make sure the ArrayIndex starts at 0. As long as the ArrayIndex value is less than the $clientInputLength the script will continue to loop.

    for ($arrayIndex = 0; $arrayIndex < $clientInputLength; $arrayIndex++) {

        //it is recommended to convert the string value to an Integer
        $currentValue = (int)$clientInput[$arrayIndex];

        //isset: determine if a variable is set and is not NULL
        if (isset($clientInput[$arrayIndex+1])) {

            //find the next available value in the string
            $nextValue = (int)$clientInput[$arrayIndex+1];
        } else {

            //this will get the first value of the string and allow the script to loop around to the first number once again
            $nextValue = (int)$clientInput[0];
        }

        echo $currentValue . '==' . $nextValue . '?';

//need to ask lee about this next part

        if ($currentValue === $nextValue) {

            //If the current and next values match add it to the total. \n <<- new line, \n\n <<- two new lines
            $InverseCaptchaTotal += $currentValue;
            echo 'It is correct. Added to the total' . "\n";
        } else {
            //if the current and next values do not match, do nothing.
            echo 'Meh, didnt match' . "\n";
        }


        return $InverseCaptchaTotal;
    }
}

?>