<?php

class slAdminConfigurationEyReferentialBase extends eyBaseAdminConfiguration
{
  protected
    $modelName = '',
    $namespace = '',
    $routePrefix = '';

  /**
   * Configures the object.
   *
   * @param array $options An array of options
   */
  public function configure()
  {
    parent::configure();
 $this->setOption('query_method', 'getLanguagesQuery');
    $this->addRequiredOption('route_move');

    # Global settings
    $this->setOption('model', $this->modelName);
    $this->setOption('name_space', $this->namespace);

    # Routes
    $this->setOption('route_index', $this->routePrefix);
    $this->setOption('route_sort', $this->routePrefix.'_sort');
    $this->setOption('route_edit', $this->routePrefix.'/edit');
    $this->setOption('route_delete', $this->routePrefix.'_delete');
    $this->setOption('route_batch', $this->routePrefix.'_batch');
    $this->setOption('route_new', $this->routePrefix.'_new');
    $this->setOption('route_create', $this->routePrefix.'_create');
    $this->setOption('route_update', $this->routePrefix.'_update');
    $this->setOption('route_move', $this->routePrefix.'_move');

    # View settings
    $this->addRequiredOption('page_title');
    $this->addRequiredOption('page_section');
    $this->addRequiredOption('page_legend');
    $this->addRequiredOption('page_description');

    # Sorting
    $this->setOption('sort_default', array('field' => 'position', 'type' => 'asc'));

    # Pager
    $this->setOption('list_max_per_page', 30);

    # Widgets settings
    $this->setOption('pager_infos_widget_options', array(
      'label_single_object' => 'référentiel',
      'label_multi_object'  => 'référentiels'
    ));

    $this->mergeOption('table_widget_options', array(
      'data_header'          => array(
        'label'           => 'Intitulé',
        'created_by'      => 'Créateur',
        'is_default_flag' => 'Choix par défaut',
        'actions'         => 'Actions'
      ),
      'row_template_name'    => 'eyReferentialBase/listTableRow',
      'row_template_extra_vars' => array('routePrefix' => $this->routePrefix)
    ));

    $this->mergeOption('table_widget_attributes', array(
      'id' => 'ey_referential_table'
    ));

    # Forms classes
    $this->setOption('new_form_class', $this->modelName.'Form');
    $this->setOption('edit_form_class', $this->modelName.'Form');
  }

  public function getPageTitle()
  {
    return $this->getOption('page_title');
  }

  public function getPagePrefixRoute()
  {
    return $this->routePrefix;
  }

  public function getPageLegend()
  {
    return $this->getOption('page_legend');
  }

  public function getPageSection()
  {
    return $this->getOption('page_section');
  }

  public function getPageDescription()
  {
    return $this->getOption('page_description');
  }
}
