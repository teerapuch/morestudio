<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-xl py-2">
                        แบบทดสอบเพื่อคัดกรองผู้เข้าสมัคร
                    </h2>
                    <ul>
                        <li>1. ออกแบบฐานข้อมูลระบบบันทึกการขายรถของโชว์รูมรถ โดยที่จะมีการเก็บข้อมูลดังนี้ >> ยี่ห้อรถ / รุ่นรถ / พนักงาน / ประวัติการขายของแต่ละครั้ง <br /> (รุ่นไหนถูกขาย ขายโดยพนักงานคนไหน) 
                            <br /> <br />
                            <a class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                            href="{{ url('answer/1') }}">
                                คำตอบ
                            </a>
                            <br /> <br /> 
                        </li>
                        <li>
                            2. จากฐานข้อมูลที่ออกแบบ เขียนคำสั่ง mysql เพื่อแสดงจำนวนที่ขายไปได้ในแต่ละยี่ห้อ/รุ่นในช่วงวันที่ 1 มิ.ย 2022 - 15 มิ.ย 2022
                            <br /> <br />
                            <a class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                            href="{{ url('answer/2') }}">
                                คำตอบ
                            </a>
                            <br /> <br /> 
                        </li>
                        <li>
                            3. จากฐานข้อมูลที่ออกแบบ ให้เขียน API
                            <ul class="px-4">
                                <li>
                                3.1 ดึงข้อมูลจำนวนการขายรถของรถแต่ละยี่ห้อตามช่วงวันที่กำหนด 

                                <br /> <br />
                                <a class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                href="{{ url('answer/3/1') }}">
                                    คำตอบ
                                </a>
                                <br /> <br /> 

                                </li>
                                <li>
                                    3.2  ดึงข้อมูลจำนวนการขายรถของรถแต่ละยี่ห้อ/รุ่นตามช่วงวันที่กำหนด
                                    <br /> <br />
                                    <a class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                    href="{{ url('answer/3/2') }}">
                                        คำตอบ
                                    </a>
                                    <br /> <br /> 
                                </li>
                                <li>
                                    3.3 ดึงข้อมูลจำนวนการขายรถโดยแยกตามยี่ห้อ/รุ่น ของพนักงานตาม id ของพนักงาน และ ช่วงวันที่กำหนด
                                    <br /> <br />
                                    <a class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                    href="{{ url('answer/3/3') }}">
                                        คำตอบ
                                    </a>
                                    <br /> <br />
                                </li>
                                <li>
                                    3.4 เพิ่มประวัติการขายรถ โดยมีการคืน response เป็น record ของประวัติการขายที่ทำการเพิ่มเข้ามา

                                    <br /> <br />
                                    <form 
                                        method="post" 
                                        action={{ 
                                            url('answer/3/4') 
                                        }}
                                        >
                                        @csrf
                                        <input 
                                            type="text" 
                                            name="BrandID" 
                                            placeholder="BrandID" 
                                        />
                                        <input 
                                            type="text" 
                                            name="ModelID" 
                                            placeholder="ModelID" 
                                        />
                                        <input 
                                            type="text" 
                                            name="EmployeeID" 
                                            placeholder="EmployeeID"
                                        />
                                        <input 
                                            type="date" 
                                            name="SaleDate" 
                                        />
                                        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                            Save
                                        </button>
                                    </form>
                                    <br /> <br />
                                </li>
                                <li>
                                    3.5 เพิ่ม/แก้ไข รุ่นรถ โดยมีการคืน response เป็น record ข้อมูลรถที่ทำการเพิ่ม/แก้ไข

                                    <br /><br />
                                    Add New

                                    <br /> <br />
                                    <form 
                                        method="post" 
                                        action={{ 
                                            url('answer/3/5/1') 
                                        }}
                                        >
                                        @csrf
                                        <input 
                                            type="text" 
                                            name="BrandID" 
                                            placeholder="BrandID" 
                                        />
                                        <input 
                                            type="text" 
                                            name="ModelName" 
                                            placeholder="ModelName" 
                                        />
                                        
                                        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                            Save
                                        </button>
                                    </form>
                                    <br /> 
                                    Update
                                    <br /><br />
                                    <form 
                                        method="post" 
                                        action={{ 
                                            url('answer/3/5/2') 
                                        }}
                                        >
                                        @csrf
                                        <input 
                                            type="text" 
                                            name="ModelID" 
                                            placeholder="ModelID" 
                                        />
                                        <input 
                                            type="text" 
                                            name="BrandID" 
                                            placeholder="BrandID" 
                                        />
                                        <input 
                                            type="text" 
                                            name="ModelName" 
                                            placeholder="ModelName" 
                                        />
                                        
                                        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                            Save
                                        </button>
                                    </form>

                                </li>
                            </ul>
                        </li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
