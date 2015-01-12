<?php
	include("index2.php");
?>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<style type="text/css">
		.box{
			width: 150px;
			height: 150px;
			margin-top: 10px;
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<p></p>
	<?php
		Class Human{
			public $name;
			public function __construct(){
				$this->name = "Human";
			}
			public function ShowName(){
				echo($this->name);
			}
		}
		Class Medunla extends Human{
			public function __construct($input){
				$this->name = $input;
			}
		}

		$A = new Medunla("Mowglii");
		$A->ShowName();
	?>
	<script type="text/javascript">
		function Human(input){
			this.name = input;
			this.ShowName = function(){
				alert(this.name);
			}
		}
		var Medunla = new Human("Medunla");
		Medunla.ShowName();
		$("p").text(Medunla.name);

	</script>
</body>
</html>