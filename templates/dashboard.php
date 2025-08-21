<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>WP_BARQ Dashboard</title>
    <style>
    /* To prevent Tailwind from affecting WP Admin menu */
    body.wp-admin {
        font-family: inherit;
    }
    </style>
</head>

<body class="bg-gray-100 p-6">

    <!-- Header -->
    <div class="bg-blue-500 text-white p-4 rounded-md shadow mb-6">
        <h1 class="text-xl font-bold">WP_BARQ Dashboard</h1>
        <p class="text-sm">Monitor & report WordPress site health</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-md shadow flex items-center space-x-3">
            <span class="dashicons dashicons-warning text-yellow-500 text-2xl"></span>
            <div>
                <p class="text-gray-500 text-sm">Total Issues</p>
                <p class="text-lg font-bold text-red-500">4</p>
            </div>
        </div>
        <div class="bg-white p-4 rounded-md shadow flex items-center space-x-3">
            <span class="dashicons dashicons-yes text-green-500 text-2xl"></span>
            <div>
                <p class="text-gray-500 text-sm">Resolved</p>
                <p class="text-lg font-bold text-green-500">2</p>
            </div>
        </div>
        <div class="bg-white p-4 rounded-md shadow flex items-center space-x-3">
            <span class="dashicons dashicons-clock text-yellow-500 text-2xl"></span>
            <div>
                <p class="text-gray-500 text-sm">Pending Tickets</p>
                <p class="text-lg font-bold text-yellow-500">2</p>
            </div>
        </div>
        <div class="bg-white p-4 rounded-md shadow flex items-center space-x-3">
            <span class="dashicons dashicons-admin-site text-blue-500 text-2xl"></span>
            <div>
                <p class="text-gray-500 text-sm">Site Health</p>
                <p class="text-lg font-bold text-blue-500">Good</p>
            </div>
        </div>
    </div>

    <!-- Performance Overview & Site Health -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-white p-4 rounded-md shadow col-span-2">
            <h2 class="text-gray-700 font-semibold mb-3">Performance Overview</h2>
            <div class="h-48 flex items-center justify-center text-gray-400">
                [Chart Placeholder]
            </div>
        </div>
        <div class="bg-white p-4 rounded-md shadow">
            <h2 class="text-gray-700 font-semibold mb-3">Site Health</h2>
            <div class="h-48 flex flex-col justify-center items-center text-gray-400 space-y-2">
                [Chart Placeholder]
                <div class="flex justify-between w-full px-4 text-sm text-gray-600 mt-3">
                    <div>
                        <p>Target</p>
                        <p class="text-red-500 font-semibold">$20K ↓</p>
                    </div>
                    <div>
                        <p>Revenue</p>
                        <p class="text-green-500 font-semibold">$20K ↑</p>
                    </div>
                    <div>
                        <p>Today</p>
                        <p class="text-green-500 font-semibold">$20K ↑</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Errors Table -->
    <div class="bg-white p-4 rounded-md shadow">
        <h2 class="text-gray-700 font-semibold mb-3">Recent Errors</h2>
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-100 text-left text-gray-600">
                    <th class="p-2">Timestamp</th>
                    <th class="p-2">Source</th>
                    <th class="p-2">Message</th>
                    <th class="p-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="p-2">2025-07-29 10:22</td>
                    <td class="p-2">WP Rocket</td>
                    <td class="p-2">Cache write failed</td>
                    <td class="p-2 text-red-600 font-semibold">Unresolved</td>
                </tr>
                <tr>
                    <td class="p-2">2025-07-28 14:50</td>
                    <td class="p-2">Yoast SEO</td>
                    <td class="p-2">Meta description missing</td>
                    <td class="p-2 text-green-600 font-semibold">Resolved</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>