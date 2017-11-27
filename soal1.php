<?php 
class Mobil{
    
       
    public $roda = 4;
	public $kecepatan = 0;
	public $warna = 'putih'; 
	public $gigi = 0; //gigi normal
	
	public function tancapGas($p=0){ //method sperti bisa dibilang jg Setter
		
	      $this->kecepatan = $this->kecepatan + $p; //kecepatan bertambah
	}
	
	public function ngeRem($q=0){
		
		$this->kecepatan = $this->kecepatan - $q; //kecepatan berkurang
	}
	
	public function ubahGigi($r=0){
		
		$this->gigi = $r; //set gigi
	}
	
	public function getSpeed(){ 
		
		return $this->kecepatan;
	}
	public function getGigi(){ 
		
		return $this->gigi;
	}

	public function getRem()
	{
		return $this->ngeRem();
	}
		
}
?>
<?php 
$obj = new Mobil; 
$obj->tancapGas(30); 
echo 'Kecepatan : '.$obj->getSpeed().'km/jam'; 
$obj->ubahGigi(3); 
echo '<br/>';
echo 'Gigi : '.$obj->getGigi(); 
echo '<br/>';
$obj->ngeRem(10);
echo "Direm sebesar ".$obj->getRem().' km/jam <br>'; 
echo 'Kecepatan mobil setelah direm : '.$obj->getSpeed().'km/jam'; 