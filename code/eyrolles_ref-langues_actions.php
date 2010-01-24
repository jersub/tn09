<?php

/**
 * Actions du module eyReferentialLanguage.
 */
class eyReferentialLanguageActions extends eyBaseAdminActions
{
  /**
   * Execute l'action permettant l'edition d'une langue.
   */
  public function executeEdit(sfWebRequest $request)
  {
    parent::executeEdit($request);

    // on recupere la langue a partir de l'identifiant passe dans la route
    $language = $this->getRoute()->getObject();

    // on ajoute le nom de la langue dans le fil d'Arianne
    $request->addBreadcrumb($language->getLabel());
  }
  
  /**
   * Initialisation du fil d'Arianne.
   */
  protected function initBreadcrumb()
  {
    parent::initBreadcrumb();

    $this->getRequest()->addBreadcrumb('Referentiels');
    $this->getRequest()->addBreadcrumb(
      'Langues',
      $this->generateUrl($this->getAdminConfiguration()->getOption('route_index'))
    );
  }
}
