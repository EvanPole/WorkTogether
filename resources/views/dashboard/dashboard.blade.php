<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2>Vos services</h2>

                    <table>
                        <tr>
                            <th>Nom</th>
                            <th>Etat</th>
                            <th>Type</th>
                            <th>Emplacement</th>
                        </tr>
                        <tr style="background: #ff4b4b84;">
                            <td>SErveur Solkde</td>
                            <td>OK</td>
                            <td>Web</td>
                            <td>D345</td>
                        </tr>
                        <tr>
                            <td>DLEf fejks f</td>
                            <td>OK</td>
                            <td>DB</td>
                            <td>D345</td>
                        </tr>
                        <!-- Ajoutez plus de lignes selon les besoins -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
