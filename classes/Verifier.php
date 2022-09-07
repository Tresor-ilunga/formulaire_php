<?php
    class Verifier {

		public static function syntaxeEmail($email) {

			if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
				return true;
			}
			else {
				return false;
			}

		}

		public static function doublonEmail($email) {

			require('src/connexion.php');
			$requete = $bdd->prepare('SELECT COUNT(*) AS nombre FROM users WHERE email = ?');
			$requete->execute([$email]);

			while($emailBDD = $requete->fetch()) {

				if($emailBDD['nombre'] != 0) {
					return true;
				}
				else {
					return false;
				}

			}
			
		}

	}