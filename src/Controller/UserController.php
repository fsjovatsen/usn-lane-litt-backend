<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;

class UserController
{

    public function getUsers() {
        sleep(2);
        return new JsonResponse(
            array(
                array(
                    "username" => "finn",
                    "passwrod" => "finn12",
                    "fullName" => "Finn Gundersen"
                ),
                array(
                    "username" => "patrick",
                    "passwrod" => "patrick12",
                    "fullName" => "Patrick Lorentzen"
                ),
                array(
                    "username" => "michael",
                    "passwrod" => "michael12",
                    "fullName" => "Micael Ronnevik"
                )
            )
        );
    }
}