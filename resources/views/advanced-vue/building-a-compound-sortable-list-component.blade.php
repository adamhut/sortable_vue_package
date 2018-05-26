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
            <div class="max-w-sm mx-auto mb-8">
                <div class="card">
                    <h1 class="text-2xl font-bold mb-6">Your Contacts</h1>
                    <sortable-list v-model="contacts">
                        <div class="contact-list" slot-scope="{items :contacts}">
                            <sortable-item v-for="contact in contacts" :key="contact.id">
                                <div class="contact-list-item">
                                    <div class="contact-list-contact">
                                        <img :src="contact.avatar" class="contact-list-avatar" alt="">
                                        <div>
                                            <div class="contact-list-name">
                                                @{{ contact.name }}
                                            </div>
                                            <div class="contact-list-email">
                                                @{{ contact.email }}
                                            </div>
                                        </div>
                                    </div>
                                    <sortable-handle>
                                        <svg class="contact-list-handle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M14 4h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zM8 4h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zm6 6h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm-6 0h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm6 6h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm-6 0h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1z"/></svg>
                                    </sortable-handle>
                                </div>
                            </sortable-item>
                        </div>
                    </sortable-list>
                </div>
            </div>
            
            {{--
            <div class="max-w-sm mx-auto">
                <div class="card">
                    <h1 class="text-2xl font-bold mb-6">Your Contacts</h1>
                    
                    <div class="contact-list">
                        <div class="contact-list-item" v-for="contact in contacts" :key="contact">
                            <div class="contact-list-contact">
                                <img :src="contact.avatar" class="contact-list-avatar" alt="">
                                <div>
                                    <div class="contact-list-name">
                                        @{{ contact.name }}
                                    </div>
                                    <div class="contact-list-email">
                                        @{{ contact.email }}
                                    </div>
                                </div>
                            </div>
                            <svg class="contact-list-handle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M14 4h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zM8 4h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zm6 6h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm-6 0h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm6 6h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm-6 0h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1z"/></svg>
                        </div>
                    </div>
                    
                </div>
            </div>
            --}}
        </div>
    </div>
    <!-- built files will be auto injected -->
    
    <script type="text/javascript" src="/js/building-a-compound-sortable-list-component.js"></script>
</body>

</html>

