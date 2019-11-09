<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-11-09
 * Time: 16:44
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(){
        return $this->render('index.html.twig', [
           # 'number' => $number,
        ]);
    }
}