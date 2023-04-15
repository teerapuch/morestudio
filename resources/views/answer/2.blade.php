<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Answer 2') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg py-2">
                    2. จากฐานข้อมูลที่ออกแบบ เขียนคำสั่ง mysql เพื่อแสดงจำนวนที่ขายไปได้ในแต่ละยี่ห้อ/รุ่นในช่วงวันที่ 1 มิ.ย 2022 - 15 มิ.ย 2022
                    </p>
                    <hr />
                    <code class="block whitespace-pre overflow-x-scroll bg-black text-white">
                        SELECT BrandID, ModelID, COUNT(*) AS total_sales
                        FROM saleshistories
                        WHERE SaleDate BETWEEN '2022-06-01' AND '2022-06-15'
                        GROUP BY BrandID, ModelID;
                    </code>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
