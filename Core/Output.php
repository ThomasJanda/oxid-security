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
                    'Content-Security-Policy',
                    'X-Content-Type-Options',
                    'X-Frame-Options',
                    'X-XSS-Protection',
                    'Referrer-Policy'
                ];
                foreach($aHeaders as $sHeader)
                {
                    $sValue = trim($oConfig->getConfigParam('rs-security_'.$sHeader,""));
                    if($sValue!="")
                        \OxidEsales\Eshop\Core\Registry::getUtils()->setHeader($sHeader.":".$sValue);
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
