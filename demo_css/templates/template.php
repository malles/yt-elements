<?php
$el = $this->el('style');
$style = str_replace([
        ':primary_color',
        ':secondary_color',
        ':background_color',
        ':button_color',
], [
    $props['primary_color'],
    $props['secondary_color'],
    $props['background_color'],
    $props['button_color'],
], $props['style']);
?>

<?= $el($props, $attrs) ?>
    <?= $style ?>
<?= $el->end() ?>
