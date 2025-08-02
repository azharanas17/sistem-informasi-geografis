<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <div id="map" style="width: 100%; height: 400px; margin-top: 2rem;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var map = L.map('map').setView([-7.9812985, 112.6319264], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var markers = @json($markers);
        markers.forEach(function(marker) {
            // Prepare the info content
            let infoHtml = '';
            if (marker.info && marker.info.trim() !== '') {
                // Replace line breaks with <br> for HTML
                infoHtml = marker.info.replace(/(?:\r\n|\r|\n)/g, '<br>');
            }

            // Always show the title in bold, then info (if any)
            let popupContent = `
                <div style="min-width:180px;">
                    <div style="font-weight:bold; color:#2d3748;">${marker.title}</div>
                    ${infoHtml ? `<div style="margin-top:4px;">${infoHtml}</div>` : ''}
                </div>
            `;

            L.marker([marker.lat, marker.lng])
                .addTo(map)
                .bindPopup(popupContent);
        });
    });
    </script>
</x-app-layout>
