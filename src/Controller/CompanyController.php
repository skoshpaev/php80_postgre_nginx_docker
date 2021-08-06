<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompanyController extends AbstractController
{
    #[Route('/admin/company', name: 'admin_company')]
    public function index(): Response
    {
        return $this->render('company/index.html.twig', []);
    }
}
