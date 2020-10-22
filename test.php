
<?php
include('converter.php');

$testStrings = [
    'thirty thirty eighty one one eighty' => '30 30 81 1 80',
    'twenty twenty' => '20 20',
    'twelfth eleventh tenth' => '12th 11th 10th',
    'ten eleven twelve' => '10 11 12',
    'one two five zero' => '1 2 5 0',
    'One First Two' => '1 1st 2',
    'One First Two Second Three Third Four Fourth Five Fifth Six Sixth Seven' => '1 1st 2 2nd 3 3rd 4 4th 5 5th 6 6th 7',
    'Bus number fifteen from bus stop number Eighty three thousand one hundred thirty nine' => 'Bus number 15 from bus stop number 83139',
    'get the fifteenth cookie from fifth jar on second left shelf' => 'get the 15th cookie from 5th jar on 2nd left shelf',
    'One hundred million monkeys could not write second Macbeth' => '100000000 monkeys could not write 2nd Macbeth',
    'Taganskaya str. thirty two, three hundred fifty six' => 'Taganskaya str. 32, 356',
    'Lenina str 56/17 b. one hundred seven' => 'Lenina str 56/17 b. 107',
    'Paris & Hilton road, twenty two, house 356' => 'Paris & Hilton road, 22, house 356',
    'Wien, Wilhelmstraße zwei hundert sieben und dreißig' => 'Wien, Wilhelmstraße zwei hundert sieben und dreißig',
    'Vienna, Wilhelmstrasse two hundred and thirty seven' => 'Vienna, Wilhelmstrasse 237',
    'thirty three thousand and fifty nine dollars' => '33059 dollars',
];

$converter = new Converter();
foreach ($testStrings as $input => $expected) {
    $output = $converter::wordsToNumber($input);
    echo $input."\t=>\t".$output."\n";
    if ($output != $expected) { die("words to number conversion failed!");}
} 
