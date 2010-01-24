<?php

class slAdminConfigurationEyReferentialLanguage extends eyBaseAdminConfiguration
{
  public function configure()
  {
  	# Heritage de la configuration globale a Eyrolles
    parent::configure();
    
    # Options globales
    $this->setOption('model', 'EyReferentialLanguage');
    $this->setOption('name_space', 'ey_referential_language');
    
    # Requete permettant de recuperer les langues a lister
    $this->setOption('query_method', 'getLanguagesQuery');

    # Routes
    $this->setOption('route_index', 'eyReferentialLanguage');
    $this->setOption('route_sort', 'eyReferentialLanguage_sort');
    $this->setOption('route_edit', 'eyReferentialLanguage/edit');
    $this->setOption('route_delete', 'eyReferentialLanguage_delete');
    $this->setOption('route_batch', 'eyReferentialLanguage_batch');
    $this->setOption('route_new', 'eyReferentialLanguage_new');
    $this->setOption('route_create', 'eyReferentialLanguage_create');
    $this->setOption('route_update', 'eyReferentialLanguage_update');

    # Options de tri
    $this->setOption('sort_default', array('field' => 'position', 'type' => 'asc'));

    # Options du pager
    $this->setOption('list_max_per_page', 30);

    # Widget de pagination du listing des langues
    $this->setOption('pager_infos_widget_options', array(
      'label_single_object' => 'referentiel',
      'label_multi_object'  => 'referentiels'
    ));
    
    # Widget du tableau de listing des langues
    $this->mergeOption('table_widget_options', array(
      'data_header'          => array(
        'label'           => 'Intitule',
        'created_by'      => 'Createur',
        'actions'         => 'Actions'
      ),
      'row_template_name'    => 'eyReferentialBase/listTableRow',
      'row_template_extra_vars' => array('routePrefix' => $this->routePrefix)
    ));
    $this->mergeOption('table_widget_attributes', array(
      'id' => 'ey_referential_table'
    ));

    # Classes de formulaire
    $this->setOption('new_form_class', 'eyReferentialLanguageForm');
    $this->setOption('edit_form_class', 'eyReferentialLanguageForm');
  }
}
