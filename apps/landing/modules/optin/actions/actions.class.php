<?php

/**
 * optin actions.
 *
 * @package    sf_sandbox
 * @subpackage optin
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
require_once dirname(__FILE__).'/../../../lib/MCAPI.class.php';

class optinActions extends sfActions  
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    $this->forward('default', 'module');
  }
  public function executeShow() 
  {
    require_once dirname(__FILE__).'/../../../config/config.inc.php';
    $api = new MCAPI ($apikey);
    $merge_vars = array(
      'FNAME'=>'Test', 
      'LNAME'=>'Account', 
      'GROUPINGS'=>array(
        array(
          'name'=>'Your Interests:', 
          'groups'=>'Bananas,Apples'),
        array(
          'id'=>22, 
          'groups'=>'Trains'
        ),
      )
    );
    $this->test = "OK";
  }
}
