<?php
class Radioprogramma {
    private $programmanaam;
    private $omschrijving;
    private $liedjes;
    public function __construct($programmanaam, $omschrijving, $liedjes) {
      $this->programmanaam = $programmanaam;
      $this->omschrijving = $omschrijving;
      $this->liedjes = $liedjes;
    }
  
    public function getLiedjes() {
      return $this->liedjes;
    }

    public function getProgramma()
    {
        return array($this->programmanaam, $this->omschrijving);
    }
  }
$programma = new Radioprogramma("Top 40", "Een programma met de 40 populairste liedjes van de week", array("Liedje 1", "Liedje 2", "Liedje 3"));

echo "Naam van het programma: " . $programma->getProgramma()[0] . "<br>";
echo "Omschrijving van het programma: " . $programma->getProgramma()[1] . "<br>";
echo "Lijst met liedjes: <br>";

foreach ($programma->getLiedjes() as $liedje) {
    echo $liedje . "<br>";
}
?>