<?php

function UserCedula ($xCedule){ 
  $yCedule = strlen ($xCedule);
  
  if($yCedule <= 10){
     return  "\nPor favor confirme su cédula\n\n";
  }
  
else{
  return  "\nCédula INCORRECTA, por favor intente de nuevo \n " . "Recuerde que su número de Cédula NO puede contener mas de 9 caracteres ";

} 
}