{{--
    Placeholder Image — Div colorée remplaçant les images en attente

    @props:
    - $width   : largeur en px (ex: 640)
    - $height  : hauteur en px (ex: 480)
    - $color   : couleur de fond hex (ex: '#E8E0D4')
    - $alt     : texte alternatif
    - $class   : classes CSS additionnelles
    - $ratio   : ratio CSS optionnel (ex: '4/3', '16/9')

    Note : Les prompts de génération d'images sont documentés dans des
    commentaires Blade placés avant les boucles dans chaque
    partial de page, ou dans config/services-content.php pour les pages
    service détail.
--}}

@props([
    'width' => 640,
    'height' => 480,
    'color' => '#D4CCC0',
    'alt' => '',
    'class' => '',
    'ratio' => null,
])

<div
    class="placeholder {{ $class }}"
    role="img"
    aria-label="{{ $alt }}"
    style="background-color: {{ $color }};{{ $ratio ? ' aspect-ratio: ' . $ratio . ';' : '' }}{{ !$ratio ? ' padding-bottom: ' . round(($height / $width) * 100, 2) . '%;' : '' }}"
></div>
