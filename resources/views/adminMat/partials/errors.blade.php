@if ($errors->any())
    <div class="card-error">
        <h4> <i class="icon square design_bug"></i> Erro </h4>
        
        @foreach ($errors->all() as $error)
            <p> {{ $error }} </p>
        @endforeach
    </div>
@endif
