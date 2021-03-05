<?php


namespace App\Controller;

use App\Entity\Initiation;
use App\Entity\Mandate;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class InitiationController extends AbstractController
{
    /**
     * http://mandare.local/
     * @return Response
     */
    public function download(): Response
    {

        $data = [];

        $em = $this->getDoctrine();
        $initiation = $em->getRepository(Initiation::class)->find(1);
        $mandare = $em->getRepository(Mandate::class)->find(1);



        $xml = new \SimpleXMLElement('<root/>');
        $this->array_to_xml($this->setParams($initiation, $mandare),$xml);

        $date = new \DateTime();
        $date = $date->format('Y-m-d_h:m:s');

        file_put_contents(dirname(getcwd()). "/var/logs/xml/pain-009-$date.xml", $xml->asXML());

        header("Content-Type:text/xml");

        echo $xml->asXML();
//        echo '<pre>', htmlentities($xml->asXML()), '</pre>';

//        $xml=simplexml_load_string($xml->asXML()) or die("Error: Cannot create object");
//        echo $xml;
        die;

    }

    private function setParams(Initiation $initiation, Mandate $mandare)
    {

        $orgnanization = [
            'OrgId' => $mandare->getUltmtCdtrOrgId() // BIC or BEI
        ];

        $person = [
            'PrvtId' => $mandare->getUltmtCdtrPrvtId()
        ];
        if($mandare->getUltmtCdtrOrgId())
            $UltmtCdtrId = $orgnanization;
        else $UltmtCdtrId = $person;
        //------------------------------------
        $Dbtrorgnanization = [
            'OrgId' => $mandare->getDbtrOrgId() // BIC or BEI
        ];

        $Dbtrperson = [
            'PrvtId' => $mandare->getDbtrPrvtId()
        ];

        if($mandare->getDbtrOrgId())
            $DbtrId = $Dbtrorgnanization;
        else $DbtrId = $Dbtrperson;
        //----------------------------------
        $UltmtDbtrorgnanization = [
            'OrgId' => $mandare->getUltmtDbtrOrgId() // BIC or BEI
        ];

        $UltmtDbtrperson = [
            'PrvtId' => $mandare->getUltmtDbtrPrvtId()
        ];
        if($mandare->getUltmtDbtrOrgId())
            $UltmtDbtrId = $UltmtDbtrorgnanization;
        else $UltmtDbtrId = $UltmtDbtrperson;



        $currentDateTime = new \DateTime();
        $array = [
            'Document' => $initiation->getDocument(),
            'MndtInitnReq' => [
                'GrpHdr' => [
                    'MsgId' => $initiation->getGrpHdrMsgId(),  // unigueId length 1-35
                    'CreDtTm' => $initiation->getGrpHdrCreDtTm()
                ],
                'Mndt' => [
                    'MndtId' => $mandare->getMndtId(),  // unigueId length 1-35
                    'MndtReqId' => $mandare->getMndtReqId(),
                    'Tp' => [
                        'SvcLvl' => [
                            'Cd' => $mandare->getTpSvcLvlCd()
                        ],
                        'LclInstrm' => [
                            'Cd' => $mandare->getTpLclInstrmCd()
                        ]
                    ],
                    'Ocrncs' => [
                        'SeqTp' => $mandare->getOcrncsSeqTp()        // ????
                    ],
                    'CdtrSchmeId' => [
                        'Id' => [
                            'PrvtId' => $mandare->getCdtrSchmeIdPrvtId()  // or Other
                        ]
                    ],
                    'Cdtr' => [
                        'Nm' => $mandare->getCdtrNm(),
                        'PstlAdr' => [
                            'Ctry' => $mandare->getCdtrPstlAdrCtry(),
                            'AdrLine' => $mandare->getCdtrPstlAdrAdrLine()   // max 70
                        ]
                    ],
                    'UltmtCdtr' => [
                        'Nm' => $mandare->getUltmtCdtrNm(),
                        'Id' => $UltmtCdtrId
                    ],
                    'Dbtr' => [
                        'Nm' => $mandare->getDbtrNm(),
                        'PstlAdr' => [
                            'Ctry' => $mandare->getDbtrPstlAdrCtry(),
                            'AdrLine' => $mandare->getDbtrPstlAdrLine()
                        ],
                        'Id' => $DbtrId
                    ],
                    'DbtrAgt' => [
                        'FinInstnId' => [
                            'BIC' => $mandare->getDbtrAgtFinInstnIdBIC(),
                            'Othr' => [   //Unique identification of an agent, as assigned by Debtor Agent an institution, using an identification scheme.
                                'Id' => $mandare->getDbtrAgtFinInstnIdOthrId()       // max 35
                            ]
                        ]
                    ],
                    'UltmtDbtr' => [
                        'Nm' => $mandare->getUltmtDbtrNm(),  //max 140
                        'Id' => $UltmtDbtrId
                    ],
                    'RfrdDoc' => [
                        'Nb' => $mandare->getRfrdDocNb(),    //max 35
                    ]
                ]
            ]
        ];

        return $array;
    }

    private function setParamsStatic($data)
    {

        $orgnanization = [
            'OrgId' => 'BIC' // BIC or BEI
        ];

        $person = [
            'PrvtId' => ''
        ];

        $UltmtCdtrId = $orgnanization;
        //------------------------------------
        $Dbtrorgnanization = [
            'OrgId' => 'BIC' // BIC or BEI
        ];

        $Dbtrperson = [
            'PrvtId' => ''
        ];

        $DbtrId = $Dbtrorgnanization;
        //----------------------------------
        $UltmtDbtrorgnanization = [
            'OrgId' => 'BIC' // BIC or BEI
        ];

        $UltmtDbtrperson = [
            'PrvtId' => ''
        ];

        $UltmtDbtrId = $UltmtDbtrorgnanization;




        $currentDateTime = new \DateTime();
        $array = [
            'Document' => '',
            'MndtInitnReq' => [
                'GrpHdr' => [
                    'MsgId' => uniqid(),  // unigueId length 1-35
                    'CreDtTm' => $currentDateTime->format(\DateTime::ISO8601)
                ],
                'Mndt' => [
                    'MndtId' => uniqid(),  // unigueId length 1-35
                    'MndtReqId' => '',
                    'Tp' => [
                        'SvcLvl' => [
                            'Cd' => 'SEPA'
                        ],
                        'LclInstrm' => [
                            'Cd' => 'CORE'
                        ]
                    ],
                    'Ocrncs' => [
                        'SeqTp' => ''        // ????
                    ],
                    'CdtrSchmeId' => [
                        'Id' => [
                            'PrvtId' => 'SEPA'  // or Other
                        ]
                    ],
                    'Cdtr' => [
                        'Nm' => 'Name of the Creditor',
                        'PstlAdr' => [
                            'Ctry' => 'ES',
                            'AdrLine' => 'Address Line'   // max 70
                        ]
                    ],
                    'UltmtCdtr' => [
                        'Nm' => 'Name of the Creditor Reference Party.',
                        'Id' => $UltmtCdtrId
                    ],
                    'Dbtr' => [
                        'Nm' => 'Name of the Debtor',
                        'PstlAdr' => [
                            'Ctry' => 'ES',
                            'AdrLine' => 'Address Line'
                        ],
                        'Id' => $DbtrId
                    ],
                    'DbtrAgt' => [
                        'FinInstnId' => [
                            'BIC' => 'bic_code',
                            'Othr' => [   //Unique identification of an agent, as assigned by Debtor Agent an institution, using an identification scheme.
                                'Id' => ''       // max 35
                            ]
                        ]
                    ],
                    'UltmtDbtr' => [
                        'Nm' => '',  //max 140
                        'Id' => $UltmtDbtrId
                    ],
                    'RfrdDoc' => [
                        'Nb' => 'number',    //max 35
                    ]
                ]
            ]
        ];

        return $array;
    }

    private function array_to_xml( $data, &$xml_data ) {
        foreach( $data as $key => $value ) {
            if( is_array($value) ) {
                if( is_numeric($key) ){
                    $key = 'item'.$key; //dealing with <0/>..<n/> issues
                }
                $subnode = $xml_data->addChild($key);
                $this->array_to_xml($value, $subnode);
            } else {
                $xml_data->addChild("$key",htmlspecialchars("$value"));
            }
        }
    }
    
}