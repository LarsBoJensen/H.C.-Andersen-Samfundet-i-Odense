<?php

namespace Drupal\component_code_drop\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'code_drop' formatter.
 *
 * @FieldFormatter(
 *   id = "code_drop",
 *   label = @Translation("Code"),
 *   field_types = {
 *     "string_long",
 *   },
 *   quickedit = {
 *     "editor" = "plain_text"
 *   }
 * )
 */
class CodeDrop extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#type' => 'inline_template',
        '#template' => '{{ code | raw }}',
        '#context' => [
          'code' => $item->value,
        ],
      ];
    }

    return $elements;
  }

}
