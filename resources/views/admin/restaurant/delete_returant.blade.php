<!-- Deleted insurance -->
<div class="modal fade" id="Deleted" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف بيانات مريض</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('restaurant.destroy', 'test') }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="">
                    <div class="row">
                        <div class="col">
                            <p class="h5 text-danger"> are sure you want to delete this resturant</p>
                            <input type="text" class="form-control" readonly value="">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">close</button>
                        <button class="btn btn-success">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
