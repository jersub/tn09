<?php

class EyReferentialLanguageTable extends Doctrine_Table
{
  /**
   * Retourne l'objet Doctrine_Query qui recupere la liste des langues.
   *
   * @param Doctrine_Query $q
   * @return Doctrine_Query
   */
  public function getLanguagesQuery(Doctrine_Query $q = null)
  {
    // si on ne recoit pas de requete initiale en parametre, on en cree une
    if (null === $q)
    {
      // la requete cree correspond a la suivante :
      // > SELECT * FROM EyReferentialLanguage r;
      $q = $this->createQuery('r');
    }

    // on recupere l'alias de la table EyReferentialLanguage (soit "r")
    $rootAlias = $q->getRootAlias();

    // on en profite pour recuperer les informations du createur de chaque
    // langue
    $q->leftJoin($rootAlias.'.Creator');
    
    return $q;
  }
}
