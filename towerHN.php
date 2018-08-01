<?php
//Tower of Hanoi
Echo "<h2> Solution to Tower of Hanoi with 3 poles A, B, C </h2>";
function move($n,$from,$to,$via) {
if ($n === 1) {
echo "<p> Move disk from pole $from to pole $to </p>";
} else {
        move($n-1,$from,$via,$to);
        move(1,$from,$to,$via);
        move($n-1,$via,$to,$from);
}
}
move(3,"A","B","C");
/**** Output 
 Move disk from pole A to pole B

Move disk from pole A to pole C

Move disk from pole B to pole C

Move disk from pole A to pole B

Move disk from pole C to pole A

Move disk from pole C to pole B

Move disk from pole A to pole B 
***/
?>
