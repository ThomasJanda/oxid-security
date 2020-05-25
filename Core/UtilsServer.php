<?php

namespace rs\security\Core;

class UtilsServer extends UtilsServer_parent
{

    protected function _rs_security__getCookieSameSite()
    {
        $oConfig = $this->getConfig();
        if(!$this->_rs_security__isSecure()) return "";
        
        $sSameSite = "";
        if ((bool) $oConfig->getConfigParam('rs-security_cookie_SameSite_enabled',
                false)) {
            $sSameSite = $oConfig->getConfigParam('rs-security_cookie_SameSite',
                '');
        }
        
        return $sSameSite;
    }

    protected function _rs_security__isSecure()
    {
        $config = $this->getConfig();
        return ($config->isSsl() && $config->getSslShopUrl() == $config->getShopUrl());
    }
    
    
    /**
     * sets cookie
     *
     * @param string $sName       cookie name
     * @param string $sValue      value
     * @param int    $iExpire     expire time
     * @param string $sPath       The path on the server in which the cookie will be available on
     * @param string $sDomain     The domain that the cookie is available.
     * @param bool   $blToSession is true, records cookie information to session
     * @param bool   $blSecure    if true, transfer cookie only via SSL
     * @param bool   $blHttpOnly  if true, only accessible via HTTP
     *
     * @return bool
     */
    public function setOxCookie($sName, $sValue = "", $iExpire = 0,
                                $sPath = '/', $sDomain = null,
                                $blToSession = true, $blSecure = false,
                                $blHttpOnly = true)
    {
        
        $sSameSite = $this->_rs_security__getCookieSameSite();

        if($sSameSite=="")
        {
            return parent::setOxCookie ($sName, $sValue, $iExpire,
            $sPath, $sDomain,
            $blToSession, $blSecure,
            $blHttpOnly);
        }

        if ($blToSession && !$this->isAdmin()) {
            $this->_saveSessionCookie($sName, $sValue, $iExpire, $sPath,
                $sDomain);
        }

        $config   = $this->getConfig();
        //if shop runs in https only mode we can set secure flag to all cookies
        $blSecure = $blSecure || $this->_rs_security__isSecure();

        $ret = null;
        if (version_compare(phpversion(), '7.3.0', '<')) {

            //PHP < 7.3.0

            $inject = "";
            if($sSameSite!="")
            {
                $inject = "; SameSite: ".$sSameSite;
            }

            $ret = setcookie(
                $sName, 
                $sValue, 
                $iExpire, 
                $this->_getCookiePath($sPath).$inject,
                $this->_getCookieDomain($sDomain), 
                $blSecure, 
                $blHttpOnly
            );
        }
        else
        {
            //PHP >= 7.3.0

            $aParam=[
                'expires' => $iExpire,
                'path' => $this->_getCookiePath($sPath),
                'domain' => $this->_getCookieDomain($sDomain),
                'secure' => $blSecure,
                'httponly' => $blHttpOnly
            ];
            
            if($sSameSite!="")
            {
                $aParam['samesite'] = $sSameSite;
            }
            
            $ret = setcookie($sName, $sValue, $aParam);
        }

        return $ret;
    }
}