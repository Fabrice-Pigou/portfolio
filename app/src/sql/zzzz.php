<?php 
namespace app\src\sql;
use \app\core\Database;

class Patients extends Database
{
/*********************************************************************/
/*********************************************************************/
/**																	**/
/**																	**/
	public function addPatient($data = array()){

		$pdo = $this-> getPDO();

		$req = $pdo -> prepare("
			INSERT INTO patients (nom, email, phone)
			VALUES(:nom, :email, :phone)
		") or die(print_r($pdo->errorInfo()));
		$req->execute(array(
			'nom' => $data['nom'],
			'email' => $data['email'],
			'phone' => $data['phone']
		));

		return $pdo->lastInsertId();
	}
/**																	**/
/**																	**/
/*********************************************************************/
/*********************************************************************/



/*********************************************************************/
/*********************************************************************/
/**																	**/
/**																	**/
	public function countAll(){

		$pdo = $this-> getPDO();

		$req = $pdo->query('
			SELECT COUNT(*) AS nbr 
			FROM patients
		') or die(print_r($pdo->errorInfo()));

		$data = $req->fetch();
		return $data['nbr'];
	}
/**																	**/
/**																	**/
/*********************************************************************/
/*********************************************************************/



/*********************************************************************/
/*********************************************************************/
/**																	**/
/**																	**/
	/**
	 * le nom du patient pour un email déjà utilisé
	 * @param  string $email l'adresse mail
	 * @return array        le nom et l'id
	 */
	public function getOne($id){

		$pdo = $this-> getPDO();

		$req = $pdo->prepare('
			SELECT nom, email, phone
			FROM patients 
			WHERE id = ?
		') or die(print_r($pdo->errorInfo()));
		$req->execute(array($id));

		return $req->fetch();
	}

	public function getAll(){

		$pdo = $this-> getPDO();

		$req = $pdo->query('
			SELECT info
			FROM patients 
		') or die(print_r($pdo->errorInfo()));

		return $req->fetch();
	}
/**																	**/
/**																	**/
/*********************************************************************/
/*********************************************************************/



/*********************************************************************/
/*********************************************************************/
/**																	**/
/**																	**/
	public function updatePhone($id, $phone){

		$pdo = $this-> getPDO();

		$req = $pdo->prepare('
			UPDATE patients
			SET phone = ?
			WHERE id = ?
		') or die(print_r($pdo->errorInfo()));
		$req->execute(array($phone, $id));

	}
/**																	**/
/**																	**/
/*********************************************************************/
/*********************************************************************/



/*********************************************************************/
/*********************************************************************/
/**																	**/
/**																	**/
	public function deletePatient($id){

		$pdo = $this->getPDO();

		$req = $pdo->prepare('
			DELETE FROM patients
			WHERE id = ?
		') or die(print_r($pdo->errorInfo()));
		$req->execute(array($id));

	}
/**																	**/
/**																	**/
/*********************************************************************/
/*********************************************************************/


/*********************************************************************/
/*********************************************************************/
/**																	**/
/**																	**/

/**																	**/
/**																	**/
/*********************************************************************/
/*********************************************************************/
}