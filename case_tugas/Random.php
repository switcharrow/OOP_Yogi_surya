<?php
include 'Perhitungan.php';
class Elemen extends Perhitungan
{
    public $a = array( );
    public $random;

    public function __construct() {
        for ($i=0; $i <= 100; $i++) { 
            $this->a[$i] = $i;
        }
       
    }
    public function random()
    {
        $this->random= array_rand($this->a,50);
        foreach ($this->random as $key => $value) {
            echo "Elemen ke- " .$key." : ". $value. "<br>";
        }
        return $this->random;
        
    } 
}
$ele = new Elemen();
$ele->random();
echo "<br>Total Nilai: ". $ele->totalNilai($ele->random) . "<br>" ;
echo "Rata-rata: ". $ele->rataanNilai($ele->random). "<br>";
echo "Maximum: ". $ele->maximumNilai($ele->random). "<br>" ;
echo "Minimum: ". $ele->minimumNilai($ele->random). "<br>" ;