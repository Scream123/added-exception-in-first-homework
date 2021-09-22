<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 11.09.2021
 * Time: 18:00
 */
/**
 *
 * Рекурсии
 * Все задачи на циклы которые можно реализовать с помощью рекурсии, переписать с помощью рекурсивных функций
 * Написать рекурсивную функцию которая будет обходить и выводить все значения любого массива и любого уровня вложенности
 */
function translate()
{
    $search = [
        'singular' => 'Manual',
        'plural' => 'Manuals',
        'steps' => [
            'name' => 'steps',
            'singular' => 'Manual step',
            'plural' => 'Manuals steps',
            'global' => 'Global steps',
            'count' => 'Steps count',
            'module_title' => 'Module title',
            'module_type' => 'Module type',
            'content' => 'Content',
            'type' => [
                'safety_notice' => 'Safety notice',
                'installation' => 'Installation',
                'installation_distances' => 'Installation distances',
                'new_step' => 'New step',
                'custom_text' => 'Custom text',
                'technical_specs' => 'Technical specs',
            ],
            'image' => [
                'name' => 'Image',
                'type' => [
                    'left' => 'Image on left, text on right',
                    'right' => 'Image on right, text on left',
                    'top' => 'Image on top, text below',
                    'below' => 'Image below, text on top',
                ]
            ],
        ],
        'cover_pages' => [
            'singular' => 'Cover page',
            'plural' => 'Cover pages',
        ]
    ];
    echo trans('steps.image.type.left', $search);
}
translate();
function trans($findKey, $array)
{
    //check for an array
    if (is_array($array)) {

        //split the array into points
        $key_parts = explode('.', $findKey);
        //fetch the first element of the array
        $key = array_shift($key_parts);

        //return the function and break it down again into dots
        return trans(implode('.', $key_parts), $array[$key]);
    }
    //return string
    return $array;
}
