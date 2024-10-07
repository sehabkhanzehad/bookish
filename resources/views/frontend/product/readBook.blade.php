<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTitleId">
            {{ $product->name }}
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <iframe src="{{ asset($product->read_file) }}" frameborder="0" width="100%" style="min-height: 80vh; max-height: 80vh; overflow-y: auto;"></iframe>
        </div>
    </div>
</div>