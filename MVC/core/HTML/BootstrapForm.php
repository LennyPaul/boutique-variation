<?php
namespace Core\HTML;
class BootstrapForm extends Form{

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    protected function surround($html){
        return $html;
    }

    /**
     * @param $name string
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';

        $length = isset($options['maxlength']) ? $options['maxlength'] : '';

        $ph = $label;
        $label = '<label>' . $label . '</label>';
        if($type === 'textarea'){
            if($length ){
                $input = '<textarea name="' . $name .'" placeholder="'.$ph.' " class="form-control" maxlength="'.$length.'"  >' . $this->getValue($name) . '</textarea>';

            }else{
                $input = '<textarea row = "4" name="' . $name . '" placeholder="'.$ph.' " class="form-control">' . $this->getValue($name) . '</textarea>';
            }
        } 
        else if($type === 'file'){
            $input=' <input type="file" name='.$name.' value="' . $this->getValue($name) .'" class="form-control"  />';
        }
        
        else{
            if($length ){
                $input = '<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) .'" placeholder="'.$ph.'" class="form-control" maxlength="'.$length.'" >';

            }else{
                $input = '<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" placeholder="'.$ph.'" class="form-control">';

            }

        }
        return $this->surround($input);
    }

    public function select($name, $label, $options){
        $input = '<select class="form-select"  name="' . $name . '">';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }
            $input .= "<option value='$k'$attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surround($input);
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}