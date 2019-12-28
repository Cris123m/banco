<?php 
class modelUser{	
    private $user;
    private $password;

	public function getUser(){
		return $this->user;
	}
	public function setUser($user){
		$this->user = $user;
	}

	public function getPassword(){
		return $this->password;
	}
	public function setPassword($password){
		$this->password = $password;
	}	

	public function __CONSTRUCT()
	{
		try
		{
            include_once 'database.php';
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($user,$pass)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE user = ? and pass = ?");

			$stm->execute(array($user,$pass));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(modelUser $data)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE user = ?");

			$stm->execute(array($data->getUser()));
			if ($stm->fetch(PDO::FETCH_OBJ)){
				return -1;
			}

		//
		$sql = "INSERT INTO usuario (user,pass) VALUES (?,?)";

		$this->pdo->prepare($sql)
			->execute(
				array(
                    $data->getUser(),                    
                    $data->getPassword()
                )
			);

			return $this->pdo->lastInsertId();
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
