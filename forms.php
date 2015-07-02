<!DOCTYPE html>
<html lang="nl">
<head>
<link rel="stylesheet" href="css/marrel.css">
</head>
<body>

<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Forms</h1>

        <p>By default forms are inline.</p>
        <form>
          <label for="search">Search</label>
          <input id="search" type="text" class="field-light" placeholder="Search for product...">
          <button class="btn">Go!</button>
        </form>

        <hr>

        <p>Form with class <code>form-full</code> are 100% width for arguably the most (UX) friendly way to enter forms.</p>
        <form class="form-full">
          <label>Email Address</label>
          <input type="text">
          <label>Password</label>
          <input type="password">
          <label>Select</label>
          <select>
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
          </select>
          <label>Message</label>
          <textarea rows="3"></textarea>
          <button type="submit" class="button">Sign In</button>
          <button type="reset" class="button bg-gray">Cancel</button>
        </form>

        <hr>

        <p>Add class <code>form-horizontal</code> to use the grid classes INSIDE input fields. 
        This way you can control the width of your fields based on the viewport size.</p>

        <form class="form-horizontal">
            <label class="col-sm-5">Postcode</label>
            <div class="col-sm-7">
                <input type="text" placeholder="1234AB" class="col-sm-5">
            </div>

            <label class="col-sm-5">Huisnummer + Toevoeging</label>
            <div class="col-sm-7">
                <input type="text" placeholder="1" class="col-sm-3">
                <input type="text" placeholder="B" class="col-sm-2">
            </div>

            <label class="col-sm-5">Adres</label>
            <div class="col-sm-7">
                <input type="text" placeholder="Straatnaam wordt automatic ingevuld" class="col-xs-12" disabled>
                <input type="text" placeholder="Plaatsnaam wordt automatic ingevuld" class="col-xs-12" disabled>
            </div>

            <label class="col-sm-5">Wilt u de BTW verleggen?</label>
            <div class="col-sm-7">
                <label class="col-sm-6"><input type="radio"> Ja</label>
                <label class="col-sm-6"><input type="radio"> Nee</label>
            </div>
        </form>
        
        <hr>

        <p>Use the smallest viewport to simply use 100% width: <code>col-xs-12</code>.</p>

        <form class="form-horizontal">
            <label class="col-sm-2">Email</label>
            <div class="col-sm-10">
                <input type="email" class="col-xs-12">
            </div>
            <label class="col-sm-2">Password</label>
            <div class="col-sm-10">
                <input type="password" class="col-xs-12">
            </div>
            <label class="col-sm-2">Captcha</label>
            <div class="col-sm-10">
                <textarea class="col-xs-12"></textarea>
            </div>
            <label class="col-sm-12">
               <input type="checkbox" checked>
                Remember me 
            </label>
            <div class="col-sm-2 col-sm-offset-10"><input type="submit" value="Login" class="btn btn-primary"></div>
        </form>

        <h2>Helping classes</h2>

        <p><code>&lt;span class="required"&gt;*&lt;span&gt;</code></p>

        <form class="form-horizontal">
            <label class="col-xs-4">Email <span class="required">*<span></label>
                <input type="email" class="col-xs-8">
        </form>

        <p>Add a div, span, or paragraph with the class <code>help</code> to add an explainer text.</p>

        <form class="form-horizontal">
            <label class="col-xs-4">Email</label>
            <div class="col-xs-8">
                <input type="email" class="col-xs-6">
                <p class="help col-xs-6">Read our <a href="/">policy</a></p>
            </div>
            <label class="col-xs-4">Email</label>
            <div class="col-xs-8">
                <input type="email" class="col-xs-12">
                <p class="help">Only used for sending confirmation emails</p>
            </div>
        </form>

        <p><code>error</code> and <code>success</code></p>

        <form class="form-horizontal">
            <label class="col-xs-4">First name</label>
            <input type="text" class="col-xs-8 success" value="Jon Snow">
            <label class="col-xs-4">Email</label>
            <input type="text" class="col-xs-8 error" value="jonsnow!knowsnothing.com">
        </form>

    </div><!-- /col -->
</div><!-- /row -->
</div><!-- /container -->

</body>
</html>