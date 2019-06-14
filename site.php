<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        <?php 
// PHP "Hello World" & 'echo' syntax
            echo("<h1>Hiroyuki's Site</h1>");
            echo("<hr>");
            echo("<h2>This is my site</h2>");

// PHP variables
            $NameX = "Scorpion";
            $NameY = "Sub-Zero";
            echo("This is a variable ($NameX) <br>");
            echo("This is another variable ($NameY) <br>");
            echo("Let's use the variables: <br>");
            // '\' can be used to escape the quotation marks OR a special character trait ie.) $
            echo("\"$NameX is stronger than $NameY.\" <br>");

// PHP data types --> similar to other languages
            $phrase = "This variable type is a string, hinted by the quotation marks.";
            $age = 30; // This is an integer type "NO decimals"
            $gpa = 3.33; // This is a double or float type "YES on decimals"
            $isRight = false; // This is a boolean type

// String exercises:
            $header = "The birth place of text knowledge.";
            echo("<h2>String Academy</h2>");
            echo("<h4>$header</h4>");
            echo "Index string by array position >> \$variable[i] <br>";
            echo "ie.) \$header[0] = $header[0], \$header[4] = $header[4], and \$header[10] = $header[10] <br>";
            echo "<br> Let's practice function: str_replace(target-text, new-text, target-string)";
            $stringPhrase = "This is the test phase.";
            echo "<br>Ex.) String phrase: $stringPhrase<br>";
            echo "...Now using: str_replace(\"test\", \"best\", \"\$stringPhrase\")";
            echo "<br>...We get: ";
            echo str_replace("test", "best", $stringPhrase);
        ?>

    </body>
</html>