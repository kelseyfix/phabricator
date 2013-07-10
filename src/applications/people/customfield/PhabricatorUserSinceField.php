<?php

final class PhabricatorUserSinceField
  extends PhabricatorUserCustomField {

  private $value;

  public function getFieldKey() {
    return 'user:since';
  }

  public function getFieldName() {
    return pht('User Since');
  }

  public function getFieldDescription() {
    return pht('Shows user join date.');
  }

  public function shouldAppearInPropertyView() {
    return true;
  }

  public function renderPropertyViewValue() {
    return phabricator_datetime(
      $this->getObject()->getDateCreated(),
      $this->getViewer());
  }

}