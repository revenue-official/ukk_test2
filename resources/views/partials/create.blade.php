<div class="flex items-center w-full min-h-screen">
    <form class="w-1/3 mx-auto bg-white px-10 py-5 rounded-md shadow-md" action="{{ route('pegawai.store') }}"
        method="POST">
        @csrf
        @method('POST')
        <div class="flex items-center justify-center">
            <div class="flex flex-col gap-2 w-full text-center mt-4 mb-8">
                <span class="text-3xl text-indigo-400 font-semibold">Create</span>
                <span class="text-xs text-gray-400">Lorem ipsum, dolor sit amet consectetur lorem!</span>
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="number" name="nip" id="floating_nip"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required autocomplete="off" />
            <label for="floating_nip"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIP</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="nama_pegawai" id="floating_nama"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required autocomplete="off" />
            <label for="floating_nama"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="tgl_lahir" id="floating_tgl_lahir"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required autocomplete="off" />
            <label for="floating_tgl_lahir"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
                Lahir</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <select id="dropdown_golongan" name="golongan"
                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required onchange="SelectedChange()">
                <option selected disabled value="">Golongan</option>
                @foreach ($golongan as $gol)
                    <option class="text-gray-900" value="{{ $gol->id_gol }}">{{ $gol->nm_golongan }}</option>
                @endforeach
            </select>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <select id="dropdown_jabatan" name="jabatan"
                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required onchange="SelectedChange()">
                <option selected disabled value="">jabatan</option>
                @foreach ($jabatan as $jab)
                    <option class="text-gray-900" value="{{ $jab->id_jab }}">{{ $jab->nm_jabatan }}</option>
                @endforeach
            </select>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <select id="dropdown_jenis_kelamin" name="jenis_kelamin"
                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                <option selected disabled value="">Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="flex justify-end gap-2 mt-8 mb-4">
            <a href="{{ route('pegawai.index') }}"
                class="text-white bg-gray-500 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-md text-sm w-full sm:w-auto px-4 py-2 text-center dark:bg-gray-500 dark:hover:bg-gray-500 dark:focus:ring-gray-600">Back</a>
            <button type="submit"
                class="text-white bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-md text-sm w-full sm:w-auto px-4 py-2 text-center dark:bg-indigo-500 dark:hover:bg-indigo-500 dark:focus:ring-indigo-700">Submit</button>
        </div>
    </form>
</div>

{{-- Kode Javascript --}}
<script>
    const dropdownElements = document.querySelectorAll('[id^="dropdown_"]');

    function SelectedChange() {
        dropdownElements.forEach((element) => {
            element.addEventListener('change', () => {
                element.classList.remove('text-gray-500');
                element.classList.add('text-gray-900');
            });
        });
    }

    document.addEventListener('DOMContentLoaded', SelectedChange);

    const floatingTglLahir = document.getElementById('floating_tgl_lahir');

    floatingTglLahir.addEventListener('click', (event) => {
        const inputElement = event.target;
        inputElement.setAttribute('type', 'date');
    });

    floatingTglLahir.addEventListener('blur', (event) => {
        const inputElement = event.target;
        if (inputElement.value === '') {
            inputElement.setAttribute('type', 'text');
        }
    });
</script>
