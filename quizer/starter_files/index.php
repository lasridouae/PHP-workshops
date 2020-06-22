<?php
    include 'database.php';
    $quest = "SELECT COUNT(*) FROM questions";
    $Getquest=$conn->query($quest);
    $questRes = $Getquest->fetch_assoc();
?> 
 
<!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
 
<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Test Your PHP Knowledge</h2>
            <p>This is a multiple choice quiz to test your knowledge of PHP</p>
            <ul>
                <li><strong>Number of Questions: </strong><?php echo $questRes['COUNT(*)'] ?></li>
                <li><strong>Type: </strong>Multiple Choice</li>
                <li><strong>Estimated Time: </strong><?php echo $questRes['COUNT(*)']*0.5 . ' Minute' ?></li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; YOUCODE, PHP Quizzer
        </div>
    </footer>
</body>
 
</html>