<?php


class User {

    private $id;

    public $login;
    
    public $password;

    public $email;

    public $firstname;

    public $lastname;
    
    public $pdo;

    public $msg;
    
    public function __construct (){

        $this->pdo = new pdo ("mysql:host=localhost; dbname=classes", "root", "");
    }
        
    public function register ($login, $password, $email, $firstname, $lastname) 
    {
        $this->login = $login;
        $this->password = $password;
        $this->email =  $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;

        
        $req = $this->pdo->prepare("INSERT INTO `utilisateurs`(`login`, `password`, `email`, `firstname`, `lastname`) VALUES (?,?,?,?,?)");

        if($req->execute(array($login, $password, $email, $firstname, $lastname))){
            echo "Account created";
        }

        // $insert = "INSERT INTO `utilisateurs`(`login`, `password`, `email`, `firstname`, `lastname`) VALUES ('$login','$password','$email','$firstname','$lastname')";
        // $insertquery = $this->bdd->query($insert);



        // $req = mysqli_query($this->bdd,"SELECT * FROM `utilisateurs` ");
        // $reqquery = $req -> fetch_array(MYSQLI_ASSOC);
    }

    public function connect ($login, $password){

        $this->login = $login;
        $this->password = $password;
        $this->msg = "";
    


        $req = $this->pdo->prepare ("SELECT id, login, password FROM utilisateurs WHERE login='$login' AND password='$password'");
        $req->execute();
        $reqfetch = $req->fetchAll();

        if($reqfetch == true){

                $_SESSION['id'] = $reqfetch[0][0];
                $_SESSION['login'] = $reqfetch[0][1];
                $_SESSION['password'] = $reqfetch[0][2];
                $this->msg = "login valide";
                header('location: profil.php');
}

        else{
                
                $this->msg = "<center>Informations incorrect</center>";
            }
                    
        
                }   
                
    public function disconnect(){
        session_start();
        session_unset();
        session_destroy();
    }

    public function update ($id, $login, $password, $email, $firstname, $lastname){

        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->msg = "";

    echo $this->id;

        $update = $this->pdo->prepare("UPDATE utilisateurs SET login='$login',password='$password',email='$email',firstname='$firstname',lastname='$lastname' WHERE id=$id");
        $update->execute();
        $this->msg = "<center>Information changé</center>";        



    }
    

    public function delete ($id){
        $this->id = $id;
        session_unset();
        session_destroy();

        if(isset($_POST['delete'])){

            $del = $this->pdo->prepare ("DELETE FROM `utilisateurs` WHERE utilisateurs.id = $id");
            $del->execute();

            header('location: register.php');
            
            $this->msg = "<center>Utilisateur supprimé</center>";
         }
    }
    
    public function isConnected (){
        $connected = "";
        if(isset($_SESSION['id'])){
            $connected = true;
            echo "<center>The User is connected</center>";

        }
            else{
                $connected = false;
                echo "<center>the User is not connected</center>";
            }

    }

        
    public function getAllinfos ($id, $login, $password, $email, $firstname, $lastname){

        $req = mysqli_query($this->bdd,"SELECT * FROM utilisateurs WHERE login='$login' AND password='$password'");
        $reqfetch = $req->fetch_all();

        echo $reqfetch;

        
    
    }     
}     
