<?php
include 'Perhitungan.php';
class Elemen extends Perhitungan
{
    public $a = array( );
    public $random;
    protected $data;

    public function __construct($data) {
        $this->data =  $data;
        for ($i=0; $i <= $data; $i++) { 
            $this->a[$i] = $i;
        }
       
    }
    public function random()
    {
        $this->random = array_rand($this->a,50);
        foreach ($this->random as $key => $value) {
            echo "Elemen ke- " .$key." : ". $value. "<br>";
        }
        return $this->random;
        
    } 
}
$ele = new Elemen(100);
$ele->random();
echo "Total Nilai: ". $ele->totalNilai($ele->random) . "<br>" ;
echo "Rata-rata: ". $ele->rataanNilai($ele->random). "<br>";
echo "Maximum: ". $ele->maximumNilai($ele->random). "<br>" ;
echo "Minimum: ". $ele->minimumNilai($ele->random). "<br>" ;