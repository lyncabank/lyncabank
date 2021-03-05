<?php


namespace App\Controller;

use App\Entity\Initiation;
use App\Entity\Mandate;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    /**
     * http://mandare.local/
     * @return Response
     */
    public function index(Request $request): Response
    {
        $projectRoot = $this->getParameter('kernel.project_dir');

        $file = $projectRoot. '/src/templates/inputForm.html.twig';

        echo file_get_contents($file);

        if($request->getMethod() == 'POST')
        {
            $em = $this->getDoctrine()->getManager();
            $mandare = $em->getRepository(Mandate::class)->find(1);

            $mandare->setDbtrNm($request->get('holder_name'));
            $mandare->setDbtrAcctIBAN($request->get('iban'));
            $mandare->setDbtrAgtFinInstnIdBIC($request->get('bic'));
//            $mandare->setDbtrPstlAdrCtry('ES');
            $mandare->setDbtrPstlAdrLine($request->get('address'));
            $mandare->setRfrdDocNb($request->get('reference'));
            $mandare->setCdtrSchmeIdPrvtId($request->get('creditorIdentifier'));

            $em->persist($mandare);
            $em->flush();
            $em->clear();

            echo '
            <div class="row">
                <a href="/initiation/download" target="_blank">initiation.xml</a>
            </div>
        
          <!--  <div class="row">
                <a href="/amendment/download" target="_blank">initiation.xml</a>
            </div>-->
            ';

        }



        echo '
        </div>
    </body>
</html>
        ';

        die;
    }
    
}