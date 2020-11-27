<?php

class View {

  private $vars;

  public function construct(){}

  public function renderHTML($viewname){
    if (isset($this->vars)){
      extract($this->vars);
    }
    echo '<!doctype html>';
    echo '<html lang="fr">';
    echo '<head>';
    include VIEWS.DS.'common'.DS.'head.php';
    echo '</head>';
    echo '<body>';
    include VIEWS.DS.strtolower($viewname).'.php';
    include VIEWS.DS.'common'.DS.'scripts.php';
    echo '<body>';
  }

  public function setVar($key, $value = null){
    if (is_array($key)){
      $this->vars = $key;
    } else {
      $this->vars[$key] = $value;
    }
  }

}
?>