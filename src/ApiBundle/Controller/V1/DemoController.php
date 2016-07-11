<?php

namespace ApiBundle\Controller\V1;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

class DemoController extends FOSRestController
{
	/**
	 * GET Route annotation.
	 * @return array
	 * @Rest\Get("/demo")
	 * @Rest\View
	 */
	public function getDemoAction()
	{
		$data = array("hello" => "world");
		// $view = $this->view($data);
		// return $this->handleView($view);
		return $data;
	}
}