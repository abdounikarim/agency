<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }
    /**
     * @Route("/cv", name="cv")
     */
    public function cvAction()
    {
        return $this->render('default/cv.html.twig');
    }
    /**
     * @Route("/cvpdf", name="cvpdf")
     */
    public function cvpdfAction(){
        return $this->render('cv/cvpdf.html.twig');
        /*$html = $this->renderView('cv/cvpdf.html.twig');

        $filename = sprintf('cv.pdf');

        $options = [
            'margin-top'    => 0,
            'margin-right'  => 0,
            'margin-bottom' => 0,
            'margin-left'   => 0,
        ];

        return new Response(

            $this->get('knp_snappy.pdf')->getOutputFromHtml($html, $options),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );*/
    }
}
