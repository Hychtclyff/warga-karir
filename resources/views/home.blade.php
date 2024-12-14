<x-layout>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 5000,
                showConfirmButton: false
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
    <div class="container mx-auto p-4 max-h-screen flex flex-col gap-5">
        @auth
            <div class="flex justify-end gap-3">
                <a href="{{ route('form') }}" class="bg-blue-800 px-7 rounded-full py-2 text-white">Add</a>
            </div>
        @endauth
        <ul role="list"
            class="divide-y divide-gray-100 h-[50rem] overflow-hidden relative bg-gray-500 text-black rounded-xl py-5 shadow-lg">
            <li
                class="grid {{ auth()->check() ? 'grid-cols-5' : 'grid-cols-4' }} justify-center gap-x-6 border-b-2 py-3  border-black px-10 ">
                <div class="flex min-w-0 gap-x-4 bg-gray-200 justify-center rounded-lg  py-2">
                    <p class="text-sm/6 font-semibold ">Nik</p>
                </div>
                <div class="flex min-w-0 gap-x-4 bg-gray-200 justify-center rounded-lg  py-2">
                    <p class="text-sm/6 font-semibold ">Nama</p>
                </div>

                <div class="flex min-w-0 gap-x-4 bg-gray-200 justify-center rounded-lg  py-2">
                    <p class="text-sm/6 ">Alamat</p>

                </div>
                <div class="flex min-w-0 gap-x-4 bg-gray-200 justify-center rounded-lg  py-2">
                    <p class="text-sm/6 ">Pekerjaan</p>

                </div>
                @auth

                    <div class="flex min-w-0 gap-x-4 bg-gray-200 justify-center rounded-lg  py-2">
                        <p class="text-sm/6 ">Action</p>

                    </div>
                @endauth

            </li>
            @foreach ($data as $item)
                <li
                    class="grid {{ auth()->check() ? 'grid-cols-5' : 'grid-cols-4' }}  justify-center gap-x-6 py-3 px-10 bg-gray-200 mx-5 my-2 rounded-lg shadow-lg">
                    <div class="flex min-w-0 gap-x-4  justify-center rounded-lg  py-2  items-center">
                        <p class="text-sm/6 font-semibold ">{{ $item->nik }} </p>
                    </div>
                    <div class="flex min-w-0 gap-x-4  justify-center rounded-lg  py-2  items-center">
                        <p class="text-sm/6 font-semibold ">{{ $item->nama }}</p>
                    </div>

                    <div class="flex min-w-0 gap-x-4  justify-center rounded-lg  py-2  items-center">
                        <p class="text-sm/6 ">{{ $item->alamat }}</p>

                    </div>
                    <div class="flex min-w-0 gap-x-4  justify-center rounded-lg  py-2  items-center">
                        <p class="text-sm/6 ">{{ $item->pekerjaan }}</p>

                    </div>
                    @auth

                        <div class="flex min-w-0 gap-x-4  justify-center rounded-lg  py-2  items-center">
                            <a href='{{ route('form.edit', $item->id) }}'
                                class="rounded-full px-5 bg-yellow-500 py-2">edit</a>
                            <form action="{{ route('warga.destroy', $item->id) }}" method="POST"
                                id="delete-form-{{ $item->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="rounded-full px-5 bg-red-500 py-2" type="button"
                                    onclick="confirmDelete({{ $item['id'] }})">Delete</button>

                            </form>
                        </div>
                    @endauth

                </li>
            @endforeach

        </ul>

    </div>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Hapus?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${id}`).submit();
                }
            });
        }
    </script>
</x-layout>
