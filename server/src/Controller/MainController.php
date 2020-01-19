<?php

namespace App\Controller;

use App\Entity\User;
use JMS\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    protected $serializer;
    protected $jsonResponse = [];

    public function __construct(SerializerInterface $serializer) {
        $this->serializer = $serializer;

        $this->jsonResponse = [
            "success" => "true",
            "data" => [],
            "status" => 200,
            "errors" => [

            ]
        ];
    }

    /**
     * @Route("/home", name="home", methods={"GET"})
     */
    public function home()
    {

        $user = new User();
        $user->setUsername("toto");

        return $this->jsonResponse(["users" => $user]);
    }

    protected function jsonResponse($data = null, int $status = 200, array $additionalHeaders = []) {


        $this->jsonResponse["data"][] = $data;
        $data2 = $this->serializer->serialize($this->jsonResponse, "json");

        $response = new Response($data2, $status);
        $response->headers->set("Content-Type", "application/json");
        foreach ($additionalHeaders as $key => $value) {
            $response->headers->set($key, $value);
        }

        return $response;

    }
}
