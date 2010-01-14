class slAdminConfigurationMonNomDeModule extends slBaseAdminConfiguration
{
  public function configure()
  {
    $this->setOption('model', 'MaClasseModele');
    $this->setOption('name_space', 'ma_classe_modele');
    $this->setOption('route_index', 'MonNomDeModule/index');
    ...
  }
}