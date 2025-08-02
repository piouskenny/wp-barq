<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body> 
<div class="max-w-6xl mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">🔒 WP_BARQ Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- System Status -->
        <div class="bg-white shadow-md rounded-lg p-5 border-l-4 border-blue-500">
            <h2 class="text-xl font-semibold mb-2">System Health</h2>
            <p class="text-sm text-gray-600">Everything is running smoothly ✅</p>
        </div>

        <!-- Detected Issues -->
        <div class="bg-white shadow-md rounded-lg p-5 border-l-4 border-yellow-500">
            <h2 class="text-xl font-semibold mb-2">Detected Warnings</h2>
            <p class="text-sm text-gray-600">1 plugin conflict detected (WP Rocket)</p>
            <button class="mt-3 bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                View Details
            </button>
        </div>

    </div>

    <!-- Actions -->
    <div class="mt-10">
        <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg">
            🔁 Recheck Now
        </button>
    </div>
</div>
</body> 