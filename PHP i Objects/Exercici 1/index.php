<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP i Objects</title>
</head>
<body>

   <?php
   
   class Employee {
       public $nom;
       public $sou;

       function initialize ($nom,$sou) {
            $this->nom = $nom;
            $this->sou = $sou;
       }
       function print() {
           if ($this->sou > 6000) {
               return "$this->nom paga impuestos";
           } else {
               return "$this->nom no paga impuestos";
            }
       }
   }
   
   $employee1 = new Employee ();
   $employee1->initialize ("Julia",6000);
   echo $employee1->print();


   ?>
</body>
</html>