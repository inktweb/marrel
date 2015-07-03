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
        <h1>Typography</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <ul>
            <li><a href="#">anchors</a></li>
            <li><abbr title="abbreviation">abbr</abbr> (with <code>title</code> attribute)</li>
            <li><address>address</address></li>
            <li><cite>cite</cite></li>
            <li><code>&lt;code&gt;</code></li>
            <li><dfn>definition term</dfn></li>
            <li><del>deleted</del> and <ins>inserted</ins></li>
            <li><em>emphasis</em></li>
            <li><i>italic</i></li>
            <li><kbd>⌘</kbd> + <kbd>space</kbd></li>
            <li><mark>marked</mark> (i.e., highlighted)</li>
            <li><samp>sample output</samp></li>
            <li><small>small</small></li>
            <li><s>strike</s></li>
            <li><strong>strong</strong></li>
            <li><sub>subscript</sub> and <sup>superscript</sup></li>
            <li><var>variable</var></li>
        </ul>


        <h2>Lists</h2>
        
        <h3>Unordered lists</h3>
        <ul>
            <li>Unordered list item 1</li>
            <li>Unordered list item 2
                <ul>
                    <li>Nested list item 2.1</li>
                    <li>Nested list item 2.2</li>
                </ul>
            </li>
            <li>Unordered list item 3</li>
        </ul>

        <h3>Ordered lists</h3>
        <ol>
            <li>Ordered list item 1</li>
            <li>Ordered list item 2
                <ol>
                <li>Nested list item 2.1</li>
                <li>Nested list item 2.2</li>
                </ol>
            </li>
            <li>Ordered list item 3</li>
        </ol>

        <h3>Definition list</h3>
        <dl>
            <dt>Term</dt>
            <dd>Description of an item in a definition list.</dd>
        </dl>

        <h2>Misc</h2>

        <pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</pre>

        <blockquote>&ldquo;The quick brown fox jumps over the lazy dog&rdquo; &mdash; <small>Mozart</small></blockquote>

        <blockquote>
        A<br>
        B<br>
        C<br>
        Always<br>
        Be<br>
        Closing<br>
        </blockquote>

        <code>&lt;?php echo "Hello World!"; ?&gt;</code>

        <hr>

    </div><!-- /col -->
</div><!-- /row -->
</div><!-- /container -->

</body>
</html>