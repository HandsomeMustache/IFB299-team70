<?php
/**Link.php
* A class for creating links with restrictions
* no constructor
*/
class link
{
	//Html Varibles
	private $link = '';
	private $class = '';
	private $text = '';

	//restriction
	private $loggedOn = false;
	private $loggedOff = false;
	private $adminOnly = false;
	private $moderatorOnly = false;
	private $user = '';
	private $valid = true;

	//functions
	//Setters--------------------------------------------
	public function setLink($new){
		$this->link = $new;
	}
	public function setClass($new){
		$this->class = $new;
	}
	public function setText($new){
		$this->text = $new;
	}
	public function setloggedOn($state){
		$this->loggedOn = $state;
	}
	public function setLoggedOff($state){
		$this->loggedOff = $state;
	}
	public function setAdminOnly($state){
		$this->adminOnly = $state;
	}
	public function setModeratorOnly($state){
		$this->moderatorOnly = $state;
	}
	public function setUser($owner){
		$this->user = $owner;
	}

	//Getters--------------------------------------------

	public function getLink($new){
		$this->link = $new;
	}
	public function getClass($new){
		$this->class = $new;
	}
	public function getText($new){
		$this->text = $new;
	}
	public function getloggedOn($state){
		$this->loggedOn = $state;
	}
	public function getLoggedOff($state){
		$this->loggedOff = $state;
	}
	public function getAdminOnly($state){
		$this->adminOnly = $state;
	}
	public function getModeratorOnly($state){
		$this->moderatorOnly = $state;
	}
	public function getUser($owner){
		$this->user = $owner;
	}

	//Utilitie Functions------------------------------------
	//Checks its valid to display to the current user
	public function validate($currentUser = ''){
		include_once '/../functions/users.php';
		$this->valid = true;

		if ($currentUser == $this->user){
			$this->valid = false;
		}

		if ($this->loggedOn == true && !checkLoggedOn()) {
			$this->valid = false;
		}

		if ($this->loggedOff == true && checkLoggedOn()) {
			$this->valid = false;
		}

		//Placeholder for admin and moderator checks
	}

	public function printLink(){
		if ($this->valid == true) {
			echo '<a class="'.$this->class.'" href="'.$this->link.'">'.$this->text.'</a>';
		}
	}
}
?>