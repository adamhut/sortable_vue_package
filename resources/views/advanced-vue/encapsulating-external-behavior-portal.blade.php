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
        <div>
            <div class="min-h-screen bg-grey-darker p-8">
            <div class="max-w-sm mx-auto">
                <user-settings-form 
                    :account-id="accountId"
                ></user-settings-form>
            </div>
        </div>

     

        <portal to="modals" v-if="showAnnouncement">
            <announcement-modal
                :show="showAnnouncement"
                @close="showAnnouncement = false"
            >
            </announcement-modal>
        </portal> 

        <portal-target name="modals"></portal-target>      
       
    </div>
    </div>
    <!-- built files will be auto injected -->
    
    <script type="text/javascript" src="/js/encapsulating-external-behavior-portal.js"></script>
</body>
</html>