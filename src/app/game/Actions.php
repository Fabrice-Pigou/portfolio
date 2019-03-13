<?php
namespace src\app\game;
use src\app\game\Sessions;

class Actions
{
    private $oSessions;

    public function __construct() {
		$this->oSessions = new Sessions;
    }
    
    /**
     * Si on cherche a exécuter une action
     * @param $data array ['action'] ['value']
     */
    public function action($data = []){
        switch ($data['action']) {
            case 'moving':
                $data = explode(':', $data['value']);
                $this->oSessions::setRegion($data[0]);
                $this->oSessions::setHouse($data[1]);
                $this->oSessions::setFloor($data[2]);
                $this->oSessions::setCoordinate($data[3]);
            break;

            case 'turn':
                $this->oSessions::setDirection($data['value']);
            break;

            case 'jump':
                if ($this->oSessions::getFloor() >= 80) {
                    $this->stairs($_GET['value']);
                }
                else{
                    $this->jump($_GET['value']);
                }
            break;

        }
    }
    /**
     * Faire pivoter la vue vers la droite
     * @param string $direction
     * @return string
     */
	public function turnRight($direction)
	{
		switch ($direction) {
            case 'n':
            return 'e';
            break;

            case 'e':
            return 's';
            break;

            case 's':
            return 'w';
            break;

            case 'w':
            return 'n';
            break;
        }
    }
    
    /**
     * Faire pivoter la vue vers la gauche
     * @param string $direction
     * @return string
     */
	public function turnLeft($direction)
	{
		switch ($direction) {
            case 'n':
            return 'w';
            break;

            case 'w':
            return 's';
            break;

            case 's':
            return 'e';
            break;

            case 'e':
            return 'n';
            break;
        }
    }

    /**
     * Faire demis tour
     * @param string $direction
     * @return string
     */
	public function return($direction)
	{
		switch ($direction) {
            case 'n':
            return 's';
            break;

            case 'e':
            return 'w';
            break;

            case 's':
            return 'n';
            break;

            case 'w':
            return 'e';
            break;
        }
    }

    /**
     * Avancer
     * @param string $direction
     * @return string
     */
	public function jump($jump)
	{
        $direction = $_SESSION['view']['direction'];
		switch ($direction) {
            case 'n':
            $_SESSION['view']['coordinate'] += $jump ;
            break;

            case 's':
            $_SESSION['view']['coordinate'] -= $jump;
            break;

            case 'e':
            $_SESSION['view']['coordinate'] += '0.'.$jump;
            break;

            case 'w':
            $_SESSION['view']['coordinate'] -= '0.'.$jump;
            break;
        }
    }

    /**
     * Avancer dans les escalier
     * @param string $direction
     * @return string
     */
	public function stairs($jump)
	{
		// $_SESSION['view']['coordinate'] += $jump ;
        $coordinate = $this->oSessions::getCoordinate();
        $this->oSessions::setCoordinate($coordinate += $jump);
    }
}
