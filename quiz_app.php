<?php



$questions = [

    ['question' => 'What is 2 + 2?', 'correct' => '4'],

    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],

    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],

];

$answers = [];

foreach($questions as $index=>$questions){
    echo ($index+1) . ". " . $questions['question'] . "\n";
    $answers[] = trim(readline("Your Answer: "));

}



function evaluateQuiz( $questions, $answers): int{
    
$score = 0;

foreach($questions as $index => $questions){

    if($answers[$index] === $questions['correct']){
        $score++;

    }

}
return $score;

}


$score = evaluateQuiz( $questions, $answers);

echo "\nYou scored $score out of ". cont($question) . ".\n";


if( $score === cont($questions)) {
    echo "Excellent job! \n";
} elseif ($score > 1) {

    echo "Good Effort \n";
}else {
    echo "Better luck next time! \n" ;
}






?>