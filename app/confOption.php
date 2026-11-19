
<?php

$stylesOptions = ['light', 'dark'];
$languageOptions = ['es', 'en'];
$elementsOptions = ['10', '20', '50'];

function verifyOption( $value, array $options): bool
{
    return is_string($value) && in_array($value, $options);
}

function generateOptions(array $options): void
{
    foreach ($options as $option) {
        $opcionSaneada = sanitationChars($option);

        echo "<option value=\"{$opcionSaneada}\">{$opcionSaneada}</option>";

    }
}
