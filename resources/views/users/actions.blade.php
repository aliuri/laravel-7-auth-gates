@if (!empty($user) && $user->role != 'admin')
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
  {{-- <button type="button" class="btn btn-danger btn-sm deleteUser">Hapus</button> --}}
  {{-- <button type="button" class="btn btn-warning btn-sm editPengguna" id="" href="">Ubah</button> --}}
  <a href="javascript:void(0)" type="button" data-toggle="tooltip"  data-id="{{$user->id}}" data-original-title="Edit" class="btn btn-warning btn-sm editUser">ubah</a>
  {{-- <button type="button" class="btn btn-success">Right</button> --}}
  <a href="{{ route('user.destroy', $user->id) }}" class="btn {{ !request()->ajax() ? 'btn btn-danger btn-sm' : 'btn btn-danger btn-sm' }}" title="{{ __('Delete') }}"
       onclick="event.preventDefault(); if (confirm('{{ __('Hapus data user?') }}')) $('#delete_user_{{ $user->id }}_form').submit();">Hapus
        <i class="far fa-trash-alt {{ !request()->ajax() ? 'fa-fw' : '' }}"></i>
    </a>

    <form method="post" action="{{ route('user.destroy', $user->id) }}" id="delete_user_{{ $user->id }}_form" class="d-none">
        @csrf
        @method('delete')
    </form>
</div>
@endif