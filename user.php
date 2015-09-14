<?php


/**
 * interface to validate user details
 *
 */

interface Validator
{

    public function validateFname();
    public function validateLname();
    public function validateEmail();
    public function validatePwd();
 }



/**
 * class to validate user details
 *
 * @author Subramanian.V
 * @since 6.1
 * @copyright (c) 2015
 *
 */
class uservalidator implements validateFname, validateLname, validateEmail, validatePwd
{

	/**
	 * validate firstname
	 *
	 * @author subramanian.v
	 * @param $fname string
	 * @since 6.1
	 * @return boolean
	 */
    public function validateFname($fname)
    {
       return 1;
    }

	/**
	 * validate last name
	 *
	 * @author subramanian.v
	 * @param $lname string
	 * @since 6.1
	 * @return boolean
	 */
    public function validateLname($lname)
    {
       return 1;
    }

	/**
	 * validate email
	 *
	 * @author subramanian.v
	 * @param $email string
	 * @since 6.1
	 * @return boolean
	 */
	public function validateEmail($email)
    {
       return 1;
    }


	/**
	 * validate password
	 *
	 * @author subramanian.v
	 * @param $pwd string
	 * @since 6.1
	 * @return boolean
	 */
	public function validatePwd($pwd)
    {
       return 1;
    }
}


/**
 * class to validate user details
 *
 * @author Subramanian.V
 * @since 6.1
 * @copyright (c) 2015
 *
 */
class user
{
    private $fname;
    private $lname;
    private $email;
	private $pwd;

	/**
	 *
	 * @param type $validatorObj
	 * @author Subramanian.V
	 */
    public function __construct($validatorObj, $userInfo)
    {
        $this->validatorObj  = $validatorObj;

		$this->setFname($userInfo['fname']);
		$this->setLname($userInfo['lname']);
		$this->setEmail($userInfo['email']);
		$this->setPwd($userInfo['pwd']);
    }


	public function setFname($fname) {
		$this->fname = $fname;
	}

	public function getFname() {
		return $this->fname;
	}

	public function setLname($lname) {
		$this->lname = $lname;
	}

	public function getLname() {
		return $this->lname;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}


	public function setPwd($pwd) {
		$this->pwd = $pwd;
	}

	public function getPwd() {
		return $this->pwd;
	}


	/**
	 * @author subramanian.v
	 * @since 6.1
	 * @return int
	 */
    public function validate()
    {
        if ($this->validateFname($this->fname) && $this->validateLname($this->lname)
			 && $this->validateEmail($this->lname) && $this->validatePwd($this->lname)) {

            return 1;
        }

        return 0;
    }

}

$userInfo = array('fname' => 'subramanian', 'lname' => 'v', 'email' =>  'subramanian.v@impelsys.com', 'pwd' => '123456');
$validatorObj = new uservalidator();
$user = new user($validatorObj, $userInfo);
$user->validate();




