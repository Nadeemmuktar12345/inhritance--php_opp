
           
<!DOCTYPE html>
<html>
<head>
	<title>firstcode</title>
</head>
<body>
	<?php
    class Tv{
    	public $model;
    	public $volume;
             function volumeup(){
    		$this->volume++;
    	}
    	function volumedown(){
    		$this->volume--;
    	}
    	function __Construct($v,$m){
           $this->model=$m;
           $this->volume=$v;
    	}
 }
 class TvwithTimer extends Tv{
    public $Timer=true;
 }
 $tv=new TvwithTimer('def',3);
 echo $tv->volume;

?></body>
</html>
