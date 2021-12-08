<x-layout>
<div id="url-form">
    @if($errors->any())
     <div class="error-msg">
    <h3> {{ $errors->first() }} <br><br>
    </h3>
     </div>
    @endif

    <h1>
        Paste your URL here
    </h1>
        <h4><i>Make sure to include "http://" or "https://"</i> </h4>
    <form action="/shorten" method="POST">
        <input name="url" type="text" placeholder="https://www.example.com" size="80">
        @csrf
    </form>
</div>
</x-layout>
