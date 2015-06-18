<?php

final class PhabricatorYubikeyConfigOptions
  extends PhabricatorApplicationConfigOptions {

  public function getName() {
    return pht('Yubikey');
  }

  public function getDescription() {
    return pht('Configure integration with the Yubikey validation server.');
  }

  public function getFontIcon() {
    return 'fa-key';
  }

  public function getGroup() {
    return 'core';
  }

  public function getOptions() {
    return array(
      $this->newOption('yubikey.api_id', 'string', null)
        ->setLocked(true)
        ->setDescription(pht('Access key for Yubikey server.')),
      $this->newOption('yubikey.api_key', 'string', null)
        ->setHidden(true)
        ->setDescription(pht('Secret key for Yubikey server.')),
    );
  }

}
