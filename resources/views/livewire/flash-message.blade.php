<div>
    @if(session()->has('sucsess'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>
