<?php

namespace rs\security\Core;

class Output extends Output_parent
{
    /**
     * send page headers (content type, charset)
     */
    public function sendHeaders()
    {
        parent::sendHeaders();

        if($this->_sOutputFormat===self::OUTPUT_FORMAT_HTML)
        {
            /**
             * @var \oxconfig $oConfig
             */
            $oConfig = $this->getConfig();
            if(!$oConfig->isAdmin())
            {
                //Standard
                $aHeaders = [
                    'Strict-Transport-Security',
                    'X-Content-Type-Options',
                    'X-Frame-Options',
                    'X-XSS-Protection',
                    'Referrer-Policy'
                ];
                foreach($aHeaders as $sHeader)
                {
                    if((bool) $oConfig->getConfigParam('rs-security_'.$sHeader."_enabled",false))
                    {
                        $sValue = trim($oConfig->getConfigParam('rs-security_'.$sHeader,""));
                        if($sValue!="")
                            \OxidEsales\Eshop\Core\Registry::getUtils()->setHeader($sHeader.":".$sValue);
                    }

                }

                $sHeader = "Content-Security-Policy";
                if ((bool) $oConfig->getConfigParam('rs-security_'.$sHeader."_enabled",false)) 
                {
                    $aValues = [];
                    for($x=1;$x<15;$x++)
                    {
                        $sValue = 'rs-security_'.$sHeader.'_'.str_pad($x,2,'0',STR_PAD_LEFT);
                        $sValue = trim($oConfig->getConfigParam($sValue));
                        if($sValue && $sValue!=="")
                            $aValues[]=$sValue;
                    }
                    if(!empty($aValues))
                    {
                        $sValue = implode(" ; ",$aValues)." ;";
                        \OxidEsales\Eshop\Core\Registry::getUtils()->setHeader($sHeader.":".$sValue);
                    }
                }

                //Additional
                $aHeaders = [
                    '1',
                    '2',
                    '3'
                ];
                foreach($aHeaders as $sHeader)
                {
                    $sTitle = trim($oConfig->getConfigParam('rs-security_OtherName'.$sHeader,""));
                    $sValue = trim($oConfig->getConfigParam('rs-security_OtherValue'.$sHeader,""));
                    if($sTitle!="" && $sValue!="")
                        \OxidEsales\Eshop\Core\Registry::getUtils()->setHeader($sTitle.":".$sValue);
                }
            }
        }
    }
}
