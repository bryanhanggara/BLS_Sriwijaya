@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
   
  
    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold">
                    {{ __('Materi') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('admin.bab.create') }}" class="btn btn-danger">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('Tambah Materi') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-category" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>No</th>
                                <th>Nama Modul</th>
                                <th>Nama Bab</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($babs as $bab)
                            <tr data-entry-id="{{ $bab->id }}">
                                <td>

                                </td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bab->subs->sub_name }}</td>
                                <td>{{ $bab->name }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('admin.bab.show', $bab->id) }}" class="btn btn-success">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <a href="{{ route('admin.bab.edit', $bab->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                      
                                        <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{ route('admin.bab.destroy', $bab->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection

@push('script-alt')
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'delete selected'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.categories.mass_destroy') }}",
    className: 'btn-danger d-none',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('zero selected')
        return
      }
      if (confirm('are you sure ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-category:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush