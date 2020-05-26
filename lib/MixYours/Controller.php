<?php


namespace MixYours;

/**
 * Class Controller
 * Base class all controllers
 * @package MixYours
 */
class Controller {
    protected $redirect;            // Page the user will be redirected to
    protected $result = null;       // Result for AJAX operations (I might not need this, not sure yet)
    protected $site;                // The Site object

    /**
     * Controller constructor.
     * @param Site $site The Site object
     */
    public function __construct(Site $site) {
        $this->site = $site;
    }

    /**
     * Return the redirect location link
     * @return string page to redirect to
     */
    public function getRedirect() {
        return $this->redirect;
    }

    /**
     * Returns any AJAX response
     * @return JSON result for AJAX
     */
    public function getResult() {
        return $this->result;
    }
}