<?php  
class AppModel extends Model { 
    function find($conditions = NULL, $fields = array (), $order = NULL, $recursive = NULL) { 
        if ($conditions == 'list' && is_array($this->displayField)) 
            return Set::combine($this->find('all', $fields, $order, $recursive), "{n}.{$this->name}.{$this->primaryKey}", $this->displayField); 
        else 
            return parent::find($conditions, $fields, $order, $recursive); 
    } 
} 
?>