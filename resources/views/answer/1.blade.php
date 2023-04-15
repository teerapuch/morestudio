<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Answer 1') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg py-2">
                    1. ออกแบบฐานข้อมูลระบบบันทึกการขายรถของโชว์รูมรถ โดยที่จะมีการเก็บข้อมูลดังนี้ >> ยี่ห้อรถ / รุ่นรถ / พนักงาน / ประวัติการขายของแต่ละครั้ง <br /> (รุ่นไหนถูกขาย ขายโดยพนักงานคนไหน)
                    </p>
                    <hr />
                    <h3 class="text-l font-bold py-2">
                        ตาราง Brand (ยี่ห้อรถ)
                    </h3>
                    <ul class="list-disc px-6">
                        <li>
                            BrandID (รหัสยี่ห้อรถ) - Primary Key
                        </li>
                        <li>BrandName (ชื่อยี่ห้อรถ)</li>
                    </ul>
                    <h3 class="text-l font-bold py-2">
                        ตาราง Model (รุ่นรถ)
                    </h3>
                    <ul class="list-disc px-6">
                        <li>
                            ModelID (รหัสรุ่นรถ) - Primary Key
                        </li>
                        <li>ModelName (ชื่อรุ่นรถ)</li>
                        <li>BrandID (รหัสยี่ห้อรถ) - Foreign Key จากตาราง Brand</li>
                    </ul>
                    <h3 class="text-l font-bold py-2">
                        ตาราง Employee (พนักงาน)
                    </h3>
                    <ul class="list-disc px-6">
                        <li>EmployeeID (รหัสพนักงาน) - Primary Key</li>
                        <li>EmployeeName (ชื่อพนักงาน)</li>
                    </ul>
                    <h3 class="text-l font-bold py-2">
                        ตาราง SalesHistories (ประวัติการขาย)
                    </h3>
                    <ul class="list-disc px-6">
                        <li>SalesID (รหัสการขาย) - Primary Key</li>
                        <li>ModelID (รหัสรุ่นรถ) - Foreign Key จากตาราง Model</li>
                        <li>EmployeeID (รหัสพนักงาน) - Foreign Key จากตาราง Employee</li>
                        <li>SaleDate (วันที่ขาย)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
