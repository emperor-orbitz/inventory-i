@if ($errors->any())
<div class="alert alert-danger my-2">
    @foreach ($errors->all() as $error)
        <span style="display: block; font-size:13px">- {{ $error }}</span>
    @endforeach
</div>
@endif