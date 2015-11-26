<?php
/**
 * @file
 * Contains \Drupal\custom_field\Plugin\Field\FieldWidget\CustomEntityReferenceWidget.
 */

namespace Drupal\custom_field\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'custom_entity_reference' widget.
 *
 * @FieldWidget(
 *   id = "custom_entity_reference",
 *   label = @Translation("Customized Entity Reference field."),
 *   field_types = {
 *     "entity_reference"
 *   }
 * )
 */
class CustomEntityReferenceWidget extends WidgetBase {
    /**
     * {@inheritdoc}
     */
    public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
        $element['custom_entity_reference'] = array(
            '#title' => t('Customized Entity Reference field.'),
            '#type' => 'file',
            '#name' => 'files[' . implode('_', $element['#parents']) . ']',
        );
        return $element;
    }
}

