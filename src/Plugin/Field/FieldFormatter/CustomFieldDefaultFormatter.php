<?php
/**
 * @file
 * Contains \Drupal\custom_field\Plugin\field\formatter\CustomFieldDefaultFormatter.
 */

namespace Drupal\custom_field\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Component\Utility\String;
use Drupal\Core\Field\FieldDefinitionInterface;

/**
 * Plugin implementation of the 'custom_field_default' formatter.
 *
 * @FieldFormatter(
 *   id = "custom_field_default",
 *   label = @Translation("Custom field Formatter"),
 *   field_types = {
 *      "custom_field_code"
 *   }
 * )
 */
class CustomFieldDefaultFormatter extends FormatterBase {
    /**
     * {@inheritdoc}
     */
    public function viewElements(FieldItemListInterface $items) {
      $elements = array();
      foreach ($items as $delta => $item) {
        // Render output using custom_field_default theme.
        $source = array(
          '#theme' => 'custom_field_default',
          '#source_description' => String::checkPlain($item->source_description),
          '#source_code' => String::checkPlain($item->source_code),
        );
        
        $elements[$delta] = array('#markup' => drupal_render($source));
      }

      return $elements;
    }
}

