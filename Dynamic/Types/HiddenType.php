<?php

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\FormBundle\Dynamic\Types;

use Sulu\Bundle\FormBundle\Dynamic\FormFieldTypeConfiguration;
use Sulu\Bundle\FormBundle\Dynamic\FormFieldTypeInterface;
use Sulu\Bundle\FormBundle\Entity\FormField;
use Symfony\Component\Form\Extension\Core\Type\HiddenType as TypeHiddenType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * The Hidden form field type.
 */
class HiddenType implements FormFieldTypeInterface
{
    use SimpleTypeTrait;

    /**
     * {@inheritdoc}
     */
    public function getConfiguration(): FormFieldTypeConfiguration
    {
        return new FormFieldTypeConfiguration(
            'sulu_form.type.hidden',
            __DIR__ . '/../../Resources/config/form-fields/field_hidden.xml'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function build(FormBuilderInterface $builder, FormField $field, string $locale, array $options): void
    {
        $type = TypeHiddenType::class;
        $builder->add($field->getKey(), $type, $options);
    }
}
