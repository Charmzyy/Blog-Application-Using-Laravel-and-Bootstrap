<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<form action={{ Route('reply.store') }} method="POST">
    @csrf

    <input type="hidden" name="replies_id"value="">
    <label for="reply">Add Your reply</label>
    <textarea name="reply" class="form-control">

    </textarea>

    <button class="btn btn-primary"type="submit">REPLY</button>
</form>