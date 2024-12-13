<?php

// Example questions
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
    ];

    // hare all my answer will be kept.
$answers = [];


function evaluateQuiz(array $qustions,array $answers) : int {
    $score = 0;

    foreach ($qustions as $index => $qustion){

        if($answers[$index]=== $qustion['correct']){
            $score++;
        }

    }
    return $score;
}

// taking answer form user and keeping it to arrey.

foreach ($questions as $index => $question) {
    echo ($index++).". ".$question['question']."\n";
    $answers[]= trim(readline("Your answer: "));
}

// calculation part

$score = evaluateQuiz($questions,$answers);

echo "\n You scored $score out of ".count($questions)."\n";

if ($score === count($questions)) {
    echo "Excellent Job!\n";
}else if($score > 1){
    echo "Good effort!\n";
}else{
    echo "Better luck next time.\n";
}



