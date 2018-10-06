<?php
	if ($_POST['login'] != '' && $_POST['oldpw'] != '' && $_POST['submit'] == 'OK')
	{
		if (!file_exists('../private/passwd') || $_POST['newpw'] == '') {
			exit ("ERROR\n");
		}
		else {
			$array = file_get_contents('../private/passwd');
			if ($array == FALSE)
				exit ("ERROR\n");
			$array = unserialize($array);
			$ok = 0;
			$i = 0;
			foreach($array as $keypair) {
				if ($keypair['login'] == $_POST['login'] &&
				$keypair['passwd'] == hash('whirlpool', $_POST['oldpw'])) {
					$array[$i]['login'] = $_POST['login'];
					$array[$i]['passwd'] = hash('whirlpool', $_POST['newpw']);
					file_put_contents('../private/passwd', serialize($array));
					echo "OK\n";
					$ok = 1;
					break;
			 	}
			 	else
			 		$i++;
			}
			if (!$ok)
				exit ("ERROR\n");
		}
	}
	else
		exit ("ERROR\n");
?>