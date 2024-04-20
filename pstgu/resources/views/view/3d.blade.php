<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ __('Панорама ВУЗа') }}
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <style>
    #panorama {
        width: 100%;
        height: 95vh;
    }
    </style>
</head>
<body>

<div id="panorama"></div>

<script>
pannellum.viewer('panorama', {
    "type": "equirectangular",
    "panorama": "{{ asset("img/view/$image") }}"
});
</script>

</body>
</html>
