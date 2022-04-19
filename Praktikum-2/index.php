<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum 2</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="fluid-container">
    <select id="content-selector" class="form-select mb-4" onchange="setContent(this.value)">
      <option value="get">Get Form</option>
      <option value="post">Post Form</option>
      <option value="logic">Logic Control</option>
    </select>
    <div id="content"></div>
  </div>

  <script type="text/javascript">
    function setContent(e) {
      const height = screen.height - document.getElementById("content-selector").offsetHeight
      let content
      if (e == 'logic') {
        document.getElementById('content').innerHTML = '<iframe src="get-form.php?logic=true" width="100%" height="' + height + '" frameborder="0" id="content" />'
      } else {
        document.getElementById('content').innerHTML = '<iframe src="' + ((e == 'get') ? 'get-form.php' : 'post-form.php') + '" width="100%" height="' + height + '" frameborder="0" id="content" />'
      }
    }

    (() => setContent('get'))()
  </script>
</body>
</html>