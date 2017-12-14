<h1>Your tasks</h1>

<?php
foreach ($query->result() as $row) 
			{
				echo "<h2>".$row->title."</h2>";
			}
echo '<hr>';

//calling controller fron another module
//method one


// $this->load->module('nofun');
// $this->nofun->sayhallo();
// echo '<hr>';

// echo Modules::run('nofun/sayhallo');


// $name = 'Eddie';
// $this->load->module('nofun');
// $this->nofun->sayhallo($name);
// echo '<hr>';

// echo Modules::run('nofun/sayhallo', $name);

$firstname = 'Eddie';
$lastname = 'Breuer';
$this->load->module('nofun');
$this->nofun->sayhallo($firstname, $lastname);
echo '<hr>';

echo Modules::run('nofun/sayhallo', $firstname, $lastname);

			?>