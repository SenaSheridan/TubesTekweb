<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
	<h1>Daftar Kota</h1>
	
	<?php
		$template = array('table_open' => '<table border="1">');
		$this->table->set_template($template);
		$this->table->set_heading("Country Code", "Language","IsOfficial","Percentage");
		foreach($countrylanguage->result() as $r){
		$this->table->add_row($r->CountryCode,$r->Language,$r->IsOfficial,$r->Percentage);

		}
	echo $this->table->generate();
	?>
	</body>
	</html>