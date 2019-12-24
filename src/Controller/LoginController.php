<?php

namespace App\Controller;


use App\Model\LoginModel;

class LoginController extends MainController {

    public function DefaultMethod(){

        $view = new MainController;
        if($view->isLogged()) $this->redirect('home');
        $view = $view->twig->render('login.twig');
        return $view;
    }

    /**Create password with password_hash('string', PASSWORD_DEFAULT);**/

    public function LoginMethod(){

        $login = new LoginModel();
        $view = new MainController();
        //var_dump($_POST);
        //$post = filter_input_array(INPUT_POST);
        if(isset($_POST['email'])){
            if($login->getUser(htmlspecialchars($_POST['email'])) === false){
                $err = ['erreur' => 'Mauvaise adresse mail'];
                return $view->twig->render('login.twig', ['erreur' => $err]);
            }else{
                $data = $login->getUser($_POST['email']);
                if(password_verify(htmlspecialchars($_POST['password']), htmlspecialchars($data['password']))){
                    $sess = new SessionController();
                    if($_POST['remember_me'] === 'on') {
                        $sess->login($data, true);
                    }
                    else {
                        $sess->login($data);
                    }
                }
                else {
                    $err = ['erreur' =>'Mot de passe incorrect'];
                    return $view->twig->render('login.twig', ['erreur' => $err]);
                }
            }
        }else{
            $this->redirect('home');
        }
    }

    public function LogoutMethod(){
        $logout = new SessionController();
        $logout->logout();
        $this->redirect('home');
    }

    public function RegisterMethod(){
        $post = array_map( 'htmlspecialchars', $_POST);
        if(!empty($post)){
            if($post['password1'] != $post['password2']) return $this->twig->render('register.twig', ['erreur' => 'Les mots de passes sont différents']);

            $post['password'] = password_hash($post['password1'], PASSWORD_DEFAULT);
            $register = new LoginModel();
            $register->createUser($post['pseudo'], $post['email'], $post['password']);
            $this->redirect('home');
        }
        return $this->twig->render('register.twig');
    }
}