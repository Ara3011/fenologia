<div class="modal" tabindex="-1" role="dialog" id="actualizararbol">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Árbol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="">Nombre Árbol</label>
                <input type="text" id="editardescripcion" v-model="editardescripcion">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" @click="updateFrutal">Aceptar</button>
            </div>
        </div>
    </div>
</div>


