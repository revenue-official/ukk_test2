<div class="flex items-end w-fit min-h-64 max-h-screen mx-auto bg-white px-10 py-5 mb-3 rounded-md shadow-md">
    {{-- Dari chart js  --}}
    <div>
        <canvas id="ChartJS"></canvas>
    </div>
    {{-- manual dari lsp  --}}
    <div>
        <svg width="500" height="300">
            <line x1="50" y1="250" x2="450" y2="250" stroke="gray" />
            <line x1="50" y1="250" x2="50" y2="50" stroke="gray" />

            @for ($i = 0; $i <= 10; $i++)
                <text x="40" y="{{ 250 - $i * 20 }}" text-anchor="end" fill="gray">{{ $i * 10 }}</text>
            @endfor

            @foreach ($relationGolongan as $label => $count)
                <text x="{{ $loop->index * 80 + 100 }}" y="270" text-anchor="middle"
                    fill="gray">{{ $count === 0 ? null : $label }}</text>
                <rect x="{{ $loop->index * 80 + 70 }}" y="{{ 250 - $count * 5 }}" width="60"
                    height="{{ $count * 5 }}" fill="rgba(0, 0, 255, 0.3)" stroke="blue" />
            @endforeach

            <text x="20" y="150" text-anchor="middle" transform="rotate(-90,10,150)" fill="gray">Pegawai</text>

        </svg>
    </div>
</div>
{{-- Script JS  --}}
<script>
    const jsonData = {!! $pegawaiJson !!};

    const ctx = document.getElementById('ChartJS').getContext('2d');

    const data = {
        labels: jsonData.map(item => item.nm_golongan),
        datasets: [{
            label: 'Data Pegawai',
            data: jsonData.map(item => item.gaji),
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1

        }]
    };

    const options = {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>
