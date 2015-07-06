<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="../marrel.min.css"> <!-- latest build -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
    <div class="col-md-4">
        <ul class="menu-vertical">
            <li><a href="grid.php">Grid</a></li>
            <li><a href="typography.php">Typography</a></li>
            <li><a href="tables.php">Tables</a></li>
            <li><a href="buttons.php">Buttons</a></li>
            <li><a href="forms.php">Forms</a></li>
            <li><a href="navigation.php">Navigation</a></li>
            <li><a href="misc.php">Misc</a></li>
        </ul>
    </div>
    <div class="col-md-8">
        <h1>Misc</h1>

        <p>General classes and helper functions</p>

        <h2>Alerts</h2>

        <p>Full width alert boxes with the class <code>alert</code>. Add color with class <code>alert-primary</code>, <code>alert-secondary</code>, <code>alert-tertiary</code> or <code>alert-outline</code>.</p>

        <div class="alert"><strong>Let op!</strong> The quick brown fox jumps over the lazy dog</div>
        <div class="alert alert-primary"><strong>Let op!</strong> The quick brown fox jumps over the lazy dog</div>
        <div class="alert alert-secondary"><strong>Let op!</strong> The quick brown fox jumps over the lazy dog</div>
        <div class="alert alert-tertiary"><strong>Let op!</strong> The quick brown fox jumps over the lazy dog</div>
        <div class="alert alert-outline"><strong>Let op!</strong> The quick brown fox jumps over the lazy dog</div>

        <h2>Pagination</h2>

        <p>Add class <code>pagination</code> to a <code>&lt;ul&gt;</code> for pagination.</p>

        <ul class="pagination">
            <li><a href="/" class="active">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href="">5</a></li>
            <li><a href="">6</a></li>
            <li><a href="">7</a></li>
            <li><a href="">8</a></li>
            <li>...</li>
            <li><a href="">8</a></li>
            <li><a href="">next</a></li>
        </ul>

        <h2>Badges</h2>

        <p>Add class <code>badge</code> to a <code>&lt;span&gt;</code> to make a badge / flair. Alternate color with class <code>badge-primary</code>, <code>badge-secondary</code> or <code>badge-tertiary</code>.</p>

        <p><span class="badge">Nieuw</span></p>
        <p><span class="badge badge-primary">SALE</span></p>
        <p><span class="badge badge-secondary">Populair</span> Double A Presentation Papier 100 grams </p>
        <p>Alternatively you can use these <span class="badge badge-tertiary">badges</span> inside of paragraphs.</p>

        <h2>Prices</h2>

        <p>Simply add class <code>price-big</code> to a span or div to format prices.</p>

        <p><span class="price-big">&euro; 15,00</span></p>
        
        <p>Add <code>price-small</code> for a less intrusive price.</p>

        <p><span class="price-small">&euro; 12,40</span> exclusief BTW</p>
        <p><span class="price-small">+ &euro; 2,95</span> verzendkosten</p>

        <h2>Helper classes</h2>

        <p>Add class <code>hide</code> to an element to apply a <code>display: none;</code></p>

        <p>Add class <code>hide-print</code> to hide an element on the printed version of a page.</p>

        <p>Float elements with classes <code>pull-left</code> and <code>pull-right</code></p>

        <p>Easily remove padding or margin with classes <code>remove-margin</code> and <code>remove-padding</code></p>

    </div><!-- /col -->
</div><!-- /row -->
</div><!-- /container -->

</body>
</html>