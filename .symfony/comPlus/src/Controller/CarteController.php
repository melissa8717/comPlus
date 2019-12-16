<?php
namespace comPlus\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use comPlus/Cartes;

/**
 * Carte controller.
 * @Route("/api", name="api_")
 */
class CarteController extends FOSRestController
{
  /**
   * Lists all Cartes.
   * @Rest\Get("/cartes")
   *
   * @return Response
   */
  public function getListOrdered()
  {
       $json = json_decode(file_get_contents("cartes.json"));

	$carte = array($json);
	$carteObject = new ArrayObject($json);
	$carteObject->ksort();

	 return $carteObject =  $this->render('Templates/cartes.html.twig', [
	            'cartes' => $cartes,
	        ]);
	
	  }
}