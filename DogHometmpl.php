<html lang ="en">
<head>
  <meta charset="utf-8">
    <title>Document</title>
      <style>
  header
  {
    background: #e3e3e3;
    padding: 2em;
    text-align: center;
  }
    </style>
</head>
  <body>
    <h1>
      Day Walk
    </h1>
      <ul>
        <li>
          <strong>doggy drink:</strong> <?=$daywalk['drink'];?>
        </li>
          <li>
            <strong>doggy drink:</strong> <?=$daywalk['Eat'];?>
          </li>

          <li>
            <strong>doggy drink:</strong> <?=$daywalk['Activity'];?>
          </li>

          <li>
            <strong>doggy drink:</strong>
<?php
if ($daywalk ['true'])
{
echo 'Text Sent';
}
else
{
echo 'No Text';
}
 ?>
          </li>
      </ul>
  </body>
</html>
