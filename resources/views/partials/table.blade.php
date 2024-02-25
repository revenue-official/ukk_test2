<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    NIP
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Lahir
                </th>
                <th scope="col" class="px-6 py-3">
                    Golongan
                </th>
                <th scope="col" class="px-6 py-3">
                    Jabatan
                </th>
                <th scope="col" class="px-6 py-3">
                    Gender
                </th>
                <th scope="col" class="text-white">
                    <a href="{{ route('pegawai.create') }}">
                        <div
                            class="flex w-fit px-4 py-1 items-center justify-center bg-blue-500 rounded-full hover:bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-plus">
                                <path d="M5 12h14" />
                                <path d="M12 5v14" />
                            </svg>
                            <span>New</span>
                        </div>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $data)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <td class="px-4 py-2">
                        {{ $loop->iteration . '.' }}
                    </td>
                    <td scope="row" class="px-4 py-2  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $data->nama_pegawai }}
                    </td>
                    <th class="px-4 py-2">
                        {{ $data->nip }}
                    </th>
                    <td class="px-4 py-2">
                        {{ $data->tgl_lahir }}
                    </td>
                    <td class="px-4 py-2">
                        @foreach ($golongan as $gol)
                            @if ($gol->id_gol === $data->golongan)
                                {{ $gol->nm_golongan }}
                            @endif
                        @endforeach
                    </td>
                    <td class="px-4 py-2">
                        @foreach ($jabatan as $jab)
                            @if ($jab->id_jab === $data->jabatan)
                                {{ $jab->nm_jabatan }}
                            @endif
                        @endforeach
                    </td>
                    <td class="px-4 py-2 font-semibold">
                        <div
                            class="w-fit px-4 py-2 text-xs rounded-full
                            {{ $data->jenis_kelamin === 'Laki-laki' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                            {{ $data->jenis_kelamin }}
                        </div>
                    </td>
                    <td class="flex w-fit gap-5 py-4">
                        <a href="#" class="font-medium text-orange-400 dark:text-orange-400 hover:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-pencil">
                                <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z" />
                                <path d="m15 5 4 4" />
                            </svg>
                        </a>
                        <form action="{{ route('pegawai.destroy', $data->nip) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                class="font-medium text-red-500 dark:text-red-500 hover:text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash">
                                    <path d="M3 6h18" />
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
