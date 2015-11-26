<?php
/**
 * @file
 * Contains \Drupal\custom_field\Plugin\Field\FieldWidget\CustomFieldDefaultWidget.
 */

namespace Drupal\custom_field\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'custom_field_default' widget.
 *
 * @FieldWidget(
 *   id = "custom_field_default",
 *   label = @Translation("Custom Field Widget"),
 *   field_types = {
 *     "custom_field_code"
 *   }
 * )
 */
class CustomFieldDefaultWidget extends WidgetBase {
    /**
     * {@inheritdoc}
     */
    public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
      $element['source_description'] = array(
            '#title' => t('Description'),
            '#type' => 'textfield',
            '#default_value' => isset($items[$delta]->source_description) ? $items[$delta]->source_description : NULL,
          );
      $element['source_code'] = array(
            '#title' => t('Code'),
            '#type' => 'textarea',
            '#default_value' => isset($items[$delta]->source_code) ? $items[$delta]->source_code : NULL,
          );
      $element['source_lang'] = array(
            '#title' => t('Source language'),
            '#type' => 'textfield',
            '#default_value' => isset($items[$delta]->source_lang) ? $items[$delta]->source_lang : NULL,
          );
      return $element;
    }
}
