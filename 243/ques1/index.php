<?php
    session_start();
    if(isset($_GET['reset'])){
        session_unset();
        session_destroy();
        header('Location: index.php');
        exit;
    }

    if(!isset($_SESSION['number'])){
        $_SESSION['number'] = rand(500, 5000);
        $_SESSION['attempt'] = 5;
        $_SESSION['message'] = "";
    }

    if(isset($_POST['guess'])){
        $guess = intval($_POST['guess']);

        if($_SESSION['attempt'] > 0){
            if($guess < $_SESSION['number']){
                $_SESSION['attempt']--;
                $_SESSION['message'] = "Too low. Attempts left: " . $_SESSION['attempt'];
            } elseif($guess > $_SESSION['number']){
                $_SESSION['attempt']--;
                $_SESSION['message'] = "Too high. Attempts left: " . $_SESSION['attempt'];
            } else {
                $_SESSION['message'] = "Correct! Number was: " . $_SESSION['number'];
                $_SESSION['attempt'] = 0;
            }
        }

        if($_SESSION['attempt'] == 0 && $guess != $_SESSION['number']){
            $_SESSION['message'] = "Out of attempts. Number was: " . $_SESSION['number'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ques one</title>
</head>
<body>
    <div style = "display: flex; justify-content: center; align-items: center;">
        <?php if(!empty($_SESSION['message'])): ?>
            <div style="text-align:center; margin-bottom:10px;"><?php echo htmlspecialchars($_SESSION['message']); ?></div>
        <?php endif; ?>

        <?php if(isset($_SESSION['attempt']) && $_SESSION['attempt'] <= 0): ?>
            <div style="text-align:center; margin-bottom:10px;">Game over. <a href="?reset=1">Play again</a></div>
        <?php else: ?>
        <form method = "post">
            <label style="display: block; margin: 10px 0">Guess a number between 500 to 5000</label>
            <input style = "display: block; margin: 10px 0;" type = "text" name = "guess" required>
            <input style = "display: block; margin: 10px 0;"type = "submit" value = "submit">
        </form>
        <?php endif; ?>
    </div>
</body>
</html>
