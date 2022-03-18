Trick (one line if-statement:
<?php echo (isset($_GET["param"]) ? "The parameter exists" : "No such parameter"); ?>

Explanation:
<?php ?> ==> Is for starting a php code.
echo ==> Printing data.
(isset($_GET["param"]) ? ==> This is the condition of the if-statement.
 "The parameter exists" : ==> If the condition is true this will execute (before the colon).
 "No such parameter"); ==> If the condition is false this will execute (after the colon).
