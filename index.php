<?php
include "./Function.php";
include "./CedulaFunction.php";
//Primera Variable
$UserCedula = 0;
//Primera Función
MasterSaludo();

$UserCedula1=readline();


$UserCedula1=UserCedula($UserCedula1);


echo $UserCedula1;

$UserCedula2=readline();


if ($UserCedula2 == 52478385){
  echo "\nHola Olga, Por favor elije la Materia de la cual deseas conocer tu nota\n";
}
else if($UserCedula2 == 1001287656){
  echo "\nHola David, Por favor elije la Materia de la cual deseas conocer tu nota\n";
}
else if($UserCedula2 == 1001285369){
  echo "\nHola Juan, Por favor elije la Materia de la cual deseas conocer tu nota\n";
}

$elegirMateria= 0;
MasterElegirMateria();

$elegirMateria= readline();

switch($elegirMateria){
  case "1":
  echo "\nUsted ha elegido la materia de Matemáticas";
  break;
  case "2":
  echo "\nElegiste la materia de Sociales";
  break;
  case "3":
  echo "\nElegiste la materia de Educación Fisica";
  break;
  case "4":
  echo "\nElegiste la materia de Biología";
  break;
  case "5":
  echo "\nElegiste la materia de Español";
  break;
  default:
  echo "\nElegiste una opción incorrecta";
}

const MATEMATICJUAN = 4 . ", Looser";
const SOCIALJUAN = 7 . ", Regular";
const EDUCACIONJUAN = 9 . ", Sobresaliente";
const BIOLOGIAJUAN = 9 . ", Sobresaliente";
const ESPANOLJUAN = 6 . ", Regular";

const MATEMATICOLGA = 4 . ", Looser";
const SOCIALOLGA = 2 . ", Looser";
const EDUCACIONOLGA = 10 . ", Sobresaliente";
const BIOLOGIAOLGA = 4 . ", Looser";
const ESPANOLOLGA = 8 . ", Sobresaliente";

const MATEMATICDAVID = 10 . ", Sobresaliente";
const SOCIALDAVID = 10 . ", Sobresaliente";
const EDUCACIONDAVID = 9 . ", Sobresaliente";
const BIOLOGIADAVID = 7 . ", Regular";
const ESPANOLDAVID = 8 . ", Sobresaliente";

//Condicional Tabla Olga Orozco

if (($UserCedula2 == 52478385) && ($elegirMateria == 1) ){
  echo "\n\nHola Olga, tu nota es :" .  MATEMATICOLGA;
}
else if (($UserCedula2 == 52478385) && ($elegirMateria == 2)){
  echo "\n\nHola Olga, tu nota es :" .  SOCIALOLGA;
}
else if (($UserCedula2 == 52478385) && ($elegirMateria == 3)){
  echo "\n\nHola Olga, tu nota es :" .  EDUCACIONOLGA;
}
else if (($UserCedula2 == 52478385) && ($elegirMateria == 4)){
  echo "\n\nHola Olga, tu nota es :" .  BIOLOGIAOLGA;
}
else if (($UserCedula2 == 52478385) && ($elegirMateria == 5)){
  echo "\n\nHola Olga, tu nota es :" .  ESPANOLOLGA;
}

//Condicional Tabla David López

if (($UserCedula2 == 1001287656) && ($elegirMateria == 1) ){
  echo "\n\nHola David, tu nota es :" .  MATEMATICDAVID;
}
else if (($UserCedula2 == 1001287656) && ($elegirMateria == 2)){
  echo "\n\nHola David, tu nota es :" .  SOCIALDAVID;
}
else if (($UserCedula2 == 1001287656) && ($elegirMateria == 3)){
  echo "\n\nHola David, tu nota es :" .  EDUCACIONDAVID;
}
else if (($UserCedula2 == 1001287656) && ($elegirMateria == 4)){
  echo "\n\nHola David, tu nota es :" .  BIOLOGIADAVID;
}
else if (($UserCedula2 == 1001287656) && ($elegirMateria == 5)){
  echo "\n\nHola David, tu nota es :" .  ESPANOLDAVID;
}

//Condicional Tabla David López

if (($UserCedula2 == 1001285369) && ($elegirMateria == 1) ){
  echo "\n\nHola Juan, tu nota es :" .  MATEMATICJUAN;
}
else if (($UserCedula2 == 1001285369) && ($elegirMateria == 2)){
  echo "\n\nHola Juan, tu nota es :" .  SOCIALJUAN;
}
else if (($UserCedula2 == 1001285369) && ($elegirMateria == 3)){
  echo "\n\nHola Juan, tu nota es :" .  EDUCACIONJUAN;
}
else if (($UserCedula2 == 1001285369) && ($elegirMateria == 4)){
  echo "\n\nHola Juan, tu nota es :" .  BIOLOGIAJUAN;
}
else if (($UserCedula2 == 1001285369) && ($elegirMateria == 5)){
  echo "\n\nHola Juan, tu nota es :" .  ESPANOLJUAN;
}

MasterDespeida();
