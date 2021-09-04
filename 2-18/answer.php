<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
    $name =$_POST['name'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $answer1 =$_POST['answer1'];
    $answer2 =$_POST['answer2'];
    $answer3 =$_POST['answer3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

    function hantei($question, $answer) {
        if ($question === $answer){ 
            echo '正解！';
        } else {
            echo '残念...';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <p><?php echo $name;?>さんの結果は・・・？</p>
    <p>①の答え</p>

    <!--作成した関数を呼び出して結果を表示-->
    <?php hantei($question1, $answer1);?>
    <p>②の答え</p>

    <!--作成した関数を呼び出して結果を表示-->
    <?php hantei($question2, $answer2);?>
    <p>③の答え</p>

    <!--作成した関数を呼び出して結果を表示-->
    <?php hantei($question3, $answer3);?>
    
</body>
</html>
