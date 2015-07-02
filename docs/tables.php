<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="../marrel.css"> <!-- latest build -->

<link rel="stylesheet" href="assets/prism.css">
<script src="assets/prism.js"></script>
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
        <h1>Tables</h1>

        <p>A basic table without any specific markup.</p>

        <table>
            <tr>
                <th>Label</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Kleur:</td>
                <td>zwart</td>
            </tr>
            <tr>
                <td>Merk:</td>
                <td><a href="/">HP</a></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td>Inktjet cartridge</td>
            </tr>
            <tr>
                <td>Artikelnr:</td>
                <td>CN049AE</td>
            </tr>
            <tr>
                <td>EAN:</td>
                <td>0886111748907</td>
            </tr>
            <tr>
                <td>Gewicht:</td>
                <td>109 gram</td>
            </tr>
            <tr>
                <td>Inhoud:</td>
                <td>1 stuks</td>
            </tr>
            <tr>
                <td>Aantal pagina's:</td>
                <td>1000 pagina's</td>
            </tr>
            <tr>
                <td>Voorraad:</td>
                <td>op voorraad</td>
            </tr>
            <tr>
                <td>Productgroep:</td>
                <td><a href="/">950</a></td>
            </tr>
        </table>


        <p>Add alternating row colors with the class <code>table-striped</code></p>

        <table class="table-striped">
            <tr>
                <td>Kleur:</td>
                <td>zwart</td>
            </tr>
            <tr>
                <td>Merk:</td>
                <td><a href="/">HP</a></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td>Inktjet cartridge</td>
            </tr>
            <tr>
                <td>Artikelnr:</td>
                <td>CN049AE</td>
            </tr>
        </table>

        <p>Add full borders with the class <code>table-bordered</code></p>

        <table class="table-bordered">
            <tr>
                <td>Kleur:</td>
                <td>zwart</td>
            </tr>
            <tr>
                <td>Merk:</td>
                <td><a href="/">HP</a></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td>Inktjet cartridge</td>
            </tr>
            <tr>
                <td>Artikelnr:</td>
                <td>CN049AE</td>
            </tr>
        </table>

        <p>Or remove all borders with <code>table-borderless</code></p>

        <table class="table-borderless">
            <tr>
                <th>Label</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Kleur:</td>
                <td>zwart</td>
            </tr>
            <tr>
                <td>Merk:</td>
                <td><a href="/">HP</a></td>
            </tr>
        </table>        

    </div><!-- /col -->
</div><!-- /row -->
</div><!-- /container -->

</body>
</html>