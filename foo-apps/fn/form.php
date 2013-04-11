<?php
class Form {

    function __construct() {
        return $construct;
    }
    public function textField( $name, $class, $id, $label = NULL, $value = NULL ) {
        $textfield.='<input type="text" name="'.$name.'" class="'.$class.'" id="'.$id.'" placeholder="'.$label.'" value="'.$value.'"  />';
        return $textfield;
    }
    public function passwordField( $name, $class, $id, $label = NULL, $value = NULL ) {
        $passwordField.='<input type="password" name="'.$name.'" class="'.$class.'" id="'.$id.'" placeholder="'.$label.'" value="'.$value.'"  />';
        return $passwordField;
    }
}
?>