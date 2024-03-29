<?php

namespace Anax\Session;

/**
 * Anax base class for wrapping sessions.
 *
 */
class CSession 
{
    use \Anax\TConfigure;



    /**
     * Construct session.
     *
     * @param array $options to configure options.
     */
    public function __construct($options = [])
    {
        ;
    }



    /**
     * Set a session name or us one from config.
     *
     * @param array $aName to set as session name, default is null and then use name from config.
     */
    public function name($aName = null)
    {
        $name = isset($aName) 
            ? $aName
            : isset($this->configure['name'])
                ? $this->configure['name']
                : "anax";

        session_name($name);
    }


    /**
     * Start session.
     *
     * @param array $options to configure options.
     */
    public function start($options = [])
    {
        session_start();
    }
}
