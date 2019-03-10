@auth
@can('touch', $brand)
<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active">
        <input type="radio" name="options" id="option1" autocomplete="off" checked> AddFavs
    </label>
    <label class="btn btn-secondary">
        <input type="radio" name="options" id="option2" autocomplete="off"> RemoveFavs
    </label>
   
</div>
<a href="/brands/{{ $brand->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a>
<form action="/brands/{{ $brand->id }}" method="post" class="mr-2 float-right">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger btn-sm">Delete Book</button>
</form>
@endcan
@endauth
