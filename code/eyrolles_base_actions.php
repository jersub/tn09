<?php

/**
 * Actions de base de l'Intranet Eyrolles reposant sur celles de slAdminPlugin.
 */
abstract class eyBaseAdminActions extends slAdminActions
{
  /**
   * Methode appelee avant n'importe quelle action.
   */
  public function preExecute()
  {
    // ...

    parent::preExecute();

    // on initialise le fil d'Arianne
    $this->initBreadcrumb();

    // ...
  }

 /**
  * Execute l'action par defaut des objets.
  */
  public function executeIndex(sfWebRequest $request)
  {
    // on passe la main a l'action "list"
    $this->forward($this->getModuleName(), 'list');
  }

  /**
   * Execute l'action de listing des objets.
   */
  public function executeList(sfWebRequest $request)
  {
    $request->addBreadcrumb('Liste');

    parent::executeList($request);
  }

  /**
   * Execute l'action de creation d'objet.
   */
  public function executeNew(sfWebRequest $request)
  {
    $request->addBreadcrumb('Creer');

    parent::executeNew($request);
  }

  /**
   * Execute l'action d'edition d'objet.
   */
  public function executeEdit(sfWebRequest $request)
  {
    parent::executeEdit($request);

    // on utilise le meme template que celui de l'action "new"
    $this->setTemplate('new');
  }

  /**
   * Execute l'action de mise a jour d'objet.
   */
  public function executeUpdate(sfWebRequest $request)
  {
    parent::executeUpdate($request);

    // on utilise le meme template que celui de l'action "new" en cas d'echec de
    // la mise a jour de l'objet
    $this->setTemplate('new');
  }

  /**
   * Initialisation du fil d'Arianne.
   */
  protected function initBreadcrumb()
  {
    $this->getRequest()->addBreadcrumb('Intranet', $this->generateUrl('homepage'));
  }
}
