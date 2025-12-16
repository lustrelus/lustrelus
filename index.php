<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="The website of LustreLus" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="/js/components.js" type="module">
  </script>

  <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="icon" href="data:image/svg+xml,
    <svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22>
      <text y=%22.9em%22 font-size=%2290%22>☁️</text>
    </svg>">

  <title>Lustre's home</title>
</head>

<body>
  <header>
    <img src="/images/banner.png">
  </header>

  <main>

    <div id="left-side">
    </div>

    <div id="content" class="box">
    </div>

    <div id="right-side">
    </div>

  </main>

  <script>
        document.addEventListener('DOMContentLoaded', function() {
          const content = document.getElementById('content')
            fetch('./pages/home.html').then(function (res) {
                if (res.ok) {
                    return res.text();
                }
                throw res;
            }).then(function (text) {
                content.innerHTML = text;
            });
    });
  </script>
</body>

</html>