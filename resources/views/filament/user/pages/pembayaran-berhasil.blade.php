<div class="min-h-screen w-full bg-slate-100 shadow-md">
    <x-header-user />
    <div class="flex items-center justify-center py-6">
        <svg width="257" height="257" viewBox="0 0 257 257" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M128 247C185.438 247 232 200.438 232 143C232 85.5624 185.438 39 128 39C70.5624 39 24 85.5624 24 143C24 200.438 70.5624 247 128 247Z"
                fill="#09C81C" />
            <path
                d="M117.617 183C115.257 183.004 112.959 182.238 111.07 180.819L110.953 180.731L86.2914 161.82C85.1492 160.943 84.1907 159.848 83.4706 158.599C82.7505 157.35 82.2828 155.971 82.0944 154.541C81.9059 153.11 82.0003 151.657 82.3722 150.263C82.7441 148.87 83.3862 147.563 84.2618 146.418C85.1375 145.273 86.2295 144.312 87.4756 143.591C88.7216 142.869 90.0973 142.4 91.5241 142.211C92.9509 142.022 94.4009 142.117 95.7912 142.49C97.1815 142.862 98.485 143.506 99.6271 144.384L115.601 156.662L153.347 107.3C154.222 106.156 155.314 105.195 156.56 104.474C157.805 103.752 159.18 103.283 160.606 103.095C162.033 102.906 163.482 103 164.872 103.373C166.261 103.746 167.564 104.389 168.706 105.266L168.709 105.269L168.475 105.595L168.716 105.269C171.019 107.043 172.526 109.661 172.906 112.548C173.286 115.435 172.507 118.355 170.742 120.668L126.344 178.703C125.317 180.04 123.996 181.122 122.484 181.865C120.973 182.608 119.311 182.992 117.627 182.987L117.617 183Z"
                fill="white" />
            <path opacity="0.6"
                d="M77.6244 15.2483C81.8352 15.2483 85.2487 11.8348 85.2487 7.62414C85.2487 3.41344 81.8352 0 77.6244 0C73.4136 0 70 3.41344 70 7.62414C70 11.8348 73.4136 15.2483 77.6244 15.2483Z"
                fill="#09C81C" />
            <path opacity="0.5"
                d="M251.648 256.297C254.216 256.297 256.297 254.215 256.297 251.648C256.297 249.081 254.216 247 251.648 247C249.081 247 247 249.081 247 251.648C247 254.215 249.081 256.297 251.648 256.297Z"
                fill="#09C81C" />
            <path opacity="0.25"
                d="M4.64846 207.297C7.21574 207.297 9.29692 205.215 9.29692 202.648C9.29692 200.081 7.21574 198 4.64846 198C2.08118 198 0 200.081 0 202.648C0 205.215 2.08118 207.297 4.64846 207.297Z"
                fill="#09C81C" />
        </svg>
    </div>
    <div class="text-center py-4">
        <h1 class="text-2xl font-bold text-blue-800 mb-4">Pembayaran Sukses!</h1>
        <p class="text-gray-500 mb-10">Silahkan cek kode QR Anda di menu kode QR</p>
        <a href="{{ route('filament.user.pages.dashboard') }}"
            class="bg-blue-800 text-white text-lg font-bold py-3 px-8 rounded-full hover:bg-blue-900">
            Lanjutkan
        </a>
    </div>
</div>