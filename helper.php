<?php

require_once __DIR__ . "/config.php";

/**
 * Check request method on POST
 * @return bool True on Post request method
 */
function is_post()
{
    return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
}

/*
 * @return array element of forms
 */

function build_forms($text)
{
    $result = [];
    $form_set = [
        '{{name}}' => [
            'label' => 'Укажите имя',
            'type' => 'text',
            'name' => 'name'
        ],
        '{{number}}' => [
            'label' => 'Укажите число',
            'type' => 'number',
            'name' => 'number'

        ],
        '{{money}}' => [
            'label' => 'Укашите денги',
            'type' => 'number',
            'name' => 'money'
        ],
        '{{currency}}' => [
            'label' => 'Currency',
            'type' => 'select',
            'name' => 'currency',
            'data' => [
                'сом',
                '$',
                'рубль'
            ]
        ],
        '{{date}} ' => [
            'label' => 'Укажите дату',
            'type' => 'date',
            'name' => 'date'
        ],
        '{{time}}' => [
            'label' => 'Укажите время',
            'type' => 'time',
            'name' => 'time'
        ],
        '{{text}}' => [
            'label' => 'Укажите техт',
            'type' => 'textarea',
            'name' => 'textarea'
        ]

    ];
    foreach ($form_set as $tag => $data) {
        $count_form = substr_count($text, $tag);
        if ($data['type'] == 'select') {
            for ($i = 0; $i < $count_form; $i++) {
                array_push($result, [
                        'label' => $data['label'],
                        'name' => $data['name'] . '_' . $i,
                        'type' => $data['type'],
                        'data' => $data['data']
                    ]
                );
            }

        } else {

            for ($i = 0; $i < $count_form; $i++) {
                array_push($result, [
                        'label' => $data['label'],
                        'name' => $data['name'] . '_' . $i,
                        'type' => $data['type'],
                        'value' => null
                    ]
                );
            }
        }
    }
    return $result;
}

/*
 * check files is valid
 * return errors
 */

function check_file_valid($file)
{
    if (strlen($file) < 5) {
        return [FALSE, 'Length must be bigger than 5'];
    } elseif (substr($file, -4) != '.txt') {
        $file = $file . '.txt';
    }
    if (strlen($file) > 20) {
        $file = substr($file, 0, 17) . '.txt';
    }
    $file_ex = explode(" ", $file);
    $file = implode('_', $file_ex);
    $file = strtolower($file);
    $files = scandir(TEMPLATE_DIR);
    if (in_array($file, $files)) {
        return [FALSE, 'File allready exist'];
    }
    return [TRUE, $file];
}

/*
 * replace only one arguments
 */
function str_replace_first($from, $to, $content)
{
    $from = '/' . preg_quote($from, '/') . '/';

    return preg_replace($from, $to, $content, 1);
}

/**
 * check errors
 * @return string if no errors return empty string
 * take only string
 *
 */

