<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/laracasts-tabs.css')}}">

    <title>Tabs</title>
</head>

<body class="font-sans p-10">
    <div id="app" class="text-center">
        <h1 class="text-2xl font-bold mb-6">Tabs</h1>
        <tabs class=" border border-gray-400 px-4 py-2 mb-10">
            <tab title="First">
                <p>Hello worlds</p>
            </tab>
            <tab title="Second">
                <p>Hello worlds, again</p>
            </tab>
            <tab title="Third" active>
                <p>Hello worlds  third</p>
            </tab>

        </tabs>
    </div>

    <script src="{{mix('/js/laracasts-tabs.js')}}"></script>
</body>

</html>