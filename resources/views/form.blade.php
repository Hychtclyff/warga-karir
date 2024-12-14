<x-layout>

    <div class="container mx-auto p-4 max-h-screen">
        <div
            class="divide-y divide-gray-100  overflow-hidden relative bg-gray-500  rounded-xl py-5 shadow-lg text-white">

            <h1 class="font-bold text-5xl text-white text-center mb-3">
                @if (isset($row))
                    Update Data
                @else
                    Menambahkan Data
                @endif
            </h1>
            <form method="post" action="{{ isset($row) ? route('warga.update', $row->id) : route('warga.store') }}">
                @if (isset($row))
                    @method('PATCH') <!-- Menetapkan metode PATCH untuk update -->
                @endif
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
                @csrf
                <div class="space-y-12 flex  justify-center text-white">
                    <div class="border-b border-gray-900/10 pb-12 ">

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 jus">

                            <div class="sm:col-span-3">
                                <label for="nik" class="block text-sm/6 font-medium text-white">NIK</label>
                                <div class="mt-2">
                                    <input type="text" name="nik" id="nik" autocomplete="given-name"
                                        value="{{ isset($row) ? $row->nik : old('nik') }}"
                                        class="block w-full rounded-md border-0 py-1.5 px-5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    @error('nik')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="nama" class="block text-sm/6 font-medium text-white">Nama</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama"
                                        value="{{ isset($row) ? $row->nama : old('nama') }}" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 px-5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">

                                    @error('nama')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="pekerjaam" class="block text-sm/6 font-medium text-white">Pekerjaan
                                </label>
                                <div class="mt-2">
                                    <input id="pekerjaan" name="pekerjaan" type="text" autocomplete="email"
                                        value="{{ isset($row) ? $row->pekerjaan : old('pekerjaan') }}"
                                        class="block w-full rounded-md border-0 py-1.5 px-5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">

                                    @error('pekerjaan')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-span-full">
                                <label for="alamat" class="block text-sm/6 font-medium text-white">Alamat</label>
                                <div class="mt-2">
                                    <input type="text" name="alamat" id="alamat" autocomplete="alamat"
                                        value="{{ isset($row) ? $row->alamat : old('alamat') }}"
                                        class="block w-full rounded-md border-0 py-1.5 px-5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                                    @error('alamat')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="mt-6 flex items-center justify-center  gap-x-6">
                    <a href="{{ route('home') }}" class="text-sm/6 font-semibold text-white">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>

            </form>

        </div>
</x-layout>
