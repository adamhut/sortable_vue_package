@section('content')
   

    <section class="is-small is-normal">
        <div class="container">
            <div class="w-3/5 m-auto generic-content">
                <header class="mb-8 text-center">
                    <h1 class="text-3xl mb-1">
                        FAQ
                    </h1>

                    <p>
                        ite is okay. From time to time. we all have question.
                    </p>
                </header>

                @foreach($questions as $question)
                    <question :question="{{json_encode($question)}}"></question>
                @endforeach
                
            </div>
        </div>
    </section>

    
@endsection