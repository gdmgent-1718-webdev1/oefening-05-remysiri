<?php

	for($i = 0; $i < 22; $i++)
	{
		if ($i < 16)
		{
			echo "<p> $i jaar: is te jong voor deze film.</p>";
		}
		elseif ($i > 16 && $i < 18)
		{
			echo "<p> $i jaar: je hebt ouderlijk toezicht nodig.</p>";
		}
		elseif ($i > 18)
		{
			echo "<p> $i of ouder: “Je bent al variabele jaar. Geniet van de film!</p>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>