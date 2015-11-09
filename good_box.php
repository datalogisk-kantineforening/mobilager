<script>

function increaseAmount(id){}


function decreaseAmount(id){}


</script>

<?php

function writeGoodsBox(id, navn, beholdning){
  $minus   = "minusvare{$id}";
  $plus   = "plusvare{$id}";
  
  $stringo = "<tr>";
  $stringo  .= '<button id="{$minus}" type="button" onclick="decreaseAmount({$minus});"> - </button>' .
               '<input type="number" id="{$id}-beh" name="{$id}-beh" value="{$beholdning}"> <br/>' .
               '<input type="number" id="{$id}-navn" name="{$id}-nav value="{$navn}">' .
               '<button id="{$plus}" type="button" onclick="increaseAmount({$plus});"> + </button>';

  $stringo .= "</tr>";

  return($stringo);
  }


// function writeNewBox()


function writeCommitBox(){

  }

?>
