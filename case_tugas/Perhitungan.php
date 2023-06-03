<?php
    class Perhitungan 
    {
        public function totalNilai($a)
        {
            if (!is_array($a)) {
                return $a;
            }
            $total = 0;
            for ($i = 0; $i < 50; $i++) { 
                $total += $a[$i];
            }
            return $total;
        }
    
        public function rataanNilai($a)
        {
            if (!is_array($a)) {
                return $a;
            }
            return $this->totalNilai($a) / count($a);
        }
        
        public function maximumNilai($a=1)
        {
            if (!is_array($a)) {
                return $a;
            }
            $max = $a[0];
            foreach ($a as $n) {
                if ($max < $n) {
                    $max = $n;
                }
            };
            return $max;
        }
    
        public function minimumNilai($a=1)
        {
            if (!is_array($a)) {
                return $a;
            }
            $min = $a[0];
            foreach ($a as $n) {
                if ($min > $n) {
                    $min = $n;
                }
            };
            return $min;
        }
    }