<?php
/**
 * Created by PhpStorm.
 * User: emansart
 * Date: 19/01/2020
 * Time: 11:52
 */

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends MainController {

    /**
     * @Route("/users", name="users_list", methods={"GET"})
     */
    public function _list_users() {
        $repo = $this->getDoctrine()->getRepository(User::class);

        $users = $repo->findAll();
        return $this->jsonResponse(["users" => $users]);
    }

}