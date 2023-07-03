<x-app-layout>
    <div class="container min-w-full py-5 lg:py-10 px-5 lg:px-10 flex flex-col gap-3">

        <div class="flex flex-row justify-between">
            <h2 class="text-2xl">Customers</h2>
            <div>
                <a href="{{ route("customers.new") }}" class="btn btn-sm btn-primary">
                    <i class="ri-add-line"></i> Nuovo
                </a>
            </div>
        </div>

        <div class="container min-w-full overflow-x-auto">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Favorite Color</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                <tr class="hover">
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Quality Control Specialist</td>
                    <td>Blue</td>
                </tr>
                <!-- row 2 -->
                <tr>
                    <th>2</th>
                    <td>Hart Hagerty</td>
                    <td>Desktop Support Technician</td>
                    <td>Purple</td>
                </tr>
                <!-- row 3 -->
                <tr>
                    <th>3</th>
                    <td>Brice Swyre</td>
                    <td>Tax Accountant</td>
                    <td>Red</td>
                </tr>
                </tbody>
            </table>
        </div>


    </div>
</x-app-layout>
