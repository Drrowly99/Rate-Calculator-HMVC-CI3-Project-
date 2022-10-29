<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter-HMVC
 *
 * @package    CodeIgniter-HMVC
 * @author     N3Cr0N (N3Cr0N@list.ru)
 * @copyright  2019 N3Cr0N
 * @license    https://opensource.org/licenses/MIT  MIT License
 * @link       <URI> (description)
 * @version    GIT: $Id$
 * @since      Version 0.0.1
 * @filesource
 *
 */

class MY_Controller extends MX_Controller
{
    //
    public $CI;

    /**
     * An array of variables to be passed through to the
     * view, layout,....
     */
    protected $data = array();

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // To inherit directly the attributes of the parent class.
        parent::__construct();
        $this->load->module('Usdeur');
        $this->load->module('Usdcad');
        $this->load->module('Usdgbp');
        $this->load->module('Usdinr');
        $this->load->module('Api/api');
        $this->load->module('Template');


    }
}

// Backend controller
// require_once(APPPATH.'core/Backend_Controller.php');

// Frontend controller
// require_once(APPPATH.'core/Frontend_Controller.php');
