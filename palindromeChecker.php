<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome checker</title>
    <style>
        body {
            background-color: coral;
        }

        .container {
            height: 380px;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid gray;
            background-color: #fff;
            margin-top: 50px;
            box-shadow: 2px 2px 20px 2px #000;
        }

        input[type=submit] {
            padding: 10px;
            color: beige;
            background-color: goldenrod;
            font-size: 18px;
            font-weight: bold;
            width: 390px;
            cursor: pointer;
            /* outline: none; */
            border-radius: 5px;
        }

        h1 {
            color: darkgoldenrod;
            font-family: fira code;
        }

        textarea {
            margin-top: 20px;
            margin-bottom: 30px;
            font-size: 20px;
            padding: 0;
            height: 100px;
            width: 390px;
        }

        h4 {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <br><br>
    <div class="container">
        <h1>Palindrome Checker</h1>
        <?php
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
            $text = $_POST['text'];

            $reverse_text = strrev($text);

            if($text === $reverse_text){
                echo "<h3> Yes, $text is palindrome. </h3>";
            }else{
                echo "<h3> No $text is not palindrome. </h3>";
            }
            // header("location: palindromeChecker.php");
        }

    ?>
        <form action="" method="POST">
            
                <textarea name="text" id="text" placeholder="Type Your Word here...." required></textarea>
            <input type="submit" name="submit" value="Submit">
        </form>

        <h4>Designed by Santosh Phaiju</h4>
    </div>


    

</body>

</html>