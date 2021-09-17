<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content p-2">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add a New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('category.post') }}" method="POST">
                    @csrf

                    <div class="form-floating mb-3">
                        <input name='name' class="form-control" id="floatingInput" type="text"
                            value="{{ old('name') }}" required placeholder="Input your Email" />
                        <label for="floatingInput">Category Name</label>
                    </div>
                    <div class="form-floating">
                        <textarea name='description' rows="6" class="form-control" id="floatingInput" type="text"
                            value="{{ old('name') }}"></textarea>
                        <label for="floatingPassword">Description</label>
                    </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-md btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-md btn-primary">Create Category</button>
            </div>
            </form>


        </div>
    </div>
</div>
