<?php

		if(isset($_POST['formsend'])) 
		{

		extract($_POST);


			if (!empty($password) && !empty($semail) && !empty($cpassword)&& !empty($prenom)&& !empty($nom)&& !empty($age)&& !empty($adresse)){

				if ($password==$cpassword) {

					$options = [
					'cost' => 12,
				];

			$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
				
				
				

			

			$q = $db->prepare("INSERT INTO users(email,password,prenom,nom,age,adresse) VALUES(:email,:password,:prenom,:nom,:age,:adresse)");
				$q->execute([
						'email'=> $semail,
						'password'=> $hashpass,
                        'prenom'=>$prenom,
                        'nom'=>$nom,
                        'age'=>$age,
                        'adresse'=>$adresse,

					]);
					echo "Votre incription a bien été pris en compte";

			}
			
			}
			 
		}



?>