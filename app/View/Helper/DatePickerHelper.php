<?php

class DatePickerHelper extends FormHelper
{

    var $helpers = ['Html', 'Javascript'];
    var $format = '%Y-%m-%d';

    function picker($fieldName, $options = [])
    {
        $this->_setup();
        $this->setEntity($fieldName);
        $htmlAttributes = $this->domId($options);
        $divOptions['class'] = 'date';
        $options['type'] = 'date';
        $options['div']['class'] = 'date';
        $options['dateFormat'] = 'DMY';
        $options['minYear'] = isset($options['minYear']) ? $options['minYear'] : (date('Y') - 20);
        $options['maxYear'] = isset($options['maxYear']) ? $options['maxYear'] : (date('Y') + 20);

        $options['after'] = $this->Html->image('calendar.png',
            ['id' => $htmlAttributes['id'], 'style' => 'cursor:pointer']);

        if (isset($options['empty'])) {
            $options['after'] .= $this->Html->image('b_drop.png',
                ['id' => $htmlAttributes['id'] . "_drop", 'style' => 'cursor:pointer']);
        }
        $output = $this->input($fieldName, $options);
        $output .= $this->Javascript->codeBlock("datepick('" . $htmlAttributes['id'] . "','01/01/" . $options['minYear'] . "','31/12/" . $options['maxYear'] . "');");

        return $output;
    }

    function _setup()
    {
        $format = Configure::read('DatePicker.format');
        if ($format != null) {
            $this->format = $format;
        }
    }

}
