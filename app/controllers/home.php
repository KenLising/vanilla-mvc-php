<?php  
	class Home extends Controller
	{
		public function index()
		{
			$user = User::first();
			$this->view('home/index', ['name' => $user->username]);
		}

		public function create($username, $email)
		{
			$user = new User();
			$user->username = $username;
			$user->email = $email;
			$user->save();
			echo "Save";
		}
	}
?>