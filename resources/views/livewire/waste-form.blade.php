<div>
    <div x-data="{ scannedWaste: '' }" class="flex items-center" style="height: 93vh;">
        <div class="mx-auto px-4 md:flex block items-start" style="width: 800px">
            <div class="md:w-[25vw] bg-green-600 text-white p-4 flex items-center justify-between">
                <h2 class="text-xl font-semibold">Waste Scanning Form</h2>
                <img src="https://img.freepik.com/premium-vector/recycling-waste-icon-with-trash-bin_116137-5923.jpg"
                    alt="Waste Icon" class="w-8 h-8">
            </div>

            <form wire:submit.prevent="saveWaste" class="p-6 bg-white md:w-[40vw] rounded-md overflow-hidden shadow-md">
                <!-- Waste Type -->
                <div class="mb-4">
                    <label for="wasteType" class="block text-sm font-medium text-gray-700 flex items-center">
                        <span class="mr-2 text-green-600">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                        Waste Type
                    </label>
                    <input type="text" id="wasteType" wire:model="wasteType"
                        class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-green-600">
                </div>

                <!-- Quantity -->
                <div class="mb-4">
                    <label for="quantity" class="block text-sm font-medium text-gray-700 flex items-center">
                        <span class="mr-2 text-green-600">
                            <i class="fas fa-weight"></i>
                        </span>
                        Quantity (in kilograms)
                    </label>
                    <input type="number" id="quantity" wire:model="quantity"
                        class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-green-600">
                </div>

                <!-- Location -->
                <div class="mb-4">
                    <label for="location" class="block text-sm font-medium text-gray-700 flex items-center">
                        <span class="mr-2 text-green-600">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        Collection Location
                    </label>
                    <input type="text" id="location" wire:model="location"
                        class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-green-600">
                </div>

                <!-- Starting Price -->
                <div class="mb-4">
                    <label for="startingPrice" class="block text-sm font-medium text-gray-700 flex items-center">
                        <span class="mr-2 text-green-600">
                            <i class="fas fa-dollar-sign"></i>
                        </span>
                        Starting Price (in currency)
                    </label>
                    <input type="number" id="startingPrice" wire:model="startingPrice"
                        class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-green-600">
                </div>

                <!-- Characteristics -->
                <div class="mb-4">
                    <label for="characteristics" class="block text-sm font-medium text-gray-700 flex items-center">
                        <span class="mr-2 text-green-600">
                            <i class="fas fa-info-circle"></i>
                        </span>
                        Waste Characteristics
                    </label>
                    <input type="text" id="characteristics" wire:model="characteristics"
                        class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-green-600">
                </div>

                <!-- Notes -->
                <div class="mb-4">
                    <label for="notes" class="block text-sm font-medium text-gray-700 flex items-center"
                        row="10">
                        <span class="mr-2 text-green-600">
                            <i class="fas fa-sticky-note"></i>
                        </span>
                        Additional Notes
                    </label>
                    <textarea id="notes" wire:model="notes"
                        class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-green-600"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-green-600 text-white p-2 rounded-md hover:bg-green-700 focus:outline-none focus:shadow-outline-green transition duration-300">
                        <span class="mr-2">
                            <i class="fa-solid fa-barcode-read"></i>
                        </span>
                        Scan Waste
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
