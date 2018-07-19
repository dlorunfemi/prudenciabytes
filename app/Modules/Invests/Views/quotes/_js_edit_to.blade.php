<script type="text/javascript">
  $(function () {
    $('#btn-edit-client').click(function () {
      $('#modal-placeholder').load('{{ route('clients.ajax.modalEdit') }}', {
        client_id: $(this).data('client-id'),
        refresh_to_route: '{{ route('investEdit.refreshTo') }}',
        id: {{ $invest->id }}
      });
    });

    $('#btn-change-client').click(function () {
      $('#modal-placeholder').load('{{ route('clients.ajax.modalLookup') }}', {
        id: {{ $invest->id }},
        update_client_id_route: '{{ route('investEdit.updateClient') }}',
        refresh_to_route: '{{ route('investEdit.refreshTo') }}'
      });
    });
  });
</script>