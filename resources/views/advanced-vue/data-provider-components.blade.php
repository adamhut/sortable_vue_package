<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">
    <title>CodeSandbox Vue</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="min-h-screen bg-grey-darker p-8">
            <div class="max-w-md mx-auto mb-8">
                <fetch-json url="/contacts.json">
                    <div class="card" slot-scope="{json:contacts,loading}">
                        <h1 class="text-2xl font-bold mb-6">Your Contacts</h1>
                        <div v-if="loading">Loading...</div>
                        <contact-list v-else :contacts="contacts"></contact-list>
                    </div>
                </fetch-json>    
            </div>

            <div class="max-w-md mx-auto mb-8">
                <fetch-json url='/albums.json'>
                    <div class="card" slot-scope="{json:albums,loading}">
                        <h1 class="text-2xl font-bold mb-6">Your Death Metal Albums</h1>
                        <div v-if="loading">Loading...</div>
                        <div v-else class="album-grid">
                            <div class="album-grid-item" v-for="album in albums">
                                <img :src="album.artwork" alt="" />
                                <h2 class="album-title">@{{album.title}}</h2>
                                <p class="album-artist">@{{album.artist}}</p>
                            </div>
                        </div>
                    </div>
                </fetch-json>
            </div>
        </div>
    </div>
    <!-- built files will be auto injected -->
    
    <script type="text/javascript" src="/js/data-provider-components.js"></script>
</body>

</html>