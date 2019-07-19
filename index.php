<?php 
class Pairwise {

    public $n; // number of integers
    public $bits = 32; // ssuming representation of each element is in 32 bit
    public $sum = array();
    public $result = 0;

    private function convert($val, $key) {
        $int = intval($val);
        $this->sum[$key] += $int;
        return $int;
    }

    public function init() {
        $t = stream_get_line(STDIN, 20000000000, PHP_EOL);
        $this->sum = array_fill(0, $this->bits, 0);
        $numbers = explode(' ', stream_get_line(STDIN, 20000000000, PHP_EOL));
        for ($j=0; $j<$t; $j++) {
            // each number is 32bit representation
            $tmp = array_reverse(str_split(decbin($numbers[$j])));
            array_walk($tmp, array($this, 'convert'));
        }
        for($i = 0; $i < $this->bits; $i++) {
            if ($this->sum[$i] !== 0) {
                $this->result += $this->sum[$i] * ($this->sum[$i] - 1) / 2 * pow(2, $i);
            }
        }
        echo $this->result . PHP_EOL;
    }

}


$pairwise = new Pairwise();
$pairwise->init();
?>