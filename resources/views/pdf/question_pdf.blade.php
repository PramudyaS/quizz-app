<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="flex-inline w-full">
    <h3 class="text-center font-bold text-2xl">Report Question Data</h3>
    <div class="bg-white pb-4 px-4 rounded-md w-full mt-5">
        <div class="overflow-x-auto mt-6">
            <table class="table-auto border-collapse w-full">
                <thead>
                <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                    <th class="px-4 py-2 bg-gray-200 ">#</th>
                    <th class="px-4 py-2 bg-gray-200 ">Category</th>
                    <th class="px-4 py-2 bg-gray-200">Question</th>
                </tr>
                </thead>
                <tbody class="text-sm font-normal text-gray-700">
                @forelse($question as $item)
                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                        <td class="px-4 py-4">{{  $loop->index + 1  }}</td>
                        <td class="px-4 py-4">{{  $item->question_category->name }}</td>
                        <td class="px-4 py-4">{{  $item->name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-4 text-center">No Data Found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

