<?php
 session_start();
require('modeles/Db.model.php');
function loadcontroller($class){
    if(file_exists('controleurs/'.$class.'.controller.php')){
        require_once($class.'.controller.php');
    }

    if(file_exists('modeles/'.$class.'.model.php')){
        require_once('modeles/'.$class.'.model.php');
    } 
}
spl_autoload_register('loadcontroller');
class Router{
    private $accueil;
    private $single;
    private $liste;
    private $connexion;
    private $user;
    private $ajoutmod;
    private $listAdmin;

     function __construct(){
        $this->accueil=new accueil();
        $this->single=new single();
        $this->liste=new liste();
        $this->connexion=new login();
        $this->user=new user();
        $this->ajoutmod=new ajoutmodifier();
        $this->listAdmin=new listeAdmin();
     }

     function request(){
         if(isset($_GET['page'])){

            switch ($_GET['page']) {
                    case 'accueil':
                    $this->accueil->start();
                    break;
                
                    case 'liste':
                        $this->liste->start();
                    break;

                    case 'single':
                        $this->single->start();
                    break;

                    case 'user':
                        $this->user->start();
                    break;

                    case 'connexion':
                        $this->connexion->start();
                        break;
                    case 'listeAdmin':
                        $this->listAdmin->start();
                        break;
                        
                    case 'ajoutmodifier':
                        $this->ajoutmod->start();
                        break;

                default:
                    echo 'Page non trouvee';
                break;
            }
         }

         
     }
 }
?>