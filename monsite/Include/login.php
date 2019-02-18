<?php 
 


	if (isset($_POST['formlogin'])) 
	{
		extract($_POST);
		if (!empty($lemail)&& !empty($lpassword) ) 
				{
					$q=$db->prepare("SELECT * FROM users WHERE email = :email");
					$q->execute(['email'=> $lemail]);
					$result = $q->fetch();

					if ($result== true) 
					{

							if (password_verify($lpassword,$result['password'])) 
							{
							        session_start();
							        $_SESSION['id'] = $result['id'];
							        $_SESSION['email'] = $lemail;
							        header('Location: membre.php');
									exit();

							 }


							else
							{
								echo "le mot de passe est erroné";
							}

	
					}
					else
					{
							echo "Le compte portant l'email". $lemail ." n'existe pas";

					}
			
				}
		else
		{
			echo "Veuillez completer l'ensemble des champs";

		}
	}



 ?>