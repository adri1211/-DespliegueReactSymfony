<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class AALController
{
#[Route('/api/AAL', name: 'api_AAL')]
public function index(): Response
{
return new Response('Symfony de Adrian Ariza Linares Responde a la llamada de
React');
}
}