<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circle Calculator</title>
  <!-- MDL CSS -->
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Circle Calculator</span>
      </div>
    </header>

    <main class="mdl-layout__content">
      <div class="page-content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset">
            <form action="" method="post">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="number" name="diameter" id="diameter" required>
                <label class="mdl-textfield__label" for="diameter">Enter Diameter</label>
              </div>

              <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                Calculate
              </button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // Get the diameter from the form
              $diameter = floatval($_POST['diameter']);

              // Function to calculate area and circumference
              function calculate_circle($diameter)
              {
                $radius = $diameter / 2;
                $area = M_PI * pow($radius, 2);
                $circumference = M_PI * $diameter;
                return [$area, $circumference];
              }

              // Perform the calculation
              list($area, $circumference) = calculate_circle($diameter);

              // Display the results
              echo "<h5>Results:</h5>";
              echo "<p>Area: " . number_format($area, 2) . " square units</p>";
              echo "<p>Circumference: " . number_format($circumference, 2) . " units</p>";
            }
            ?>
          </div>
        </div>
      </div>
    </main>
  </div>

</body>

</html>