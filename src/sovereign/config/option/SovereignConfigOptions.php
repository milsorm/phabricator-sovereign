<?php

final class SovereignConfigOptions extends PhabricatorApplicationConfigOptions {

  public function getName() {
    return pht('Sovereign');
  }

  public function getDescription() {
    return pht('Configure buildbot installation.');
  }

  public function getFontIcon() {
    return 'fa-gears';
  }

  public function getGroup() {
    return 'core';
  }

  public function getOptions() {
    return array (
      $this->newOption( 'sovereign.buildbot-uri', 'string', 'http://localhost:8010/' )
        ->setDescription( pht( 'Location of the BuildBot master.' ) ),
    );
  }

}
