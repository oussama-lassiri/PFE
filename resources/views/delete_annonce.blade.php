<form action="{{route('second_page.destroy_bien',$item['id'])}}" method="post">
    @method('delete')
    @csrf
    <div class="modal fade" id="ModalDelete{{$item['id']}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Suppression d'annonce </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Est ce que vous êtes sûr de vouloir supprimer cette annonce ?</h5>
                    <i>Cette action est irréversible.Attention !!</i>
                </div>
                <div class="modal-footer">
                    <a href="user1.blade.php" type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">Annuler</a>
                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                </div>
            </div>
        </div>
    </div>

</form>
