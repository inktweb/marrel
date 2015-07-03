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
        <h1>Buttons</h1>

        <p>Arugably the most important part of a CSS Toolkit.</p>

        <p><a href="#" class="btn">Default Button</a></p>
        <pre><code class="language-markup"><?= htmlentities('<p><a href="#" class="btn">Default Button</a></p>'); ?></code></pre>
        
        <p><a href="#" class="btn btn-primary">Primary Button</a></p>
        <pre><code class="language-markup"><?= htmlentities('<p><a href="#" class="btn btn-primary">Primary Button</a></p>'); ?></code></pre>

        <p><a href="#" class="btn btn-secondary">Secondary Button</a></p>
        <pre><code class="language-markup"><?= htmlentities('<p><a href="#" class="btn btn-secondary">Secondary Button</a></p>'); ?></code></pre>

        <p><a href="#" class="btn btn-tertiary">Tertiary Button</a></p>
        <pre><code class="language-markup"><?= htmlentities('<p><a href="#" class="btn btn-tertiary">Tertiary Button</a></p>'); ?></code></pre>

        <p><a href="#" class="btn btn-outline">Outline Button</a></p>
        <pre><code class="language-markup"><?= htmlentities('<p><a href="#" class="btn btn-outline">Outline Button</a></p>'); ?></code></pre>

        <p><a href="#" class="btn btn-disabled">Disabled Button</a></p>
        <pre><code class="language-markup"><?= htmlentities('<p><a href="#" class="btn btn-disabled">Disabled Button</a></p>'); ?></code></pre>



        

    </div><!-- /col -->
</div><!-- /row -->
</div><!-- /container -->
</body>
</html>