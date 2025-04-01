<!DOCTYPE html>
<!-- ICS2O-Unit3-02-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="volume of pyramid, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="domenic dangelo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-amber.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>volume of pyramid, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">volume of pyramid, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/pyramid.png" alt="pyramid" />
        <p></p>
      </div>
      <h1 class="page-content">Formula</h1>
      <br />
      <h2 class="page-content">A = (L x W x H) / 3</h2>
      <br />
      <h3 class="page-content">Please enter integers for dimensions:</h3>
      <br />
      <form action="answer.php" method="GET">
        <!-- Simple Textfield -->
        <span>length:</span>
        <div class="mdl-textfield mdl-js-textfield">
          <input
            class="mdl-textfield__input"
            type="text"
            pattern="-?[0-9]*(\.[0-9]+)?"
            id="length"
            step="0.01" />
          <label class="mdl-textfield__label" for="length"></label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <span>mm</span>
        <br />
        <span>height:</span>
        <div class="mdl-textfield mdl-js-textfield">
          <input
            class="mdl-textfield__input"
            type="text"
            pattern="-?[0-9]*(\.[0-9]+)?"
            id="width"
            step="0.01" />
          <label class="mdl-textfield__label" for="width"></label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <span>mm</span>
        <br />
        <span>Height:</span>
        <div class="mdl-textfield mdl-js-textfield">
          <input
            class="mdl-textfield__input"
            type="text"
            pattern="-?[0-9]*(\.[0-9]+)?"
            id="height"
            step="0.01" />
          <label class="mdl-textfield__label" for="height"></label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <span>mm</span>
        <br />
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
        type="submit">
        Calculate
      </div>
    </main>
  </div>
</body>

</html>