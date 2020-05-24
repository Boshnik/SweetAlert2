<?php

class SweetAlert2
{
    /** @var modX $modx */
    public $modx;


    /**
     * @param modX $modx
     * @param array $config
     */
    function __construct(modX &$modx, array $config = [])
    {
        $this->modx =& $modx;
        $corePath = MODX_CORE_PATH . 'components/sweetalert2/';
        $assetsUrl = MODX_ASSETS_URL . 'components/sweetalert2/';

        $this->config = array_merge([
            'corePath' => $corePath,
            'modelPath' => $corePath . 'model/',
            'assetsUrl' => $assetsUrl,
            'cssUrl' => $assetsUrl . 'css/',
            'jsUrl' => $assetsUrl . 'js/',
            'frontend_css' => $this->modx->getOption('swal2_frontend_css'),
            'frontend_js' => $this->modx->getOption('swal2_frontend_js'),
        ], $config);

        $this->modx->addPackage('sweetalert2', $this->config['modelPath']);
        $this->modx->lexicon->load('sweetalert2:default');
    }
    
    public function initialize()
    {
        if ($css = trim($this->config['frontend_css'])) {
            if (preg_match('/\.css/i', $css)) {
                $style = str_replace('[[+cssUrl]]', $this->config['cssUrl'], $css);
                if($tpl_css = $this->modx->getoption('boilerplate_tpl_css')) {
                    $style = str_replace('[[+file]]', $style, $tpl_css);
                }
                $this->modx->regClientCSS($style);
            }
        }
        if ($js = trim($this->config['frontend_js'])) {
            $jsArr = explode(',', $js);
            foreach($jsArr as $js) {
                if (preg_match('/\.js/i', $js)) {
                    $script = str_replace('[[+jsUrl]]', $this->config['jsUrl'], $js);
                    if($tpl_js = $this->modx->getoption('boilerplate_tpl_js')) {
                        $script = str_replace('[[+file]]', $script, $tpl_js);
                        $this->modx->regClientStartupScript($script);
                    } else {
                        $this->modx->regClientScript($script);
                    }
                    
                }
            }
        }
        
        $config = array(
            'position' => $this->modx->getOption('swal2_position'),
            'timer' => (int)$this->modx->getOption('swal2_timer'),
            'showConfirmButton' => (boolean)$this->modx->getOption('swal2_showconfirmbutton'),
            'toast' => (boolean)$this->modx->getOption('swal2_toast'),
            'width' => $this->modx->getOption('swal2_width', [], '32rem', true),
        );
        $packages = array(
            'ajaxform' => (boolean)$this->modx->getOption('swal2_ajaxform'),
            'minishop2' => (boolean)$this->modx->getOption('swal2_minishop2'),
            'office' => (boolean)$this->modx->getOption('swal2_office'),
            'msoneclick' => (boolean)$this->modx->getOption('swal2_msoneclick'),
        );
        $script = "<script>document.addEventListener('DOMContentLoaded', function(){ SweetAlert2.initialize(" . json_encode($config, true) ."," . json_encode($packages, true) . ") })</script>";
        $this->modx->regClientScript($script); 
    }

}