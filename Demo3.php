<html>
    <head>
        <title>
        My First Web Page
        </title>
    </head>
    <body>
    <center>
        <h1>
            <?php 
                $a = 2;
                $b = 3;
                $month = "December";
                
                if($a == $b) echo "a is equal to b<br/>";
                if($a === $b) echo "a is identical to b<br/>";
                if($month == "December") echo "It is Christmas time<br/>";

                if($a > $b) echo "a is greater than b<br/>";
                if($a < $b) echo "a is less than b<br/>";
                if($a >= $b) echo "a is greater than or equal b<br/>";
                if($a <= $b) echo "a is less than or equal b<br/>";

                $c = 1;
                $d = 0;

                // echo ($c AND $d)."<br/>";
                // echo ($c OR $d)."<br/>";
                // echo ($c XOR $d)."<br/>";
                if($c AND $d) echo ($c AND $d)."<br/>";
                if($c OR $d) echo ($c OR $d)."<br/>";
                if($c XOR $d) echo ($c XOR $d)."<br/>";

                $bank_balance = 120;
                $savings = 100;
                if($bank_balance < 100) {
                    $money = 1000;
                    $bank_balance += $money;

                    echo "<br/>";
                    echo "The bank balance is:".$bank_balance;
                }
                else {
                    $savings += 50;
                    $bank_balance -= 50;

                    echo "<br/>";
                    echo "Your savings is:".$savings;
                    echo "<br/>";
                    echo "The bank balance is:".$bank_balance;
                }

                echo "<br/>";
                $page = "Web Page";
                switch($page){
                    case "Home":
                        echo "You choose Home<br/>";
                        break;
                    case "Login":
                        echo "You choose Login<br/>";
                        break;
                    case "Links":
                        echo "You choose Links<br/>";
                        break;
                    default:
                        echo "None of the choices is correct.<br/>";
                }

                $fuel = 10;
                echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";



            ?>
        </h1>
    </center>
    </body>
</html>