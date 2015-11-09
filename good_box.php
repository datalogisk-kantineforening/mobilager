<script>

function increaseAmount(id){}


function decreaseAmount(id){}


</script>

<?php

  function writeGoodsBox( $id , $navn , $beholdning, $fritekst){
  $minus   = "minusvare{$id}";
  $plus   = "plusvare{$id}";
  
  if ($fritekst == FALSE){
    $stringo = "<tr>";
    $stringo  .= "<button id='{$minus}' type='button' onclick='decreaseAmount({$minus});'> - </button>" .
                 "<input type='number' id='{$id}-beh' name='{$id}-beh' value='{$beholdning}'> <br/>";
    $stringo .=  "<p id='{$id}-navn' name='{$id}-nav'>{$navn}</p>";
    $stringo .=  "<button id='{$plus}' type='button' onclick='increaseAmount({$plus});'> + </button>" .
                 "</tr>";
     } else {
    $stringo =   "<tr>";
    $stringo  .= "<button id='newMinus' type='button' onclick='decreaseAmount(\"newMinus\"});'> - </button>" .
                 "<input type='number' id='new-beh' name='new-beh' placeholder='0'> <br/>" .
                 "<input type='text' id='new-navn' name='new-navn' placeholder='Ny vare'> <br/>" .
                 "<button id='newPlus' type='button' onclick='increaseAmount(\"newPlus\");'> + </button>" .
                 "</tr>";
  }
  return($stringo);
  }


// function writeNewBox()
function writeCommitBox(){
  $stringo = "<tr>";
  $stringo  .= '<button id="revert" type="button" onclick="refresh();">Nulstil</button>' .
               '<input type="text" id="kantinemedlem" name="kantinemedlem" placeholder="Navn"> <br/>' .
               '<input type="text" id="commit-besked" name="commit-besked" placeholder="Bemærkning">' .
               '<button id="commit" type="Submit">Commit</button>' ; 
  $stringo .= "</tr>";

  return($stringo);
  }


?>
